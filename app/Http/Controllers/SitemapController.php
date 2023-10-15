<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;


class SitemapController extends Controller
{
    public function index(): Response
    {
        $posts = Post::latest()->get();
        return response()->view('sitemap.map', ['posts' => $posts])->header('Content-Type', 'text/xml');
       
    }
    public function show()
    {
        $posts = Post::latest()->get();
        return view('sitemap.show', ['posts' => $posts]);
       
    }
}