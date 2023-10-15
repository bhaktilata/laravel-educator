<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Eveningclasse;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\User;

use App\Http\Requests\StoreEveningclasseRequest;
//use App\Http\Requests\StoreEveningclasse;

class EveningClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
       $classes = Eveningclasse::paginate(10);
       return view('admin.eveningclasses.index', compact('classes'));
    }
 public function count()
    {
     $count = Eveningclasse::count();
     return view('admin.eveningclasses.index', compact('count'));
    }

    /**
     * Показать форму для создания нового ресурса.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
         $eveningclasses = Eveningclasse::pluck('title', 'id', 'parent_id')->all();
        return view('admin.eveningclasses.create', compact('eveningclasses'));
    }

    /**
     * Сохраните вновь созданный ресурс в хранилище.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreEveningClasseRequest $request)
    { 
       // $request->validate([
       //     'title' => 'required',
       // ]);
       Eveningclasse::create($request->all()); // все данные берутся из request
//      $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('eveningclasses.index')->with('success', 'Вечернее занятие добавлено');
    }

    /**
     * Показать форму редактирования указанного ресурса.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {  
        $users = User::pluck('name', 'id')->all();
        $eveningclasses = Eveningclasse::find($id); // текущая, редактируемая категория
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.eveningclasses.edit', compact('users', 'eveningclasses','tags'));
        
    }

    /**
     * Обновить указанный ресурс в хранилище.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
   
    public function update(StoreEveningClasseRequest $request, $id)
    {
        $eveningclasses = Eveningclasse::find($id);
        //$category->slug = null;             // позволяет автоматически сгенериовать новый слаг, если оствить поле пустым 
        $data = $request->all();
        if ($file = Eveningclasse::uploadImage($request, $eveningclasses->thumbnail)) { // при редактировании статьи, если файл есть, тогда присвоим $file (присвоим названике файла), котрое есть в $data['thumbnail'], поэтому название не пропадет
            $data['thumbnail'] = $file; // здесь сохраняется Null если новой картинки нет, таким образом без проверки картинка теряеися
        }
        $eveningclasses->update($data);
        return redirect()->route('eveningclasses.index')->with('success', 'Вечернее занятие изменено');
    }

    /**
     *Удалить указанный ресурс из БД
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    
    public function destroy($id)
    {
        $eveningclass = Eveningclasse::find($id);
        //dd($category->posts->count());
       // if ($portfolio->posts->count()) {
        //    return redirect()->route('portfolios.index')->with('error', 'Ошибка! У категории есть записи');
        //}
        $eveningclass->delete();
        return redirect()->route('admin.eveningclasses.index')->with('success', 'Категория удалена');
    }
}
