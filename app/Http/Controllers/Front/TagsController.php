<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Tag;
//use Illuminate\Http\Request;
use App\Models\Post;


class TagsController extends Controller
{

    public function index($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->paginate(2);
       // dd($tag);  
        return view('front.tags.show', compact('tag','posts'));
         
    }
   public function show($slug) // все статьи выбранного тэга
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $articles = $tag->posts()->with('category')->orderBy('id','desc')->paginate(2); // жадная загрузка, статьи и категории сразу
       // dd($tag);  
       return view('front.tags.show', compact('tag','articles'));
         
    }
}
