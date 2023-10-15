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
            Курсы </h2>
            <p class="inner-page-para mt-2">
            Дорогие читатели, <span>искатели </span> и стремящиеся!.</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Главная</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Курсы</li>
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
       
        </div>
         <!--/pagination-->
        <div class="pagination-wrapper mt-5 pt-lg-3">
          <ul class="page-pagination">
            <li><span aria-current="page" class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#url">2</a></li>
            <li><a class="page-numbers" href="#url">3</a></li>
            <li><a class="page-numbers" href="#url">...</a></li>
            <li><a class="page-numbers" href="#url">15</a></li>
            <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
          </ul>
        </div>
         <!--//pagination-->
      </div>
    </div>
  </section>
  <!--//w3l-blog-->

@endsection