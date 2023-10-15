<?php
namespace App\Http\Controllers\Front;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
//use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function index()  // блог, показ всех стаей всех категорий
    {
       //Cache::flush();
       //if (Cache::has('articles')) {
          //  $articles = Cache::get('articles');
       // } else {
            $articles = Post::with('category')->where('visible', 1)->orderBy('id', 'desc')->paginate(12);
           // Cache::put('articles', $articles, 300);
        //}
           //dd($articles);
           $user = Auth::user();
           return view('front.article.index', compact('articles', 'user'));
    }

    public function single($slug) // показывает полную статью
    {
        $user = Auth::user();
        $article = Post::where('slug', $slug)->firstOrFail(); // firstOrFail() дает ошибку 404, если статьи нет
        $article->hits += 1;
        //$post->getComments($slug);
        $article->update();
       // dd($user);
        //$comments = $this->getComments(config('settings.recent_comments'));
        return view('front.article.single', compact('article', 'user'));

    }
     public function show($slug)   // показ всех стаей выбранной категории
    {
        return view('front.article.index');
    }


}
