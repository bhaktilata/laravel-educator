@extends('front.layouts.layout')
@section('title', '' . $article->title . ' :: INICONS')
@section('description', '' . $article->description)
@section('keywords', '' . $article->keywords)
@section('content')
@section('page-header')
<section class="w3l-blog-breadcrum mt-3">
  <div class="breadcrum-bg">
    <div class="container pt-5">
        <p><a href="{{ route('home.show') }}">Главная</a> &nbsp;/&nbsp; 
        <a href="{{ route('category.single', ['slug' => $article->category->slug]) }}">{{ $article->category->title }}</a> /&nbsp; {{ $article->title }} 
        </p>
    </div>
  </div>
</section>
@endsection

<!-- Content Section -->
<div class="py-md-5 pb-3 blog-post text-center">
    <div class="container pt-lg-4 pt-md-3">
        <span class="text">Single post </span>
        <h3 class="title-big text-center mb-md-4 mb-3">Why it is important to know who your competition is and their prices</h3>
        <div class="blog-post-align">
            <div class="blog-post-img">
                <a href="/author.html"><img src="{{ asset('assets/front/images/team1.jpg') }}" alt="" class="img-fluid"></a>
            </div>
            <div class="blog-post-info">
                <div class="author align-items-center mb-1">
                    <a href="/web/author.html">Mike Tyson</a> in <a href="#url">Design</a>
                </div>
                <ul class="blog-meta">
                    <li class="meta-item blog-lesson">
                        <span class="meta-value"> July 20, 2020 </span>
                    </li>
                    <li class="meta-item blog-students">
                        <span class="meta-value"> 6min read</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
<!---728x90--->

</div>

<section class="blog-post-main">
    <!--/blog-post-->
    <div class="blog-content-inf pb-5">
        <div class="container pb-lg-4">
            <div class="single-post-image">
                <div class="post-content">
                    <img src="{{ asset('assets/front/images/blogsingle.jpg') }}" class="radius-image-full img-fluid mb-md-5 mb-4" alt="">
                </div>
            </div>
            <div class="single-post-content">
                <p class="alphabet mb-4">Начало ipsum dolor sit amet,Ea consequuntur
                    illum facere aperiam sequi optio
                    dolor set consectetur.Ea ipsum sed consequuntur illum facere aperiam sequi optio consectetur
                    adipisicing elitFuga, suscipit totam animi consequatur saepe. Lorem ipsum dolor sit amet,
                    illum facere sequi optio elit..</p>
                <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, corrupti odit? At
                    iure facere, porro repellat officia quas, dolores magnam assumenda soluta odit harum voluptate
                    inventore ipsa maiores fugiat accusamus eos nulla. Iure explicabo officia. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit, dolorem.</p>
                <blockquote class="blockquote my-5">
                    <div class="icon-quote"><span class="fa fa-quote-left" aria-hidden="true"></span></div>
                    With any business, it is important to know who your competition is and their prices. Once you have
                    some names, go online and search for your competition’s websites using a search engine.
                    <footer class="blockquote-footer mt-3">
                        Smith lara</footer>
                </blockquote>
                <h3 class="blog-desc m-0 mb-4">What makes a good blog post?</h3>
                <p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id
                    erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
                    culpa quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde expedita esse error enim
                    repellat, architecto corporis rerum ipsa alias cum! </p>
                <p class="mb-4">Dolor sit sed amet, excepteur sint occaecat non proident, sunt in culpa quis. Phasellus
                    lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
                    culpa quis. </p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, veritatis. Excepteur
                    sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id
                    erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
                    culpa quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <div class="sing-post-thumb mb-5 row pt-3">
                    <div class="col-sm-6">
                        <a href="#url"><img src="{{ asset('assets/front/images/blog.jpg') }}" class="img-fluid radius-image" alt=""></a>
                    </div>
                    <div class="col-sm-6 mt-sm-0 mt-3">
                        <a href="#url"><img src="{{ asset('assets/front/images/blog1.jpg') }}" class="img-fluid radius-image" alt=""></a>
                    </div>
                </div>
                <h3 class="blog-desc m-0 mb-lg-4 mb-3">How to wite a Blog Post</h3>
                <p class="mb-4">Dolor sit sed amet, excepteur sint occaecat non proident, sunt in culpa quis. Phasellus
                    lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
                    culpa quis. Lorem ipsum dolor, sit amet elit. </p>
                <div class="text-list mb-4">
                    <ol>
                        <li>Understand your audience. </li>
                        <li>Create your blog domain. </li>
                        <li>Sign Up With a Content Management System </li>
                        <li>Register a Domain or Subdomain With a Website Host </li>
                        <li>Customize your blog's theme. </li>
                        <li>Identify your first blog post's topic.</li>
                    </ol>
                </div>
                <p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id
                    erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
                    culpa quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde expedita esse error enim
                    repellat, architecto corporis rerum ipsa alias cum! </p>
                <p class="mb-4">Dolor sit sed amet, excepteur sint occaecat non proident, sunt in culpa quis. Phasellus
                    lacinia id
                    erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
                    culpa quis. </p>

                <h3 class="blog-desc m-0 mt-5 mb-4">Search for Inspiration</h3>
                <p class="mb-4">Vivamus a ligula quam. Ut blandit eu leo non suscipit. <a href="#" class="use-admin">Domains</a> In interdum ullamcorper dolor eu mattis.Nulla quis lorem
                    neque,Nulla
                    quis lorem neque, mattis venenatis lectus.<a href="#" class="use-admin"> Sub Domains</a>
                    In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis
                    lectus.</p>
                <p class="mb-4">Dolor sit sed amet, excepteur sint occaecat non proident, sunt in culpa quis. Phasellus
                    lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
                    culpa quis. </p>

                <div class="d-grid left-right mt-5 pb-md-5">
                    <div class="buttons-singles tags">
                        <h4>Tags :</h4>
                        <a href="#blog-tag">Culture</a>
                        <a href="#blog-tag">Sports</a>
                        <a href="#blog-tag">Technology</a>
                    </div>
                    <div class="buttons-singles">
                        <h4>Share :</h4>
                        <a href="#blog-share"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        <a href="#blog-share"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        <a href="#blog-share"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        <a href="#blog-share"><span class="fa fa-pinterest-p" aria-hidden=" true"></span></a>
                    </div>
                </div>

                <!--//author-card-->
                <div class="author-card mt-5">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="author-img">
                                <img src="{{ asset('assets/front/images/team2.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 mt-sm-0 mt-3">
                            <h3 class="mb-3 title">Mike Tyson</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, sed et excepturi.
                                Distinctio fugit odit? Fugit ipsam. Lorem ipsum dolor sit.
                            </p>
                            <ul class="author-icons mt-4">
                                <li><a class="behance" href="#url"><span class="fa fa-behance" aria-hidden="true"></span></a> </li>
                                <li><a class="linkedin" href="#url"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                                <li><a class="facebook" href="#url"><span class="fa fa-facebook-official" aria-hidden="true"></span></a>
                                </li>
                                <li><a class="twitter" href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--//author-card-->


                <div class="comments mt-5">
                    <h4 class="side-title ">Comments (2)</h4>
                    <div class="media mt-4">
                        <div class="img-circle">
                            <img src="{{ asset('assets/front/images/team1.jpg') }}" class="img-fluid" alt="...">
                        </div>
                        <div class="media-body">

                            <ul class="time-rply mb-2">
                                <li><a href="#URL" class="name mt-0 mb-2 d-block">William Jack</a>
                                    July 20, 2020 - 10:02 pm

                                </li>
                                <li class="reply-last">
                                    <a href="#reply" class="reply">
                                        Reply</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, hic
                                reprehenderit eum cupiditate deleniti, Lorem ipsum dolor sit amet adipisicing.</p>
                        </div>
                    </div>

                    <div class="media">
                        <div class="img-circle">
                            <img src="{{ asset('assets/front/images/team2.jpg') }}" class="img-fluid" alt="...">
                        </div>
                        <div class="media-body">
                            <ul class="time-rply mb-2">
                                <li><a href="#URL" class="name mt-0 mb-2 d-block">James Harper</a>
                                    July 20, 2020 - 12:30 pm

                                </li>
                                <li class="reply-last">
                                    <a href="#reply" class="reply">
                                        Reply</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing. Ea illum facere aperiam sequi optio
                                consectetur adipisicing elitFuga,
                                suscipit totam animi.</p>
                            <div class="media second mt-4 p-0 pt-2">
                                <a class="img-circle img-circle-sm" href="#url">
                                    <img src="{{ asset('assets/front/images/team3.jpg') }}" class="img-fluid" alt="...">
                                </a>
                                <div class="media-body">
                                    <ul class="time-rply mb-2">
                                        <li><a href="#URL" class="name mt-0 mb-2 d-block">Jackson Wyatt</a>
                                            July 20, 2020 - 14:20 pm

                                        </li>
                                        <li class="reply-last">
                                            <a href="#reply" class="reply"> Reply</a>
                                        </li>
                                    </ul>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        corrupti quos dolores et. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="leave-comment-form mt-5" id="reply">
                    <h4 class="side-title mb-2">Leave a Reply</h4>
                    <p class="mb-4">Your email address will not be published. Required fields are marked *
                    </p>
                    <form action="#" method="post">

                        <div class="form-group">
                            <textarea name="Comment" class="form-control" placeholder="Your Comment*" required="" spellcheck="false"></textarea>
                        </div>
                        <div class="input-grids row">

                            <div class="form-group col-lg-6">
                                <input type="text" name="Name" class="form-control" placeholder="Your Name*" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" name="Email" class="form-control" placeholder="Email*" required="">
                            </div>
                        </div>

                        <div class="submit text-right">
                            <button class="btn btn-style btn-secondary">Post Comment </button></div>
                    </form>
                </div>

                <!-- related posts -->
                <div class="item mt-5 pt-lg-5">
                    <h3 class="section-title-left mb-4 pb-lg-2">Maybe You are Interested in </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-view list-view1">
                                <div class="grids5-info">
                                    <a href="/blog-single.html" class="d-block zoom">
                                        <img src="{{ asset('assets/front/images/sblog1.jpg') }}" alt="" class="img-fluid radius-image news-image"></a>
                                    <div class="blog-info align-self">
                                        <a href="/blog-single.html" class="blog-desc1">Top Marketing Tips from Pro Photographers
                                        </a>
                                        <div class="author align-items-center mt-3 mb-1">
                                            <a href="/author.html">Johnson smith</a> in <a href="#url">Design</a>
                                        </div>
                                        <ul class="blog-meta">
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 20, 2020 </span>
                                            </li>
                                            <li class="meta-item blog-students">
                                                <span class="meta-value"> 6min read</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-md-0 mt-5">
                            <div class="list-view list-view1">
                                <div class="grids5-info">
                                    <a href="single.html" class="d-block zoom">
                                        <img src="{{ asset('assets/front/images/sblog2.jpg') }}" alt="" class="img-fluid radius-image news-image"></a>
                                    <div class="blog-info align-self">
                                        <a href="/blog-single.html" class="blog-desc1">The Best Site
                                            of the day for Weather Conditions</a>
                                        <div class="author align-items-center mt-3 mb-1">
                                            <a href="/author.html">Johnson smith</a> in <a href="#url">Design</a>
                                        </div>
                                        <ul class="blog-meta">
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> July 20, 2020 </span>
                                            </li>
                                            <li class="meta-item blog-students">
                                                <span class="meta-value"> 6min read</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //related posts -->
            </div>
        </div>
        <!--//blog-post-->
    </div>
</section>
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
<!---728x90--->
</div>

@endsection
