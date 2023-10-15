@extends('front.layouts.layout')
@section('title')Институт сознания - INICONS ::  Обратная связь @endsection
@section('page-header')
<section class="w3l-blog-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
        <h3 class="header-top my-3">Контакты с нами</h3>
        <p><a href="{{ route('home.show') }}">Главная</a> &nbsp; /  &nbsp; 
        <a href="{{-- route('category.single', ['slug' => $categories->slug]) --}}"> &nbsp; контакты с нами</a>
        </p>
    </div>
  </div>
</section>
@endsection
@section('content')

<section class="w3l-contact-2 py-5" id="contact">
    <div class="contact-infubd section-gap py-lg-5 py-md-4">
        <div class="container">
            <div class="contact-grids d-grid">
                <div class="contact-left">
                    <h4>Оставьте нам сообщение</h4>
                    <h6>Проект института сознания INICONS призван объединить философов, ученых, представителей различных областей знания и людей заинтересованных одной парадигмой - возрождением на планете ведической культуры.</h6>
                    <div class="hours">
                        <h6 class="info mt-3">Email:</h6>
                        <p> <a href="mailto:info@example.com">
                            info@example.com</a></p>
                        <h6 class="info mt-3">Адрес:</h6>
                        <p>Ур-ал, Российская федерация Екатеринбург, Экачакра</p>
                        <h6 class="info mt-3">Телефон:</h6>
                        <p class="margin-top"><a href="tel:+7-343-6789">+7-343-6789</a></p>
                    </div>
                </div>

                        
                <div class="contact-right">
                    <form  class="row contact_form" action="{{ route('contact') }}" method="post" id="contactForm" role="form">
                         @csrf
                        <div class="input-grids">
                            <label for="name">Ваше имя</label>
                            <input type="text" name="name" id="name" placeholder="Ваше имя" class="contact-input @error('name') is-invalid @enderror" required="required">
                             
                            <label for="email">Ваше E-mail адрес</label>
                            <input type="email" name="email" id="email" placeholder="Ваш Email*" class="contact-input  @error('email') is-invalid @enderror" required="required">

                            <label for="subject">Тема сообщения</label>
                            <input type="text" name="subject" id="subject" placeholder="Тема сообщения" class="contact-input @error('subject') is-invalid @enderror" required="required">
                        </div>
                        <div class="form-input">
                            <label for="message">Текст сообщения</label>
                            <textarea name="message" id="message" rows="9" class="contact-input @error('message') is-invalid @enderror" placeholder="Type your message here*" required="required"></textarea>
                        </div>
                        { RecaptchaV3::initJs() }
                          @error('g-recaptcha-response')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                         @enderror
                          { RecaptchaV3::field('g-recaptcha-response') }
                         <input type="hidden" value="g-recaptcha-response"></input>
                         <button class="btn btn-secondary btn-theme2 submit">Отправить сообщение</button>
                    </form>
                </div>

            </div>
        </div>
</div>
</section>
     <!--//Contact Form-->
 
  
        <script type="text/javascript">
    $('#btn-submit').click(function () {
        $('#mail-token').val('sddjf3858ghdkifdklgds');
        $('#contact-form')[0].submit();
    })
</script>
  </section>

@endsection