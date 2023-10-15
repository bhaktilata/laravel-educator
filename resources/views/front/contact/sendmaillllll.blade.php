@extends('front.layouts.layout')
@section('title', 'Институт сознания INICONS :: Обратная связь' )

@section('content')
  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Контакты </h2>
            <p class="inner-page-para mt-2">
            У вас есть какие-либо <span class="inn-text"> вопросы? </span></p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('home.show') }}">Главная</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Обратная связь</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
 
<section id="contact" class="w3l-contact3">
  <div class="contact-form section-gap py-5">
    <div class="contacts12-main">
                    <!---Intro-->      
          <div class="heading text-center mx-auto">
          	<div class="container">
          		 @if(session('message'))
                <div class="container py-md-3"> 
                    <div class='alert alert-success'>
                        {{ session('message') }} 
                    </div>
                </div>
                @endif
                   <div class="container">
                      	@if(session('success'))
                       	    <div class="alert alert-success">
                                {{ session('success') }}
                            </div>    
                        @endif
                        <h3 class="head">Оставайтесь на связи с нами!!!</h3>
                       
                        {!! $body !!}
                       
                   </div>
            </div>
          </div> 
    </div>
  </div>
</section>
@endsection