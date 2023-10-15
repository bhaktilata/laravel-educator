<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Carbon\Carbon;
//use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = ['title', 'title_seo', 'slug', 'author', 'image', 'thumbnail', 'annotation', 'description', 'keywords', 'content', 'user_id', 'category_id', 'visible', 'hits', 'is_featured', 'raiting']; // разрешение массовой загрузки полей формы

   public function category()
    {
        return $this->belongsTo(Category::class); // создется связь с категорией
    }

    public function authors()
    {
        return $this->belongsTo(User::class, 'user_id');  // создется связь с автором
    }
   public function tags()
    {
        // withTimestamps() позволяет автоматически добавлять время добалвения тегов в БД
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
     public function comments() // создется связь с комметнариями, но лучше это получать через with в контроллере
    {
        return $this->hasMany(Comment::class);
    }

    // загрузка информации о картинке в БД

    public static function uploadImage(Request $request, $image = null)
    {
           /*Используется has()для проверки наличия значения в запросе. Он возвращает логическое значение. Итак, если в запросе есть какое-либо поле ввода,
        нам нужно проверить, существует ли значение или нет, мы используем has()метод.
        hasFile()используется для проверки наличия файла, в данном случае из поля thumbnail в запросе. Если файл есть мы задаем путь и сохраняем по нему файл
        */

       /* if ($request->hasFile('thumbnail')) { // вы проверить не пусто ли поле thumbnail через $request->has('file'), т.е. есть ли картинка, которая попадает затем в Request,
            $folder = date('Y-m-d');
            $data['thumbnail'] = $request->file('thumbnail')->store("images/{$folder}"); // сохраняем в папке сервера public/uploads (задано в filesystems)
            // здесь же задаем подпапку {$folder} $folder задает подпапки в images по дате загрузки
        }
        */
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
        return asset("public/uploads/images/{$this->thumbnail}");
    }

    public function getPostDate()
    {
       $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
       $formatter->setPattern('d MMM y');
       return $formatter->format(new \DateTime($this->created_at));
       //return Carbon::parse($this->created_at)->diffForHumans();

    }
    /*
     public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }
   */
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
    public function getComments()
    {
        return $this->comments()->where('status', 1)->get();
    }
     public function hasPrevious()
    {
        return self::where('id', '<', $this->id)->max('id');
    }
     public function getPrevious()
    {
        $postID = $this->hasPrevious(); //ID
        return self::find($postID);
    }

    public function hasNext()
    {
        return self::where('id', '>', $this->id)->min('id');
    }

    public function getNext()
    {
        $postID = $this->hasNext();
        return self::find($postID);
    }

    public function related()
    {
        return self::all()->except($this->id);
    }


}
