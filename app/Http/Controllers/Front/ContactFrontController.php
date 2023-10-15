<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;



class ContactFrontController extends Controller
{
   public function send(Request $request) 
    { 
      if ($request->method() == 'POST'){
         $body = "<p><b>Имя:</b> {$request->input('name')}</p>";
         $body .= "<p><b>Тема:</b> {$request->input('subject')}</p>";
         $body .= "<p><b>E-mail:</b> {$request->input('email')}</p>";
         $body .= "<p><b>Телефон:</b> {$request->input('phone')}</p>";
         $body .= "<p><b>Сообщение:</b><br>" . nl2br($request->input('message')) ."</p>";
         Mail::to('bvlata@mail.ru')->send(new ContactMail($body));
         $request->session()->flash('success', 'Сообщение отправлено.');
         return redirect('/contact');
       
     }
          return view('front.contact.send'); // показывает форму контакта если метод GET
    }
    /*
    public function sen()
    {
        Mail::to('bvlata@mail.ru')->send(new ContactMail()); // отправляет сообщение об отправке
        return view('front.contact.senc');
    }
    */
   
    public function validateGCaptch(Request $request)
    {
         
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:contact-us,0.5'
 
        ]);
        $save = new Contact;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->email;
        $save->subject = $request->subject;
        $save->message = $request->message;
        $save->save();
 
        return redirect('google-v3-recaptcha')->with('status', 'Google V3 Recaptcha has been validated form');
     }

    public function sendmail()
    {   
       return view('front.contact.sendmail'); // содержание выводится на странице отправки формы в виде флэш сообщения при успешной отправке письма
}

}