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
    <div class="container mt-3">
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
                    </div>
    </div>
   <!-- contacts-5-grid -->
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
        <div class="container">
            <div class="heading text-center mx-auto">
              <h5 class="title-subw3hny text-center">Контакты с нами</h5>
            </div>

            <div class="contacts-5-grid-main mt-5">
                <div class="contacts-5-grid">
                    <div class="map-content-5">
                        <div class="d-grid grid-col-2">
                            <div class="contact-type">
                                <div class="address-grid">
                                    <h6><span class="fas fa-map-marked-alt"></span> Фдрес</h6>
                                    <p>#302, 5th Floor, VHLY-2247 ek, Settlers Lane, New York.</p>
                                </div>
                                <div class="address-grid">
                                    <h6><span class="fas fa-envelope-open-text"></span> E-mail</h6>
                                    <a href="/cdn-cgi/l/email-protection#711c10181d1e1f14311409101c011d145f121e1c" class="link1"><span class="__cf_email__" data-cfemail="87eae6eeebe8e9e2c7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</span></a>
                                    <a href="/cdn-cgi/l/email-protection#bad7dbd3d6cecdd5fadfc2dbd7cad6df94d9d5d7" class="link1"><span class="__cf_email__" data-cfemail="1e737f77726a69715e7b667f736e727b307d7173">[email&#160;protected]</span></a>
                                </div>
                                <div class="address-grid">
                                    <h6><span class="fas fa-phone-alt"></span> Телефон</h6>
                                    <a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a>
                                    <a href="tel:+44 224-058-545" class="link1">+44 224-058-545</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-inner-cont mt-5">
                <form action="{{ route('contact.send') }}" method="post" class="signin-form">
                @csrf
                    <div class="form-grids">
                        <div class="form-input">
                            <input type="text" name="name" id="name" placeholder="Введите ваше имя *" class="contact-input @error('subject') is-invalid @enderror" required="required" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="subject" id="subject" placeholder="Введите тему сообщения " class="contact-input @error('subject') is-invalid @enderror" required="required" />
                        </div>
                        <div class="form-input">
                            <input type="email" name="email" id="email" placeholder="Введите ваше E-mail *" class="contact-input @error('subject') is-invalid @enderror" required="required"
                                required />
                        </div>
                        <div class="form-input">
                            <input type="text" name="phone" id="phone" placeholder="Введите ваш телефон *" class="contact-input @error('subject') is-invalid @enderror" required="required"
                                required />
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea name="message" id="message" rows="9" class="contact-input @error('message') is-invalid @enderror" placeholder="Напишите ваш вопрос здесь" required="required"></textarea>
                    </div>
                    {!! RecaptchaV3::initJs() !!}
                          @error('g-recaptcha-response')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                         @enderror
                          {!! RecaptchaV3::field('g-recaptcha-response') !!}
                         <input type="hidden" value="g-recaptcha-response"></input>

                         <div class="form-group">
                            {!! RecaptchaV3::initJs() !!}
                            {!! RecaptchaV3::field('contact-us') !!}
                                @error('g-recaptcha-response')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                         </div>
                    <div class="text-right">
                        <button class="btn btn-style btn-primary">Отправить сообщение</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
@endsection
