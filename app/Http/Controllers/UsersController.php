<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

   public function create() // регистрация пользователей, показывает форму регистрации
    {
        return view('users.create');
    }

 
    public function store(StoreUserRequest $request) // сохраняем данные, введенные в форму
    {
        $user = User::create([            // данные берем из реквеста
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'terms' => $request->terms,
        ]);
    
        $user->generatePassword($request->get('password')); // сохранили пароль
        session()->flash('success', 'Регистрация пройдена'); 
        Auth::login($user);  // авторизация пользователя, прошедшего регистрацию
        return redirect()->route('home');
      
       }

     public function loginForm() // Показывает форму входа
    {
        return view('users.login');
    }
     
     public function login(Request $request) // реализует авторизацию
    {
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password, // метод attempt фасада Auth проверяет совпадение данные из реквеста и БД, если совпадают, то залогинить и вернуть true
        ])) 
        
        {
            session()->flash('success', 'Вы успешно вошли');
            if (Auth::user()->is_admin)  // получаем объект пользователя и провреяем свойство is_admin
            {
                return redirect()->route('admin.index');
            } 
            else 
            {
                return redirect()->route('home');
            }
        }

        return redirect()->back()->with('error', 'Неверный логин или пароль'); // системное флаш-сообщение об ошибке
    }

    public function logout()
    {
        Auth::logout();  // обращаемся к фасаду Auth и его методу logout()
       // return redirect()->route('login.create '); // переход на страницу входа
       return redirect()->route('home.show');
    }
}