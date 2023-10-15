<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Page;
//use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function show()
    {
       $pages = Page::where('visible', 1)->orderBy('id', 'desc')->paginate(5);
       return view('front.pages.show', compact('pages'));

    }

    public function single($slug) // показывает полную статью
    {
        //$user = Auth::user();
        $page = Page::where('slug', $slug)->firstOrFail(); // firstOrFail() дает ошибку 404, если статьи нет
        $page->hits += 1;
        //$post->getComments($slug);
        $page->update();
        //$comments = $this->getComments(config('settings.recent_comments'));
        return view('front.pages.single', compact('page'));

    }



}
