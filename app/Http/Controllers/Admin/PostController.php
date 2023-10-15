<?php
namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::with('category', 'tags')->orderBy('id', 'desc')->paginate(30); //width() снижает число запросов к БД
        //dump($posts);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Показать форму для создания нового ресурса.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name', 'id')->all();
        $categories = Category::pluck('title', 'id')->all(); // pluck() реализует выблрку двух параметров title и id из массива
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.posts.create', compact('users', 'categories', 'tags'));
    }

    /**
     * Сохраните вновь созданный ресурс в БД при создании страницы
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePostRequest $request)
    {

        $data = $request->all(); // получаем при сохранении из формы в переменную $data, поскольку они будут изменяться, а именно сохраняем путь к картинке, если она там есть, и затем передаем $data в метод create() поста

        $data['thumbnail'] = Post::uploadImage($request); // куда загружает, метод uploadImage(), описанный в модели Post
        $post = Post::create($data); // создаем объект модели, затем мы к нему обращаемся
        $post->tags()->sync($request->tags); // обращаеемся к связи post->tags с помощью метода sync(), и в него мы передаем массив тэгов, который сохранен в
        // $request->tags, tags - это тэги из requesst, метод sync(), которому мы передаем массив с id тэгаов [1, 2, 3], те которых нет он удаляет и записывает те, что переданы в массиве $request->tags из формы <select name="tags[]" id="tags" class="select2" multiple="multiple"

        return redirect()->route('posts.index')->with('success', 'Статья добавлена');
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
        $post = Post::find($id); // текущая, редактируемая категория
        $categories = Category::pluck('title', 'id')->all(); // общий список категорий
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.posts.edit', compact('users', 'categories', 'tags', 'post'));
    }

    /**
     * Обновить указанный ресурс в хранилище при редактировании статьи.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StorePostRequest $request, $id)
    {
    // когда мы редактируем (одновляем) статью, мы вызываем метод uploadImage() из модели Post, там проверяется не пусто ли поле thumbnail (есть ли картинка)
    // возвращаем название и  возвращаем нуль, если в форме новое изображение не выбран
        $post = Post::find($id);
        $data = $request->all();
        if ($file = Post::uploadImage($request, $post->thumbnail)) { // при редактировании статьи, если файл есть, тогда присвоим $file (присвоим названике файла), котрое есть в $data['thumbnail'], поэтому название не пропадет
            $data['thumbnail'] = $file; // здесь сохраняется Null если новой картинки нет, таким образом без проверки картинка теряеися
        }
        $post->update($data);
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('success', 'Изменения сохранены');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = Post::find($id); // вмсете со связанными данными
        $post->tags()->sync([]);
        Storage::delete($post->thumbnail);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Статья удалена');
    }
}
