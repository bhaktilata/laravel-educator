<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
#use App\Models\EveningClasse;
use Auth;

class HomeController extends Controller
{
    public function index()  // показ всех материалов вечерних занятий
    {
       //Cache::flush();
       //if (Cache::has('articles')) {
          //  $articles = Cache::get('articles');
       // } else {
            #$classes = EveningClasse::all()->where('visible', 1);
            $articles = Post::with('category')->where('visible', 1)->orderBy('id', 'desc')->paginate(3);
           
           // Cache::put('articles', $articles, 300);
        //}
        //dd($classes);
           $user = Auth::user();
          // return view('front.home.index', compact('classes', 'user'));
          return view('front.home.index', compact('articles', 'user'));
    }
   
}   