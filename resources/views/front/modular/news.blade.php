@foreach( $posts as $post)
          <div class="col-lg-4 col-md-6 mt-md-4 mt-4">
            <div class="grids5-info">
              <a href="{{ route('article.single', ['slug' => $post->slug]) }}" class="d-block zoom"></a>
              <div class="blog-info">
                <ul class="news-top">
                   <li><a href="{{ route('category.single', ['slug' => $post->category->slug]) }}">{{ $post->category->title }}<img src="{{ $post->getImage() }}" alt="" class="img-fluid news-image"></a></li>
                </ul>
                <p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $post->getPostDate() }} 
                &nbsp;<i class="fa fa-user-o" aria-hidden="true"></i> {{$post->user->name}} 
              <i class="fa fa-eye" aria-hidden="true"></i> {{ $post->hits }}</p>
                <h4><a href="{{ route('article.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h4>
                <p class="blog-text">{!! $post->annotation !!}</p>
                <a href="{{ route('article.single', ['slug' => $post->slug]) }}" class="btn btn-news">Подробнее<span class="fa fa-angle-right pl-1"></span> </a>
              </div>
            </div>
          </div>
          @endforeach