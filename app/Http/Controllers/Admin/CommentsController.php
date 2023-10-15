<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $comments = Comment::all();

        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request) // сохранить из реквеста
    {
       $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        //echo 'OK';
        $comment = new Comment;
        $comment->content = $request->get('content');
        $comment->title = $request->get('title');
        $comment->post_id = $request->get('post_id');
        $comment->user_id = Auth::user()->id;
       // $comment->status = $request->get('status');
        $comment->save();

        return redirect()->back()->with('status', 'Ваш комментарий будет скоро добавлен!');
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('admin.comments.edit', compact('comment'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required'

        ]);
        $comment = Comment::find($id);
        $comment->update($request->all());
        return redirect()->route('comments.index')->with('success', 'Изменения сохранены');
    }

    
     public function destroy($id)
    {
         //dd($comment->id);
        $comment = Comment::find($id);
        $comment->delete(); 
        return redirect()->back();
    }



    public function toggle($id)
    {
        $comment = Comment::find($id);
        $comment->toggleStatus();
        return redirect()->route('comments.index');
    }
}