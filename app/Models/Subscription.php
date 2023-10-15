<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; // метод
use Illuminate\Support\Str;

class Subscription extends Model
{
     
   protected $fillable = ['email', 'mailing_name', 'status']; // разрешение массовой загрузки полей формы
       
    public static function add($email)
    {
        $sub = new static;
        //$sub->name = $name;
        //$sub->status = $status;
        $sub->email = $email;
        $sub->save();

        return $sub;
    }

    public function generateToken()
    {
        $this->token = Str::random(100);
        $this->save();
    }

    public function remove()
    {
    	$this->delete();
    }
}