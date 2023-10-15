@extends('front.layouts.layout')
@section('title', 'Институт сознания INICONS :: Новостной блог')
@section('description', 'Международный институт сознания INICONS, духовные технологии преобразования общества')
@section('keywords', 'институт сознания INICONS, духовные технологии, преобразование общества')

@section('content')
    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">
                            Мои страницы </h2>
                        <p class="inner-page-para mt-2">
                            Дорогие читатели, <span>искатели </span> и стремящиеся!.</p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Главная</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Страницы</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//breadcrumb-->
    <!--/w3l-blog-->
    <section class="w3l-blog">
        <div class="blog py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    @foreach($pages as $page)
                        <div class="col-lg-4 col-md-6 item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="{{ route('page.single', ['slug' => $page->slug]) }}" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="{{ $page->getImage()}}" alt="{{$page->title}}">
                                    </a>
                                </div>
                                <div class="card-body blog-details">

                                    <a href="{{ route('page.single', ['slug' => $page->slug]) }}" class="blog-desc">{{ $page->title }} </a>
                                    <p>{!! $page->description !!}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="author align-items-center">
                                        <a href="#author" class="post-author">
                                            <img src="{{ asset('public/assets/front/images/god-rod.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </a>
                                        <ul class="blog-meta">
                                            <li>
                                                <span class="meta-value"></span><a href="#author"> {{ $page->authors->name }}</a>
                                            </li>
                                        </ul>
                                        <div class="date">
                                            <p><i class="fa fa-eye"></i> {{ $page->hits }}  &nbsp; <i class="far fa-calendar-alt me-1"></i> {{ $page->getPostDate() }}</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
