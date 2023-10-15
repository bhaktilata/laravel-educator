@extends('front.layouts.layout')
@section('title', '' . $article->title . ' :: INICONS')
@section('description', '' . $article->description)
@section('keywords', '' . $article->keywords)
@section('content')

<!-- breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
        <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner top-title">
            {{ $article->title }} </h2>

            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('home.show') }}">Главная страница</a> &nbsp;/&nbsp;
              <a href="{{ route('category.single', ['slug' => $article->category->slug]) }}">{{ $article->category->title }}</a> /&nbsp; {{ $article->title_seo }}
            </li>
            </ul>
            <p class="inner-page-para mt-5">
            {!! $article->description !!}</p>
            <p class="inner-page-para mt-5"> Идентификатор статьи: {{ $article->id }}</p>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
    <!--/w3l-blog-->
    <section class="w3l-blog bloghny-page">
      <div class="blog py-4" id="blogpage">
          @if( session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
          @endif
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="bloghnypage-left blog-single-post">
              <div class="single-post-image mb-4">
                <img src="{{ $article->getImage()}}" class="img-fluid w-100 radius-image" alt="{{ $article->title }}">
              </div>
              <div class="blo-singl mb-5">
                <ul class="blog-single-author-date d-sm-flex align-items-center">
                  <li class="circle avatar"><img src="{{ asset('public/assets/front/images/god-rod.jpg')}}" alt="single post image" class="img-fluid">
                  </li>
                  <li>
                    <span class="fas fa-user"></span><a href="#admin"> {{ $article->authors->name  }}</a>
                  </li>
                  <li>
                  Категория: <span><a href="{{ route('category.single', ['slug' => $article->category->slug]) }}">{{ $article->category->title }}</a></span>
                  </li>
                  <li>
                    <span class="fas fa-clock"></span> {{ $article->getPostDate() }}
                  </li>
                  <li>
                    <a href="#comments"><span class="fas fa-eye"></span> {{ $article->hits }} </a>
                  </li>
                </ul>
              </div>

              <div class="single-post-content">
                <h3 class="post-content-title mb-3"> {{ $article->title }}</h3>
                <p class="mb-4"> {!! $article->content !!}</p>

                @if($article->tags->count())
                    <div class="tag-cloud-single">
                        <span>Тэги: </span>
                        @foreach($article->tags as $tag)
                           <a href="{{ route('tags.single', ['slug' => $tag->slug]) }}" title="">{{ $tag->title }}</a>
                        @endforeach
                   </div><!-- end meta -->
                @endif

              </div>
              <!--popular post-->

                <!--//popular post-->

              <ul class="share-post mb-5 text-right">
                <li class="facebook">
                  <a href="#link" title="Facebook">
                    <span class="fab fa-facebook-f" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="twitter">
                  <a href="#link" title="Twitter">
                    <span class="fab fa-twitter" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="google">
                  <a href="#link" title="Google">
                    <span class="fab fa-pinterest-p" aria-hidden="true"></span>
                  </a>
                </li>
              </ul>
         <!--Pagination Button-->
                 <!--Pagination Button-->
                <nav class="post-navigation row mb-5 py-4">
                    <div class="post-prev col-md-6 pr-sm-5">
                    @if ($article->getPrevious())
                  <span class="nav-title">
                    <span class="fa fa-arrow-left mr-2">
                           Предыдущий пост</span> </span>
                        <a href="{{ route('article.single', $article->getPrevious()->slug) }}" rel="prev" class="posts-view posts-view-left">
                            <img src="{{ $article->getPrevious()->getImage() }}" class="pb-3" width="250" alt="">
                            <label>{{$article->getPrevious()->title}}</label>
                        </a>
                    @endif
                    </div>
                    <div class="post-next col-md-6 pl-sm-5 text-md-right mt-md-0 mt-3">
                        @if ($article->getNext())
                        <span class="nav-title">
                            Следующий пост <span class="fa fa-arrow-right ml-2"> </span><span class="next-post pull-right"></span>
                        </span>
                            <a href="{{ route('article.single', $article->getNext()->slug) }}" rel="next" class="posts-view posts-view-right">
                                <img src="{{$article->getNext()->getImage()}}" class="pb-3" width="250" alt="">
                                <label>{{$article->getNext()->title}}</label>
                            </a>
                        @endif
                    </div>
                </nav>
        <!--blog next previous end-->
                <!--blog next previous end-->
        <!--//Pagination Button-->

             <!---Section Comments--->
              <div class="comments">
                <h3 class="post-content-title"> Комментарии ({{$article->getComments()->count()}})</h3>
                <!--через статью $article получаем комментарий, дату его создания и затем автора с его аватаром-->
             <!--Comments-->
        @if(!$article->comments->isEmpty())
            @foreach($article->getComments() as $comment)
                <div class="media mt-md-4 mt-3">
                    <div class="img-circle">
                        <img src="/public/uploads/images/{{$comment->author->getImage()}}" class="img-fluid" alt="..." width="55">
                        <!-- поскольку мы создали function author()
                        // то можем вывести $comment->author->getImage(), getImage() берется из модели User.php-->
                    </div>
                  <div class="media-body comments-grid-right">
                    <a href="#URL" class="name mt-0">{{$comment->author->name}}</a>
                    <!-- // в модели Comment у нас автор комментария назван  author(), используется
                    // модель User, поэтому получаем так  -> return $this->belongsTo(User::class, 'user_id'), т.е. author берется из
                    function author() модели Comment.php-->
                    <ul class="time-rply mb-3">
                      <li>{{$comment->created_at->diffForHumans()}}
                        <!--//  created_at является элементом класса Carbon поэтому мы можем использовать формат даты,
                       // в данном случае diffForHumans()-->
                        <i>|</i>
                      </li>
                      <li>
                        <a href="#reply">Ответить</a>
                      </li>
                    </ul>
                    <p>{!! $comment->text !!}</p>
                   </div>
                </div>
                @endforeach
        @else
                         <h5>Комментарий пока нет</h5>
        @endif
        <h5>Авторизуйтесь, чтобы оставить комментарий!</h5>
                <!--//Comments-->
                </div>
              </div>
              <!---//Section Comments--->
              <div class="blog-single-post">
        @if(Auth::check())
              <!--Form Comment-->
              <div class="reply mt-5" id="reply">
                <h3 class="post-content-title py-sm-5 py-4">Оставьте ответ</h3>
                <form action="{{ route('comment.store') }}" method="POST">
                @csrf
                  <div class="form-group reply">
                      <div class="input-grids row mb-md-4 mb-3">
                          <input type="hidden" name="post_id" value='{{ $article->id }}' id="post_id"/>

                    </div>
                    <textarea class="form-control mb-10 @error('message') is-invalid @enderror" name="message" placeholder="Your Message" id="message"
                      rows="4"  required="required"></textarea>

                    <div class="text-right">
                      <button class="btn btn-primary btn-style mt-3" type="submit">Отправить комментарий</button>
                    </div>
                  </div>
                </form>
                <!--//Form Comment-->
              </div>
          @endif
          </div>

            </div>
          </div>
        </div>
    </section>
    </div>
    <!--//w3l-blog-->
    @endsection
