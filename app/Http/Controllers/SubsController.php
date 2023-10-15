<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Mail\SubscribeEmail;
use Illuminate\Http\Request;

class SubsController extends Controller // подписка на рассылку пользователями
{
    public function subscribe(Request $request)
    {
    	//dd($request->all());

        $this->validate($request, [
    		'email'	=>	'required|email|unique:subscriptions'
    	]);
    	
       	$subs = Subscription::add($request->get('email'));
        $subs->generateToken();
    	\Mail::to($subs)->send(new SubscribeEmail($subs));
		//\Mail::to($subc)->send(new OrderSnipped($order));
//dd($subs->all());
    	return redirect()->back()->with('status','Проверьте вашу почту!');
    }

    public function verify($token)
    {
        //dd($token);
    	$subs = Subscription::where('token', $token)->firstOrFail();
    	$subs->token = null;
    	$subs->save();
    	return redirect('/')->with('status', 'Ваша почта подтверждена! СПАСИБО!');
    }
}