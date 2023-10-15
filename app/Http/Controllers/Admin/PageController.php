<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePageRequest;


class PageController extends Controller
{

    public function index()
    {
        $pages = Page::orderBy('id', 'desc')->paginate(5);
        //$page = Page::with('category', 'tags')->paginate(20);
        //dump($posts);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Показать форму для создания нового ресурса.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name', 'id')->all();
        $pages = Page::pluck('title', 'id')->all(); // выблрка двух параметров title и id из массива
        //$tags = Tag::pluck('title', 'id')->all();
        return view('admin.pages.create', compact('users', 'pages'));
    }

    /**
     * Сохраните вновь созданный ресурс в БД при создании страницы
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePageRequest $request)
    {

        $data = $request->all(); // получаем из формы

       if ($request->hasFile('thumbnail')) { // если картинка в Request есть
               $folder = date('Y-m-d');
               $data['thumbnail'] = $request->file('thumbnail')->store("images/{$folder}"); // сохраняем в папке сервера
           }

        $data['thumbnail'] = Page::uploadImage($request); // куда загружает
        $page = Page::create($data); // создаем объект модели, затем мы к нему обращаемся
        return redirect()->route('pages.index')->with('success', 'Статья добавлена');
    }

    /**
     * Показывает форму для редактирования указанного ресурса (статья).
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $users = User::pluck('name', 'id')->all();
        $page = Page::find($id); // текущая, редактируемая страница
        return view('admin.pages.edit', compact('users', 'page'));
    }

    /**
     * Обновить указанный ресурс в хранилище при редактировании статьи.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StorePageRequest $request, $id)
    {

        $page = Page::find($id);
        $data = $request->all(); // сохраняем массив реквест (из формы)
        if ($file = Page::uploadImage($request, $page->thumbnail)) { // при редактировании статьи, если файл есть, тогда присвоим $file (присвоим названике файла), котрое есть в $data['thumbnail'], поэтому название не пропадет
            $data['thumbnail'] = $file;
        }

   /* if ($request->hasFile('thumbnail')) {
        Storage::delete($post->thumbnail); // то картинку удаляем
        $folder = date('Y-m-d');
        $data['thumbnail'] = $request->file('thumbnail')->store("($folder)"); //сохраняем
        }
    */
        $page->update($data); // обновляем массив

        return redirect()->route('page.index')->with('success', 'Изменения сохранены');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $page = Page::find($id); // вмсете со связанными данными
        Storage::delete($page->thumbnail);
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Статья удалена');
    }
}
