<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" crossorigin="anonymous" href="main.css">
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="{{ asset('public/assets/front/img/favicon.png')}}" >
  <title>@yield('title')</title>
  <meta name="description" content="Международный институт сознания INICONS и Школа восхождения Златой Путь ставят целью возрождение ведической культуры и представляет совершенное знание о нематериальном происхождении жизни, истинных целях жизни, пути достижения гармонии и процветания." />
  <meta name="keywords" content="inicons, международный институт сознания, школа восхождения златой путь, руны славяно-ариев, ведическая философия, веды, арийский путь" />
 
  <link rel="stylesheet" href="{{ asset('public/assets/front/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/front/css/custom.css') }}">

<link rel="stylesheet" href="{{ asset('public/assets/front/vendors/linericon/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/front/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/front/vendors/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/front/vendors/lightbox/simpleLightbox.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/front/vendors/nice-select/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/front/vendors/animate-css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/front/vendors/swiper/css/swiper.min.css') }}">

<link rel="stylesheet" href="{{ asset('public/assets/front/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/front/css/responsive.css') }}">
</head>
</head>
 <style>     

      body {
        font-family: 'Opensans-Light';
      }
      .container{
        width: 1060px;
        margin: 5px auto;
      }
      a {
        text-decoration: none;
        color: #4a90e2;
      }
      .coursera-logo img {
        width: 127px;
        height: 32px;
        vertical-align: middle;
        margin: 16.25px;
      }
      svg {
        width: 80vw;
        height: 350px;
        margin: 0 auto;
        display: block;
        max-width: 700px;
        overflow: visible;
        padding-left: 80px
      }
      .notfound-message {
        width: 80vw;
        max-width: 500px;
        margin: 0 auto;
        padding-bottom: 20px;
      }
      .text-404 h1{
          font-size: 2.5rem;
      }
      @media screen and (max-width: 480px) {
        svg {
          padding-left: 20vw;
          transform: scale(1.3);
        }
        .notfound-message {
          width: 90vw;
        }
       
      }
    </style>
  <header class="header_area">
            <div class="main_menu">
              <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('assets/front/img/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav justify-content-center">
                <li class="nav-item active"><a class="nav-link" href="{{ route('home.show')}}">Главная</a></li> 
                <li class="nav-item"><a class="nav-link" href="about-us.html">О нас</a></li> 
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show')}}">Категории</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('article.show')}}">Блог</a></li>  
                
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Страницы</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a>
                    <li class="nav-item"><a class="nav-link" href="portfolio-details.html">Portfolio Details</a>
                    <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                  </ul>
                </li> 
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                  </ul>
                </li> 
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="nav-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="nav-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li class="nav-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
              </ul>
            </div> 
          </div>
              </nav>
            </div>
        </header>
<body style="margin: 0; background-color: #f5f5f5">
    <div style="height: 60vh; width: 100vw; overflow-x: hidden">
    <div style="height: 65px; "><!-- page header -->
       
    </div>
    <svg viewBox="0 0 560 208" version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink">
        <title>Page Not Found</title>
        <defs>
            <linearGradient x1="0%" y1="0%" x2="99.1908482%" y2="99.1908482%" id="linearGradient-1">
                <stop stop-color="#5D9CEC" offset="0%"></stop>
                <stop stop-color="#967ADC" offset="100%"></stop>
            </linearGradient>
            <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                <stop stop-color="#ED5565" offset="0%"></stop>
                <stop stop-color="#E9573F" offset="100%"></stop>
            </linearGradient>
            <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-3">
                <stop stop-color="#FFD878" offset="0%"></stop>
                <stop stop-color="#FFCE54" offset="100%"></stop>
            </linearGradient>
            <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-4">
                <stop stop-color="#FC6E51" offset="0%"></stop>
                <stop stop-color="#F6BB42" offset="100%"></stop>
            </linearGradient>
            <linearGradient x1="0%" y1="0%" x2="99.1908482%" y2="99.1908482%" id="linearGradient-5">
                <stop stop-color="#2D2F3C" offset="0%"></stop>
                <stop stop-color="#394C65" offset="100%"></stop>
            </linearGradient>
            <linearGradient x1="0%" y1="0%" x2="99.1908482%" y2="99.1908482%" id="linearGradient-6">
                <stop stop-color="#2838A6" offset="0%"></stop>
                <stop stop-color="#394C65" offset="100%"></stop>
            </linearGradient>
            <linearGradient x1="0%" y1="0%" x2="99.1908482%" y2="99.1908482%" id="linearGradient-7">
                <stop stop-color="#A028A6" offset="0%"></stop>
                <stop stop-color="#4F1C43" offset="100%"></stop>
            </linearGradient>
        </defs>
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="404" transform="translate(-440.000000, -160.000000)">
                <g id="Image" transform="translate(440.000000, 160.000000)">
                    <g id="Group-2" transform="translate(0.000000, 140.000000)" fill="url(#linearGradient-1)">
                        <rect id="Rectangle" transform="translate(70.824947, 22.266968) rotate(80.000000) translate(-70.824947, -22.266968) " x="60.824947" y="-47.7330318" width="20" height="140"></rect>
                        <animate xlink:href="#Rectangle" attributeName="y" from="0" to="100" dur="0.5s" calcMode="linear" values="-500; -400; -300; -200; -100; 0; -60; -47.7330318" keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1" fill="freeze" id="circ-anim"></animate>
                    </g>
                    <rect id="Rectangle-2" fill="#0014BC" transform="translate(43.240997, 99.859450) rotate(-340.000000) translate(-43.240997, -99.859450) " x="41.2409967" y="19.8594499" width="4" height="160"></rect>
                    <animate xlink:href="#Rectangle-2" attributeName="y" from="0" to="100" dur="0.4s" calcMode="linear" values="-500; -370; -240; -110; 19.8594499" keyTimes="0; 0.25; 0.5; 0.75; 1" fill="freeze" id="circ-anim"></animate>
                    <circle id="Oval" fill="url(#linearGradient-2)" cx="252" cy="100" r="100"></circle>
                    <animate xlink:href="#Oval" attributeName="cy" from="0" to="100" dur="4.5s" calcMode="spline" values="-1000; 150; -50; 120; 35; 110; 95; 100" keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1" keySplines="0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1" fill="freeze" id="circ-anim"></animate>
                    <polygon id="Rectangle-3" fill="url(#linearGradient-3)" transform="translate(322.000000, 100.000000) rotate(5.000000) translate(-322.000000, -100.000000) " points="367 30 367 170 277 170"></polygon>
                    <animateTransform xlink:href="#Rectangle-3" attributeName="transform" type="translate" from="-200 -500" to="0 0" dur="0.5s"></animateTransform>
                    <rect id="Rectangle-4" fill="#F9AEAE" transform="translate(88.000000, 160.000000) rotate(-5.000000) translate(-88.000000, -160.000000) " x="86" y="115" width="4" height="90"></rect>
                    <animate xlink:href="#Rectangle-4" attributeName="y" from="0" to="100" dur="0.7s" calcMode="linear" values="-700; -564.2; -428.4; -292.6; -156.8; -21; 115" keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 1" fill="freeze" id="circ-anim"></animate>
                    <path d="M352.557593,146.193177 L377.557593,146.193177 L377.557593,156.193177 L357.557593,156.193177 L357.557593,206.193177 L347.557593,206.193177 L347.557593,146.193177 L352.557593,146.193177 Z" id="Combined-Shape" fill="url(#linearGradient-4)" transform="translate(362.557593, 176.193177) rotate(-5.000000) translate(-362.557593, -176.193177) "></path>
                    <animateTransform xlink:href="#Combined-Shape" attributeName="transform" type="translate" from="200 -500" to="0 0" dur="0.3s"></animateTransform>
                    <circle id="Oval-2" fill="url(#linearGradient-5)" cx="97" cy="148" r="15"></circle>
                    <animate xlink:href="#Oval-2" attributeName="cy" from="0" to="100" dur="2s" calcMode="spline" values="-1000; 200; -100; 180; -50; 160; 70; 148" keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1" keySplines="0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1" fill="freeze" id="circ-anim"></animate>
                    <circle id="Oval-2-Copy" fill="url(#linearGradient-6)" opacity="0.799999952" cx="447" cy="136" r="5"></circle>
                    <animate xlink:href="#Oval-2-Copy" attributeName="cy" from="0" to="100" dur="1.5s" calcMode="spline" values="-800; 180; -80; 150; 0; 140; 70; 136" keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1" keySplines="0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1" fill="freeze" id="circ-anim"></animate>
                    <circle id="Oval-2-Copy-2" fill="url(#linearGradient-7)" opacity="0.300000012" cx="491" cy="106" r="3"></circle>
                    <animate xlink:href="#Oval-2-Copy-2" attributeName="cy" from="0" to="100" dur="0.5s" calcMode="spline" values="-800; -650; -500; -350; -200; -50; 100; 106" keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.95; 1" keySplines="0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1;
      0 0 0.59 1;
      0.42 0 1 1" fill="freeze" id="circ-anim"></animate>
                    <rect id="Rectangle-7" stroke="#FFFFFF" stroke-width="4" opacity="0.800000012" transform="translate(323.933891, 96.933891) rotate(25.000000) translate(-323.933891, -96.933891) " x="313.933891" y="86.9338907" width="20" height="20"></rect>
                    <animate xlink:href="#Rectangle-7" attributeName="y" from="0" to="100" dur="0.9s" calcMode="linear" values="-700; -564.2; -428.4; -292.6; -156.8; -21; 86.9338907" keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 1" fill="freeze" id="circ-anim"></animate>
                    <rect id="Rectangle-8" fill="#EB9393" transform="translate(535.000000, 121.000000) rotate(10.000000) translate(-535.000000, -121.000000) " x="510" y="120" width="50" height="2"></rect>
                    <animate xlink:href="#Rectangle-8" attributeName="x" from="0" to="100" dur="1.5s" calcMode="linear" values="-700; -500; -300; -100; 200; 400; 510" keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 1" fill="freeze" id="circ-anim"></animate>
                </g>
            </g>
        </g>
    </svg>
  

<section class="section-404">
    <div class="container">

        <div class="text-404">
            <h1>Opps! Не удалось найти эту страницу!</h1>
            <p>К сожалению, страница, которую вы ищете, не существует, была удалена или имя изменено.</p>
            
        </div>
    </div>
    </section>
</div>
 <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Biznance</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point where images and videos are</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>                    
                            </div>              
                        </div>
                    </div>              
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>   
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>   
                                    </div>                  
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="/assets/front/img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="/assets/front/img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="/assets/front/img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="/assets/front/img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="/assets/front/img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="/assets/front/img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="/assets/front/img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="/assets/front/img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>            
                </div>
                
            </div>
            <div class="border_line"></div>
      <div class="container">
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('assets/front/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/popper.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/front/js/stellar.js') }}"></script>
<script src="{{ asset('assets/front/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('assets/front/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('assets/front/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front/vendors/isotope/isotope-min.js') }}"></script>
<script src="{{ asset('assets/front/vendors/owl-carousel/owl.carousel.min.js') }}"></script>


<script src="{{ asset('assets/front/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/front/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/vendors/counter-up/jquery.counterup.js') }}"></script>



<script src="{{ asset('assets/front/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/front/vendors/popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front/vendors/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/theme.js') }}"></script>
</body></html>

