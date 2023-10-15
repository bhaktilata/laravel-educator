<?php
namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\EveningClasse;

//use App\Models\Category;
//use Illuminate\Support\Facades\Cache;

class EveningClasseFrontController extends Controller
{
    public function index()  // показ всех материалов вечерних занятий
    {
       //Cache::flush();
       //if (Cache::has('articles')) {
          //  $articles = Cache::get('articles');
       // } else {
            $classes = EveningClasse::all()->where('visible', 1);
           // Cache::put('articles', $articles, 300);
        //}
        //dd($classes);
           $user = Auth::user();
          // return view('front.home.index', compact('classes', 'user'));
          return view('front.eveningclasse.index', compact('classes', 'user'));
    }

    public function single($slug) // показывает полную статью
    {
        $user = Auth::user(); 
        $evening = EveningClasse::where('slug', $slug)->firstOrFail(); // firstOrFail() дает ошибку 404, если статьи нет
        $evening->hits += 1;
        //$post->getComments($slug);
        $evening->update();
       // dd($user);
        //$comments = $this->getComments(config('settings.recent_comments'));
        return view('front.eveningclasse.single', compact('evening', 'user'));
               
    }
     public function show($slug)   // показ всех стаей выбранной категории
    {
        return view('front.article.index');
    }

 
}