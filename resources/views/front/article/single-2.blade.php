@extends('front.layouts.layout')
@section('title', 'Институт сознания INICONS :: ' . $article->title_seo )
@section('page-title')
<section class="w3l-service-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>{{ $article->title }}</h2>
      <p><a href="{{ route('home.show') }}">Главная</a> &nbsp; /  &nbsp; <a href="{{-- route('category.list', ['slug' => $article->category->slug]) --}}">{{ $article->category->title }}</a> &nbsp; / &nbsp; {{ $article->title_seo}}</p>
    </div>
  </div>
</section>
@endsection
@section('content')

<!--================Home Banner Area =================-->
        <section class="banner_areal clearfix">
            <div class="d-flex align-items-center">
                <div class="container">
                    <div class="banner_content">
                        <h2>Отдельная статья</h2>
                            <span class="page_link">
                                <a href="{{ route('home.show') }}">Главная</a>
                                <a href="{{-- route('article.show') --}}">Блог</a>
                            </span>
                   </div>
               </div>
            </div>
        </section>
        
        <!--================End Home Banner Area =================-->
     <!--================Blog Area =================-->
 <section class="blog_area single-post-area p_120">
     <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">

                         @if(session('status'))
                         <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                         </div>   
                         @endif
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                     <img src="{{ $article->getImage() }}" class="img-fluid w-100" alt="{{ $article->title}}">
                                </div>                  
                            </div>
                            <div class="col-lg-12  col-md-3">
                                <div class="blog_info text-left">
                                    <div class="post_tag">
                                        <a href="{{-- route('category.list', ['slug' => $article->category->slug]) --}}">Категория: {{ $article->category->title }}</a>
                                    </div>
                                    <ul class="social-links">
                                        <li><i class="lnr lnr-user"></i> Автор: {{ $article->author }}</li>
                                        <li><i class="lnr lnr-calendar-full"></i> Дата публикации: {{ $article->getPostDate()}}</li>
                                        <li><i class="lnr lnr-eye"></i> Хиты: {{ $article->hits }}</li>
                                        <li><i class="lnr lnr-bubble"></i> Комментарии: <a href="#">06 Comments</a></li>
                                        @if($article->tags->count())
                                            <div class="tag-cloud-single">
                                                <span>Тэги:</span>
                                                @foreach($article->tags as $tag)
                                                <small><a href="{{-- route('tags.single', ['slug' => $tag->slug]) --}}" title="">{{ $tag->title }}</a></small>
                                                @endforeach
                                            </div><!-- end meta -->
                                        @endif
                                   </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-9 blog_details">
                                <h2>{{ $article->title }}</h2>
                                <p class="excert">{!! $article->content !!}</p>
                            </div>

                        
                        </div>
                 <!--Pagination Button-->    
                    <div class="row">
                     <!--blog next previous-->
                        <div class="col-md-6">
                           @if($article->hasPrevious())
                            <div class="single-blog-box">
                                <a href="{{-- route('article.show', $article->getPrevious()->slug) --}}">
                                  <img src="{{$article->getPrevious()->getImage()}}" width="250" alt="">
                                    <div class="overlay">
                                        <div class="promo-text">
                                            <p><i class=" pull-left fa fa-angle-left"></i></p>
                                            <h5>{{$article->getPrevious()->title}}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                        </div>

                       <div class="col-md-6">
                            @if($article->hasNext())
                            <div class="single-blog-box">
                                <a href="{{-- route('article.show', $article->getNext()->slug) --}}">
                                    <img src="{{$article->getNext()->getImage()}}" width="250" alt="">
                                    <div class="overlay">
                                        <div class="promo-text">
                                            <p><i class=" pull-right fa fa-angle-right"></i></p>
                                            <h5>{{$article->getNext()->title}}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                         </div>
                    </div>
                <!--blog next previous end-->

               <!--related post carousel-->
                <div class="related-post-carousel">
                    <div class="related-heading">
                        <h4>Вам также может понравиться</h4>
                    </div>
                    <div class="items">
                    @foreach($article->related() as $item)
                        <div class="single-item">
                            <a href="{{--route('article.single', $item->slug) --}}">
                                <img src="{{$item->getImage()}}" width="250" alt="">

                                <p>{{$item->title}}</p>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
                <!--//related post carousel-->
            <!--//Pagination Button-ion Begin--> 
  <!--Comments Block-->   


  <!--//Comments Block -->
                    <div class="comments-area clearfix">
                            <h4>{{$article->getComments()->count()}} Комментарий(я)</h4>
                         
    <!--через статью $article получаем комментарий, дату его создания и затем автора с его аватаром-->
                @if(!$article->comments->isEmpty())
                     @foreach($article->getComments() as $comment) 
                             
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                             <img class="img-circle" src="public/uploads/images/{{$comment->author->getImage()}}" alt="" width="75" height="75">
                                            
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">{{$comment->author->name}}</a></h5>
                                            <p class="date">{{$comment->created_at->diffForHumans()}}</p>
                                            <p class="comment">{{$comment->text}}</p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">ответить</a> 
                                    </div>
                                </div>
                            </div>
                       @endforeach
                        @else 
                         <h5>Комментарий пока нет</h5> 
                    @endif
                        <!--//Comments-->
                            <!--Reply to Comment 1-->
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="/assets/front/img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Анна Петрова</a></h5>
                                            <p class="date">4 декабря , 2021 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="#" class="btn-reply text-uppercase">ответить</a> 
                                    </div>
                                </div>
                            </div>  

                     <!--Forma Comments--->            
                    <!--затемвыводим форму для отправки комментария-->   
                    </div>
                        @if(Auth::check())
                            <div class="comment-form">
                                <h4>Оставьте свой комментарий</h4>
                                <form class="form-horizontal contact-form" role="form" method="post" action="{{ route('comment.store') }}">
                                  @csrf
                                    <input type="hidden" name="post_id" value="{{$article->id}}"> 
                                        <div class="form-group">
                                            <textarea class="form-control mb-10" rows="6" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required="">
                                            </textarea>
                                        </div>
                                    <button  type="submit" class="btn send-btn">Отправить</button>
                                </form>
                            </div>
                       @endif
        <!--//Comment Section End--> 
            </div>
             include('front.particls.sidebar')  
                    </div>
                  </div>
          
        
    </section>        
@endsection
 