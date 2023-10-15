<?php
namespace App\Models;

use \Storage;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Массово назначаемые атрибуты.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        //'password',
        'avatar',
        'description',
        'terms',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }
    
    public function edit($fields)
    {
        $this->fill($fields); //name,email
        
        $this->save();
    }

    public function getImage()
    {
        if( $this->avatar )
        {
            return 'avataras/' . $this->avatar;

        }
           return asset("public/img/avatara.jpg");
    }
    
   public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }


     public function uploadAvatar($image)
    {
        if($image == null) { return; }
        $this->removeAvatar();
        //dd(get_class_methods($image));
        $filename = Str :: random(10) . '.' . $image->extension();
        $image->storeAs('avataras', $filename);
        $this->avatar = $filename;
        $this->save();
    }

    public function removeAvatar()
    {
        if($this->avatar != null)
        {
            Storage::delete('/avataras/' . $this->avatar);
        }
    }

    public function generatePassword($password)
    {
        if($password != null)
        {
            $this->password = bcrypt($password);
            $this->save();
        }
    }
    /* 
     public function edit($fields)
    {
        $this->fill($fields); //name,email
       // $this->password = bcrypt($fields['password']);
        $this->save();
    }
*/
}
