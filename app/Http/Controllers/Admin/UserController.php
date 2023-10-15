<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Sкак форма для создания нового ресурса.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Сохраните вновь созданный ресурс в хранилище.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // сохроанение при создании пользователя
    {
       // массово назначаемые атрибуты в модели User
        $this->validate($request, [
            'name'  =>  'required',
            'email' =>  'required|email|unique:users',
            'password'  =>  'required',
            'avatar'    =>  'nullable|image'
        ]);
    // dd($request->file('avatar'));
    
        $user = User::add($request->all());
        $user->generatePassword($request->get('password'));
        $user->uploadAvatar($request->file('avatar'));

        return redirect()->route('user.index');
      
    }

    /**
     * Показать форму редактирования указанного ресурса.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
       return view('admin.user.edit', compact('user'));
    }

    /**
     * Обновить указанный ресурс в хранилище.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // обновление при редактировании данных пользователя
    {
      // массово назначаемые атрибуты в модели User
       $user = User::find($id);
       $request->validate([
            'name' => 'required',
            'email' => [         // Принуждение уникального правила игнорировать данный идентификатор: https://laravel.com/docs/8.x/validation#rule-unique
                          'required',
                          'email',
                           Rule::unique('users')->ignore($user->id),
                        ], 
            'avatar' => 'nullable|image'
          ]); 
           
      //dd($request->all());
        $user->generatePassword($request->get('password'));
        $user->update($request->all()); // изменяем все данные из запроса name,email, password, avatar
        $user->uploadAvatar($request->file('avatar')); // загружаем картинку из запроса (из формы)

        return redirect()->route('user.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->remove();
        return redirect()->route('user.index');
    }
}
