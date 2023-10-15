<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Eveningclasse extends Model
{
    use Sluggable;
    protected $fillable = ['title', 'title_menu', 'slug', 'author', 'video', 'image', 'thumbnail', 'description', 'keywords', 'content', 'user_id', 'visible', 'hits']; // разрешение массовой загрузки полей формы
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    	//return $this->hasOne(Post::class);
    }
     public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public static function uploadImage(Request $request, $image = null)
    {
       
        if ($request->hasFile('thumbnail')) { 
            if ($image) {   // в том случае, еесли старое изображение в БД есть, возвращается название, иначе Null
                 Storage::delete($image); // то старое в базе данных удаляется
            }
            $folder = date('Y-m-d'); // затем возвращаем путь  к новому файлу
            return $request->file('thumbnail')->store("{$folder}"); // возвращает название если картинка есть
        }
        return null; // возвращаем нуль, если в форме новое изображение не выбрано
    }
    public function getImage() // вставляется в вид edit админки, а также в вид блога front/article/index.blade.php 
    {
        if (!$this->thumbnail) {
            return asset("public/img/no-image.png");
        }
       // return asset("public/uploads/images/{$this->thumbnail}");
        return asset("public/uploads/images/{$this->thumbnail}");
    }
    public function getPostDate()
    {
       $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
       $formatter->setPattern('d MMM y');
        return $formatter->format(new \DateTime($this->created_at));
       //return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function getEveningclasseDate()
    {
       $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
       $formatter->setPattern('d MMM y');
       return $formatter->format(new \DateTime($this->created_at));
       //return Carbon::parse($this->created_at)->diffForHumans();
      
    }
  
}