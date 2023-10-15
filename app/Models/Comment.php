<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
#use App\Models\Comment;

class Comment extends Model
{
    // создаем связи
    protected $fillable = ['title', 'text', 'status'];

       public function post()
        {
           return $this->belongsTo(Post::class);
        }

        public function author()
        {
           return $this->belongsTo(User::class, 'user_id');
        }

        public function allow()
        {
            $this->status = 1;
            $this->save();
        }

        public function disAllow()
        {
            $this->status = 0;
            $this->save();
        }

        public function toggleStatus()
        {
            if($this->status == 0)
            {
                return $this->allow();
            }

            return $this->disAllow();
        }

        public function remove()
        {
            $this->delete();
        }

    }
