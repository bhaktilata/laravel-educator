<?php

namespace App\Providers;
//use App\Providers\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\Paginator;
use App\Models\Comment;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Зарегистрируйте любые службы приложений.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Загрузите любые сервисы приложений.
     *
     * @return void
     */
    public function boot(): void
    {
          view()->composer('front.article.single', function ($view) {
            if (Cache::has('cats')) {
                $cats = Cache::get('cats');
            } else {
                $cats = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
                Cache::put('cats', $cats, 30);
            }

            $view->with('popular_posts', Post::orderBy('hits', 'desc')->limit(3)->get());
            $view->with('last_posts', Post::orderBy('created_at', 'desc')->limit(3)->get());
            $view->with('featured_posts', Post::where('is_featured', 1)->take(3)->get());
            $view->with('cats', $cats); 
            //$view->with('categories', Category::all()); // работает
            $view->with('tags', Tag::withCount('posts')->orderBy('posts_count', 'desc')->get()); // 
        });

         view()->composer('front.particls.sidebar_page', function ($view) {
            if (Cache::has('cats')) {
                $cats = Cache::get('cats');
            } else {
                $cats = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
                Cache::put('cats', $cats, 30);
            }

            $view->with('popular_posts', Post::orderBy('hits', 'desc')->limit(3)->get());
            $view->with('last_posts', Post::orderBy('created_at', 'desc')->limit(3)->get());
            $view->with('featured_posts', Post::where('is_featured', 1)->take(3)->get());
            $view->with('cats', $cats);
            //$view->with('categories', Category::all()); // работает
            $view->with('tags', Tag::withCount('posts')->orderBy('posts_count', 'desc')->get()); // 
        });
        
         Paginator::useBootstrap();

         view()->composer('front.particls.header', function($view){  // View Composers -  Композеры представлений                
            //view() - функцию-хелпер  Сomposers - фасад, 
            //Композеры представлений — это обратные вызовы или методы класса, которые вызываются при отображении представления. 
           // Если у вас есть данные, которые вы хотите привязать к представлению каждый раз, когда это представление визуализируется, 
           // компоновщик представлений может помочь вам организовать эту логику в одном месте. Композеры представлений могут оказаться 
           // особенно полезными, если одно и то же представление возвращается несколькими маршрутами или контроллерами в вашем приложении
            // и всегда нуждается в определенном фрагменте данных.

            $view->with('top_menu', Category::where('published',1)->get());  // top_menu - елюч
        });

        // показывает в админке число не опубликованных комментарий newCommentsCount
         view()->composer('admin.particle.sidebar', function($view){
            $view->with('newCommentsCount', Comment::where('status',0)->count());
        });
         view()->composer('admin.index', function($view){
            $view->with('newCommentsCount', Comment::where('status',0)->count());
        });
    }
}

