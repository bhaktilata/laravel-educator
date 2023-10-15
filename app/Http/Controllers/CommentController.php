<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{
    public function store(Request $request) // создает комментарий на фронтэнде через форму комментаий
    {
    	//dd($request->get('post_id'));
        $this->validate($request, [
    		'message' => 'required'
    	]);
        
// один вариант создания комментария
    	$comment = new Comment;  // объвляем и ниже заполняем из формы
    	$comment->text = $request->get('message');  // в форме у нас поле message, а в бд - поле text, поэтому записываем значение поля в text
    	$comment->post_id = $request->get('post_id'); //  берем из  из скрытого поля формы отправки комметнария -> name="post_id" value="{{ $article->id }}"
    	$comment->user_id = Auth::user()->id;
        $comment->save();
    	
//dd($comment);
    	return redirect()->back()->with('status', 'Ваш комментарий будет скоро добавлен!');
       
    }
     
     public function create()
    {
        return view('admin.comments.create');
    }

   
}