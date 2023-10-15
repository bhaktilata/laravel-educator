<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
//use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreCategory;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
       $categories = Category::paginate(10);
       return view('admin.categories.index', compact('categories'));
    }
 public function count()
    {
     $count = Category::count();
     return view('admin.index', compact('count'));
    }

    /**
     * Показать форму для создания нового ресурса.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
         $categories = Category::pluck('title', 'id', 'parent_id')->all();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Сохраните вновь созданный ресурс в хранилище.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    { 
       // $request->validate([
       //     'title' => 'required',
       // ]);
        Category::create($request->all()); // все данные берутся из request
//      $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('categories.index')->with('success', 'Категория добавлена');
    }

    /**
     * Показать форму редактирования указанного ресурса.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Обновить указанный ресурс в хранилище.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $category = Category::find($id);
    //  $category->slug = null;             // позволяет автоматически сгенериовать новый слаг, если оствить поле пустым 
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Изменения сохранены');
    }

    /**
     *Удалить указанный ресурс из БД
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    
    public function destroy($id)
    {
        $category = Category::find($id);
        //dd($category->posts->count());
        if ($category->posts->count()) {  //  если у категории есть записи, то не удаляя, делаем редирект на список категорий
            return redirect()->route('categories.index')->with('error', 'Ошибка! У категории есть записи');
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Категория удалена');
    }
}
