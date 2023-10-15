@extends('front.layouts.layout')
@section('title', 'Список всех категорий :: Институт сознания INICONS')
@section('content')

    <div class="container py-lg-3">
      <h2>Список категорий</h2>
      <p><a href="{{ route('home') }}">Главная</a> &nbsp; / &nbsp; Список категорий</p>
      
    </div>
 
        
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="/assets/front/img/blog/cat-post/cat-post-3.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html">
                                        <h5>Social Life</h5>
                                    </a>
                                    <div class="border_line"></div>
                                    <p>Enjoy your social life together</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="/assets/front/img/blog/cat-post/cat-post-2.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html">
                                        <h5>Politics</h5>
                                    </a>
                                    <div class="border_line"></div>
                                    <p>Be a part of politics</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="/assets/front/img/blog/cat-post/cat-post-1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html">
                                        <h5>Food</h5>
                                    </a>
                                    <div class="border_line"></div>
                                    <p>Let the food be finished</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    @foreach($categories as $category) <!--выводится список всех категорий-->
                        <article class="row blog_item">
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <a href="{{ route('category.list', ['slug' => $category->slug]) }}"><img src="/uploads/category/{{ $category->image }}" alt=""></a>
                                    
                                        <div class="blog_details">
                                            <a href="{{ route('category.list', ['slug' => $category->slug]) }}"><h2>{{ $category->title }}</h2></a>
                                            <p>{{ $category->content }}</p>
                                            <a href="#" class="blog_btn">Узнать подробнее</a>
                                        </div>
                                 </div>
                             </div>        
                        </article>
                   @endforeach
                                                   
                               <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-left"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a href="#" class="page-link">01</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                                    <li class="page-item"><a href="#" class="page-link">09</a></li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-right"></span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                         </div>
   <!--Sidebar-->                
 @include('front.particls.sidebar')                     
    <!--/Sidebar-->                
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
  
@endsection


