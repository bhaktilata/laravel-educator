<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     *Обработка входящего запроса.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {  
        // проверяем авторизован ли пользователь Auth::check() и если да, то является ли он администратором
        if (Auth::check() && Auth::user()->is_admin) {  
            return $next($request);   // пропускаем пользователя дальше и он попадет в админку
        }
        abort(404);
    }
}
