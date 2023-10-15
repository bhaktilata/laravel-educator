@extends('front.layouts.layout')
@section('title', '' . $page->title . ' :: INICONS')
@section('description', '' . $page->description)
@section('keywords', '' . $page->keywords)
@section('content')

    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner top-title">
                            {{ $page->title }} </h2>

                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ route('home.show') }}">Главная страница</a> &nbsp;/&nbsp;
                                &nbsp; {{ $page->title_seo }}
                            </li>
                        </ul>
                        <p class="inner-page-para mt-5">
                            {!! $page->description !!}</p>
                        <p class="inner-page-para mt-5"> Идентификатор статьи: {{ $page->id }}</p>
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
                        <img src="{{ $page->getImage()}}" class="img-fluid w-100 radius-image" alt="{{ $page->title }}">
                    </div>
                    <div class="blo-singl mb-5">
                        <ul class="blog-single-author-date d-sm-flex align-items-center">
                            <li class="circle avatar"><img src="{{ asset('public/assets/front/images/god-rod.jpg')}}" alt="single post image" class="img-fluid">
                            </li>
                            <li>
                                <span class="fas fa-user"></span><a href="#admin"> {{ $page->authors->name  }}</a>
                            </li>

                            <li>
                                <span class="fas fa-clock"></span> {{ $page->getPostDate() }}
                            </li>
                            <li>
                                <a href="#comments"><span class="fas fa-eye"></span> {{ $page->hits }} </a>
                            </li>
                        </ul>
                    </div>

                    <div class="single-post-content">
                        <h3 class="post-content-title mb-3"> {{ $page->title }}</h3>
                        <p class="mb-4"> {!! $page->content !!}</p>

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

                </div>
           </div>
        </div>
        </div>
    </section>
    </div>
    <!--//w3l-blog-->
@endsection
