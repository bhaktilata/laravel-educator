<header id="site-header" class="fixed-top nav-fixed">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>
                    <a class="navbar-brand" href="{{ route('home.show')}}">
                        <i class="fas fa-chalkboard-teacher"></i> Школа Рода</a>
                </h1>
                <!-- if logo is image enable this
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>

                </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-lg-auto">

                        <li class="nav-item {{ Request::is('/*') ? 'active' : '' }}">
                          <a class="nav-link" href="{!! route('home.show') !!}">Главная <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item {{ Request::is('about*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about.index')}}">О нас</a>
                        </li>
                        <li class="nav-item {{ Request::is('article*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('article.show')}}">Блог</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Категории <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($top_menu as $item)
                                    <a class="dropdown-item" href="{{ route('category.single', ['slug' => $item->slug]) }}">
                                    {{ $item->title_menu }}</a>
                                @endforeach
                            </div>
                        </li>
                <li class="nav-item {{ Request::is('page') ? 'active' : '' }}">
                    <a class="nav-link" href="/pages">Страницы</a>
                </li>
                <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }}">
                    <a class="nav-link" href="{!! route('contact.send') !!}">Контакты</a>
                </li>

            @if(Auth::check())
                <li class="nav-item {{ Request::is('profile*') ? 'active' : '' }}">
                   <a class="nav-link" href="{{ route('profile.index') }}"> Профиль</a>
                </li>
                <li class="nav-item @@logout__active">
                    <a class="nav-link" href="{{ route('logout') }}"> Выйти</a>
                </li>
                @else
                <li class="nav-item @@portfolio__active">

                      <li class="nav-item @@portfolio__active">
                      <a class="nav-link" href="{{ route('login.create')}}">Войти</a></li>
                @endif
                        <!--/search-right-->
                         <!--/search-right-->
                         <li class="header-search mr-lg-2 mt-lg-0 mt-4 position-relative">
                            <div class="search-right">
                                <a href="#search" class="btn btn-style search-btn" title="search"><span
                                        class="fas fa-search mr-2" aria-hidden="true"></span> Поиск</a>
                                <!-- search popup -->
                                <div id="search" class="pop-overlay">
                                    <div class="popup">

                                    <form action="{{ route('search') }}" method="GET" class="search-box">
                                            <input class="form-control mr-sm-2 @error('s') is-invalid @enderror" type="search" placeholder="Введите слово" name="s" required="required" autofocus="">
                                            <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                        </form>

                                    </div>
                                    <a class="close" href="#close">×</a>
                                </div>
                                <!-- /search popup -->
                            </div>
                        </li>
                        <!--//search-right-->

                <style>
                    .fixed-top .search-box .form-control.is-invalid{
                        margin-top: 5px;
                        border: 2px solid red;
                    }
                </style>
            </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>

        </div>
    </header>
