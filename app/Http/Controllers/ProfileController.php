<?php

namespace App\Http\Controllers;

//use Illuminate\Validation\Rule;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
//use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
    	$user = Auth::user();  // текущий экземпляр авторизованного пользователя в данный момент на сайте
        //dd($user);
        return view('pages.profile', compact('user'));
        
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name'	=>	'required',
    		'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::user()->id), //  игнорирует пользователя, который залогинился, чтобы не выводить ошибку с неуникальностью email
            ],
            'avatar' =>	'nullable|image'
    	]);
  //dd($request->all());
    	$user = Auth::user();
        //dd($user);
    	$user->edit($request->all());  //  метод edit берётся из модели User
    	$user->generatePassword($request->get('password'));
    	$user->uploadAvatar($request->file('avatar'));  //  метод uploadAvatar() берётся из модели User

    	return redirect()->back()->with('status', 'Профиль успешно обновлен');
    }

   
}
