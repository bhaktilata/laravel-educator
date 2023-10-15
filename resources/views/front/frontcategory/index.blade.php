@extends('front.layouts.layout')
@section('title') Школа Рассвет Сварога :: {{ $categories->title }}@endsection
@section('description'){{ $categories->description }}@endsection
@section('keywords'){{ $categories->keywords }}@endsection
@section('content')
<!-- breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
            {{ $categories->title }}</h2>
            <p class="inner-page-para mt-2">
            {!! $categories->description !!}</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Главная</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> {{ $categories->title }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
<section class="w3l-courses">
    <div class="blog py-5" id="courses">

    <div class="container">
        <div class="row">
            <section class="w3l-blog">
                <div class="container py-lg-5 py-md-4">
                    <div class="row">
                         @foreach($articles as $article)
                        <div class="col-lg-4 col-md-6 item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="{{ route('article.single', ['slug' => $article->slug]) }}" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{ $article->getImage() }}" alt="{{ $article->title }}">
                                    </a>
                                </div>
                                <div class="card-body blog-details">
                                    <a href="{{ route('article.single', ['slug' => $article->slug]) }}" class="blog-desc">{{ $article->title }} </a>
                                    <p>{!! $article->description !!}</p>
                                    <p>Категория: <a href="{{ route('category.single', ['slug' => $article->category->slug]) }}">{{ $article->category->title }}</a></p>
                                </div>
                                <div class="card-footer">
                                    <div class="author align-items-center">
                                        <img src="{{ asset('public/assets/front/images/god-rod.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <span class="meta-value"></span> {{$article->authors->name}}
                                            </li>
                                        </ul>
                                        <div class="date">
                                            <p><i class="fa fa-eye" aria-hidden="true"></i> {{ $article->hits }} &nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> {{ $article->getPostDate() }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>

            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation">
                        {{ $articles->links() }}
                    </nav>
                </div>
            </div>
    </div>
</section>


@endsection
