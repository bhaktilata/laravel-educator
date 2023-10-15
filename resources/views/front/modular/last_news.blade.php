<section class="w3l-blog">
        <div class="blog py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <h5 class="title-subw3hny text-center mb-1">Новые статьи</h5>
                <h3 class="title-w3l text-center mb-sm-5 mb-4">Будьте в курсе наших событий</h3>
                <div class="row">
                @foreach($articles as $post)
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="{{ route('article.single', ['slug' => $post->slug]) }}" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{ $post->getImage() }}" alt="{{ $post->title }}">
                                </a>
                            </div>
                            <div class="card-body blog-details">
             
                                <a href="{{ route('article.single', ['slug' => $post->slug]) }}" class="blog-desc">{{ $post->title }} </a>
                                <p>{!! $post->description !!}</p>
                                <p>Категория: <a href="{{ route('category.single', ['slug' => $post->category->slug]) }}">{{ $post->category->title }}</a></p>
                            </div>
                            <div class="card-footer">
                                <div class="author align-items-center">
                                    <img src="{{ asset('public/assets/front/images/god-rod.jpg')}}" alt="" class="img-fluid rounded-circle">
                                   
                                    <ul class="blog-meta">
                                        <li>
                                            <span class="meta-value"></span> {{$post->author }}
                                        </li>
                                    </ul>
                                    <div class="date">
                                        <p><i class="fa fa-eye" aria-hidden="true"></i> {{ $post->hits }} &nbsp; 
                                        <i class="fa fa-calendar" aria-hidden="true"></i> {{ $post->getPostDate() }}</p>
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