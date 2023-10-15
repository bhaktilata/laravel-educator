<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscription;
use App\Mail\SubscribeEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribersController extends Controller // работа с подписчиками в админке
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs = Subscription::all();

        return view('admin.subscribers.index', ['subs'=>$subs]);
    }
     public function create()
    {
        return view('admin.subscribers.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            //'name' => 'required',
            'email' => 'required|email|unique:subscriptions',
            //'mailing_name' => 'required'
        ]);
        
        $subs = Subscription::add($request->get('email'));
       // $subs->generateToken();
        
       // \Mail::to($subs)->send(new SubscribeEmail($subs));

        return redirect()->route('subscribers.index');
    }
    public function edit($id)
    {
        $subs = Subscription::find($id);
        return view('admin.subscribers.edit', compact('subs'));
    }
   
     public function destroy($id)
    {
        Subscription::find($id)->delete();
        return redirect()->route('subscribers.index');
    }
    
    public function verify($token)
    {
        $subs = Subscription::where('token', $token)->firstOrFail();
        $subs->token = null;
        $subs->save();
        return redirect('/')->with('status', 'Ваша почта подтверждена!СПАСИБО!');
    }

}
