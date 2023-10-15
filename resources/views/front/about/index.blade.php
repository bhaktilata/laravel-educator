@extends('front.layouts.layout')
@section('title', 'Институт сознания INICONS :: О проекте')
@section('description')Институт сознания INICONS - научно-исследовательская организация. Основное направление исследований - изучение
сознания и его трансформация, свобода воли, естественный интеллект, управление реальностью.@endsection
@section('page-header')
@endsection
@section('content')
<!-- breadcrumb -->
 <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
             О проекте INICONS </h2>
            <p class="inner-page-para mt-2">
              научно-исследовательская организация, основным направлением исследований которой является: изучение сознания
              и его трансформация, свобода воли, естественный и искусственный интеллект, управление реальностью.</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Главная</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> О проекте INICONS</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
  <!--/w3l-aboutblock1-->
  <section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
          <div class="col-lg-8 left-wthree-img pr-lg-5">
            <h5 class="title-subw3hny mb-1">Институт сознания</h5>
            <h3 class="title-w3l">Проект института сознания INICONS призван</h3>
          </div>
          <div class="col-lg-4 mt-lg-0 mt-5 about-right-faq align-self">

            <p class="">объединить философов, ученых, представителей различных областей знания и заинтересованных
            людей одной парадигмой - возрождением ведического знания и культуры, что позволяет достичь процветания общества.</p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//w3l-aboutblock1-->
  <!-- features-section -->
  <section class="w3l-features py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">      <div class="row main-cont-wthree-2 align-items-center">
        <div class="col-lg-6 feature-grid-left pr-lg-5">
          <h5 class="title-subw3hny mb-3">Задача института</h5>
          <h3 class="title-w3l mb-4">разработать и предложить духовные технологии <span class="inn-text">преобразования общества и личности</span>
          </h3>
          <p class="text-para">Содержательную сторону нашей программы можно выразить, примерно, следующим образом: «Проблема исследования
          философии сознания, как бы странно это не казалось, тесно сопряжена с эволюцией идеалов идеализма»..
          </p>
          <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">узнать больше</a>
        </div>
        <div class="col-lg-6 feature-grid-right mt-lg-0 mt-5 pl-lg-5">
          <div class="call-grids-w3 d-grid">
            <div class="grids-1 box-wrap">
              <div class="icon">
                <i class="fas fa-microscope"></i>
              </div>
              <h4><a href="about.html" class="title-head">Философия сознания и практики его преобразования</a></h4>
            </div>
            <div class="grids-1 box-wrap">
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <h4><a href="about.html" class="title-head">Управление реальностью на причинном уровне</a></h4>
            </div>
            <div class="grids-1 box-wrap">
              <div class="icon">
                <i class="fas fa-school"></i>
              </div>
              <h4><a href="about.html" class="title-head">Ментальные технологии высокого уровня</a></h4>
            </div>
            <div class="grids-1 box-wrap">
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <h4><a href="about.html" class="title-head">Роль сознания в освоении новых видов энергии и управлении реальностью </a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- features section -->
<!--Team-sec-->
<!--section class="w3l-team-main team py-5" id="team">
    <div class="container py-lg-5">
        <h5 class="title-subw3hny mb-1 text-center">Our Team</h5>
        <h3 class="title-w3l text-center">Meet Our <span class="inn-text">Teachers</span></h3>
        <div class="row team-row">
            <div class="col-lg-3 col-6 team-wrap mt-5">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{ asset('public/assets/front/images/team1.jpg' )}}" alt="" class="radius-image">
                        <div class="overlay-team">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#url">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-linkedin-in"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#url" class="team-title">Lawrence Petrie</a>
                    <p>Director</p>
                </div>
            </div>
            <!-- end team member -->
            <!--div class="col-lg-3 col-6 team-wrap mt-5">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{ asset('public/assets/front/images/team2.jpg' )}}" alt="" class="radius-image">
                        <div class="overlay-team">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#url">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-linkedin-in"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#url" class="team-title">Jack Peters</a>
                    <p>Managing Director</p>
                </div>
            </div-->
            <!-- end team member -->
            <!--div class="col-lg-3 col-6 team-wrap mt-5">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{ asset('public/assets/front/images/team3.jpg' )}}" alt="" class="radius-image">
                        <div class="overlay-team">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#url">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-linkedin-in"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#url" class="team-title">Anna Phillips</a>
                    <p>Teacher</p>
                </div>
            </div>
            <!-- end team member -->
            <!--div class="col-lg-3 col-6 team-wrap mt-5">
                <div class="team-member last text-center">
                    <div class="team-img">
                        <img src="{{ asset('public/assets/front/images/team4.jpg' )}}" alt="" class="radius-image">
                        <div class="overlay-team">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#url">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-linkedin-in"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#url" class="team-title">Roland Walker</a>
                    <p>Teacher</p>
                </div>
            </div>
        </div>
</section-->
<!--//Team-sec-->
<!--/progress-->
<section class="w3l-servicesblock w3l-servicesblock1 py-5" id="progress">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-6 align-self pr-lg-4">
                <div class="progress-info info1">
                    <h6 class="progress-tittle">Figma illustrations <span class="">80%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info2">
                    <h6 class="progress-tittle">PHP programming <span class="">95%</span>
                    </h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info3">
                    <h6 class="progress-tittle">Web design & development <span class="">90%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="95"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info4">
                    <h6 class="progress-tittle">Adobe Photoshop <span class="">75%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="95"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                <h5 class="title-subw3hny mb-1">Progress Bars</h5>
                <h3 class="title-w3l">What you have in our Popular <span class="inn-text">Online Courses</span></h3>
                <p class="mt-md-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at. Lorem ipsum dolor sit amet
                    elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
                    dolor sit, amet elit. Dolor ipsum non velit, culpa! elit ut et.</p>

            </div>
        </div>
    </div>
</section>
<!--//progress-->

  <!--/w3l-project-->
  <section class="w3l-join-main py-5">
    <div class="container py-md-5 py-2">
      <div class="w3l-project-in">
        <div class="row">
          <div class="col-lg-7">
            <div class="bottom-info">
              <div class="header-section pr-lg-5">
                <h5 class="title-subw3hny mb-3">Присоединяйтесь</h5>
                <h3 class="title-w3l mb-3">Вы уже присоединились к нам?</span>
                </h3>
                <p>Сегодня проблемы, связанные со свободой воли, сознательным опытом, осознанностью, преобразованием сознания активно обсуждается как философами, так и другими учеными..</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 align-self mt-lg-0 mt-sm-5 mt-4">
            <div class="d-sm-flex justify-content-end">
              <a href="#" class="btn btn-primary btn-style mr-sm-2"> стать участником</a>
              <a href="#" class="btn btn-secondary btn-style"> связаться с нами </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//w3l-project-->
  @endsection
