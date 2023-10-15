<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
#use App\Models\Page;
use App\Models\User;


class Page extends Model {

    use Sluggable;
    protected $fillable = ['title', 'title_seo', 'slug', 'subtitle', 'author', 'image', 'thumbnail', 'annotation', 'description', 'keywords', 'content', 'user_id', 'visible', 'is_featured']; // разрешение массовой загрузки полей формы

     public function authors()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function uploadImage(Request $request, $image = null)
    {

        if ($request->hasFile('thumbnail')) { // если в форме выбрано новое изображение,
            if ($image) {   // в том случае, еесли старое изображение есть,
                 Storage::delete($image); // то старое в базе данных удаляется
            }
            $folder = date('Y-m-d'); // затем возвращаем путь  к новому файлу
            return $request->file('thumbnail')->store("{$folder}"); // и сохранияем в БД
        }
        return null; // возвращаем нуль, если в форме новое изображение не выбрано
    }
    public function getImage() // вставляется в вид edit админки, а также в вид блога front/article/index.blade.php
    {
        if (!$this->thumbnail) {
            return asset("public/img/no-image.png");
        }
        return asset("public/uploads/images/{$this->thumbnail}");
    }

    public function getPageDate()
    {
       $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
       $formatter->setPattern('d MMM y');
        return $formatter->format(new \DateTime($this->created_at));
       //return Carbon::parse($this->created_at)->diffForHumans();
    }
     public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
     public function scopeLike($query, $s)
    {
        return $query->where('title', 'LIKE', "%{$s}%");
    }
    public function getPostDate()
    {
        $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        $formatter->setPattern('d MMM y');
        return $formatter->format(new \DateTime($this->created_at));
        //return Carbon::parse($this->created_at)->diffForHumans();

    }
   }
