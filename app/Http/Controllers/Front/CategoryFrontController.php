<?php
namespace App\Http\Controllers\Front;

use Auth;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;

class CategoryFrontController extends Controller
{
    
    public function index($slug) // выводит все статьи выбранной категории 
    {
        $user = Auth::user();
        $categories = Category::where('slug', $slug)->firstOrFail(); // получаем все про катеорию по слагу для заголовка
        $articles = $categories->posts()->orderBy('id', 'desc')->paginate(12); //  для выбранной по слагу категории получили категорию, 
        // затем через связь обращаемся к методу post() модели Post в модели Category и извлекаем все статьи для этой категории
        return view('front.frontcategory.index', compact('articles', 'categories', 'user'));
    }
    
    public function show() // выводит все категории
    {
        $user = Auth::user();
        $categories = Category::all();
        //$count = $categories->posts()->count() 
        return view('front.frontcategory.show', compact('categories', 'user'));
    }
}
