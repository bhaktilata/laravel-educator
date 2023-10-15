<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use Sluggable;
    protected $fillable = ['title', 'title_menu', 'image', 'description', 'keywords', 'content', 'published']; // разрешение массовой загрузки полей формы
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    	
    }
      public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function getImage() // вставляется в edit вид
    {
        if (!$this->thumbnail) {
            return asset("public/img/no-image.png");
        }
        return asset("uploads/{$this->thumbnail}");
    }
  
    public function getCategoryDate()
    {
       $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
       $formatter->setPattern('d MMM y');
        return $formatter->format(new \DateTime($this->created_at));
       //return Carbon::parse($this->created_at)->diffForHumans();
    }

}