@extends('front.layouts.layout')
@section('title', 'Институт сознания INICONS :: Поиск')
@section('page-header')
@endsection
@section('content')
<!--Section BreadCrum-->
  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
            Поиск: {{$s}} </h2>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('home.show')}}">Главная</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Поиск по ключевому слову:  &nbsp; {{$s}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
<!--//Section BreadCrum-->
<section class="w3l-grids-new-main" id="trends">
    <div class="section-content sec-padding py-5">
        <div class="container py-md-3">
            
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
        @if($posts->count())
        @foreach($posts as $article)
        <div class="col-lg-4 col-md-6 item">
            <div class="card">
              <div class="card-header p-0 position-relative">
                <a href="{{ route('article.single', ['slug' => $article->slug]) }}" class="zoom d-block">
                  <img class="card-img-bottom d-block" src="{{ $article->getImage()}}" alt="{{$article->title}}">
                </a>
              </div>
              <div class="card-body blog-details">

                <a href="{{ route('article.single', ['slug' => $article->slug]) }}" class="blog-desc">{{ $article->title }} </a>
                <p>{!! $article->annotation !!}</p>
                <p>Категория: <a href="{{ route('category.single', ['slug' => $article->category->slug]) }}">{{ $article->category->title }}</a>
                        </p>
              </div>
              <div class="card-footer">
                 <div class="author align-items-center">
                 <a href="#author" class="post-author">
                    <img src="{{ asset('public/assets/front/images/team2.jpg')}}" alt="" class="img-fluid rounded-circle">
                  </a>
                     <ul class="blog-meta">
                        <li>
                           <span class="meta-value"></span><a href="#author"> {{ $article->author }}</a>
                        </li>
                      </ul>
                      <div class="date">
                      <p><i class="fa fa-eye"></i> {{ $article->hits }}  &nbsp; <i class="far fa-calendar-alt me-1"></i> {{ $article->getPostDate() }}</p>
                      </div>
                  </div>
               </div>
               

            </div>
          </div>

          @endforeach
         @else
               <h4>По вашему запросу ничего не найдено...</h4>
         @endif
       </div>
    </div>
  </div>
       <div class="container mb-5">
            <div class="col-md-12">
                <nav aria-label="Page navigation">
                    {{ $posts->appends(['s' => request()->s])->links() }}
                </nav>
             
            </div>
        </div>
</section>
@endsection