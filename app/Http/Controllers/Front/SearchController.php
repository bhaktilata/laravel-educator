<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(Request $request)
    {
        $request->validate([
            's' => 'required',
        ]);
        $s = $request->s;
        //dd($s);
        $posts = Post::like($s)->with('category')->paginate(6); // исрользуется scopeLike($query, $s) в модели Post
       // $posts = Post::where('title', 'LIKE', "%{$s}%")->with('category')->paginate(2); // работает
        return view('front.search.index', compact('posts', 's'));
    }
   
}
