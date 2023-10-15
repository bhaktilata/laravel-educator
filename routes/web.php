<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SubscribersController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CkeditorController;

// общие контроллеры
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SitemapController;

// Front конироллеры
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\CategoryFrontController;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\TagsController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\GaleryController;
use App\Http\Controllers\Front\ContactFrontController;
use App\Http\Controllers\Front\EveningClasseFrontController;
use App\Http\Controllers\Front\CourseController;
//use App\Http\Controllers\Front\CommentFrontController;
use App\Http\Controllers\Front\MarketController;
//use App\Http\Controllers\front\GoogleV3CaptchaController;

    Route::get('/', [HomeController::class, 'index'])->name('home.show');
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/article', [ArticleController::class, 'index'])->name('article.show'); // блог, показ всех стаей всех категорий
    Route::get('/article/{slug}', [ArticleController::class, 'single'])->name('article.single'); // вывод полной статьи
    Route::get('/pages', [PagesController::class, 'show'])->name('pages.show'); // список всех страниц
    Route::get('/page/{slug}', [PagesController::class, 'single'])->name('page.single'); // вывод полной страницы
    Route::get('/category/{slug}', [CategoryFrontController::class, 'index'])->name('category.single'); // все статьи отдельной категории
    Route::get('/category', [CategoryFrontController::class, 'show'])->name('category.show'); // список всех категорий
   // Route::get('/rubric', [RubricController::class, 'show'])->name('rubric.show'); // список всех рубрик
    Route::get('/course', [CourseController::class, 'index'])->name('course.show'); // показ всех курсов всех категорий
    Route::get('/evening-classe', [EveningClasseFrontController::class, 'index'])->name('evening.index'); // вывод всех страницы вечернего занятия
    Route::get('/evening-classe/{slug}', [EveningClasseFrontController::class, 'single'])->name('evening.single'); // вывод полной страницы вечернего занятия
    Route::get('/tag/{slug}', [TagsController::class, 'show'])->name('tags.single'); // должен выводить все статьи принадлежащие одному выбранному тэгу
    //Route::get('/tag}', [TagsController::class, 'show'])->name('tags.index'); // должен выводить все статьи принадлежащие одному выбранному тэгу
    //Route::get('/evening-classes', [EveningClasseFrontController::class, 'index'])->name('eveningclasses');
    Route::get('/galery', [GaleryController::class, 'index'])->name('galery');
    Route::get('/market', [MarketController::class, 'index'])->name('market');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::post('/subscribe', [SubsController::class, 'subscribe'])->name('subscribe');
    Route::get('/verify/{token}', [SubsController::class, 'verify'])->name('verify.token');
    Route::match(['get', 'post'], '/contact', [ContactFrontController::class, 'send'])->name('contact.send');
    Route::get('/send', [ContactFrontController::class, 'send'])->name('mail.send');
   // Route::get('google-v3-recaptcha', [GoogleV3CaptchaController::class, 'index']);
    Route::post('validate-g-recaptcha', [ContactFrontController::class, 'validateGCaptch']);
    Route::get('sitemap.xml', [SitemapController::class, 'index']);
    Route::get('sitemap', [SitemapController::class, 'show']);

// Админ-панель для администратора
Route::group(['prefix' => 'administrator', 'namaspace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/page', PageController::class);
    #Route::resource('/product', ProductController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/comments', CommentsController::class);
    Route::get('/admin/comments/toggle/{id}', [CommentsController::class, 'toggle']);
    Route::resource('/subscribers', SubscribersController::class);

    });
    // не залогиненные и не зарегистрированные пользователи (гостей)
    Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UsersController::class, 'create'])->name('register.create'); // зарегистрироваться, роказывает форму
    Route::post('/register', [UsersController::class, 'store'])->name('register.store'); // сохраняет данные пользователя
    Route::get('/login', [UsersController::class, 'loginForm'])->name('login.create'); // показывает форму входа
    Route::post('/login', [UsersController::class, 'login'])->name('login');  // реализует вход

});

   // для авторизованных пользователей
    Route::group(['middleware'  =>  'auth'], function(){
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    //Route::get('/profile', function () {return view('pages.profile');})->name('profile');
    //Route::post('/profile', function () {return view('pages.profile');})->name('profile.store');
    Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/logout', [UsersController::class, 'logout'])->name('logout')->middleware('auth');
});






    Route::fallback(function () {
        abort(404)->name('error');
    });
