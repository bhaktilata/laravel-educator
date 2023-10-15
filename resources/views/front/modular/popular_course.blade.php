<section class="w3l-courses" id="courses">
        <div class="blog py-5">
            <div class="container py-md-5 py-2">
                <h5 class="title-subw3hny text-center">Вечерние занятия</h5>
                <h3 class="title-w3l text-center">Еженедельные трансляции и медитации</h3>
            <!--Weekly evening broadcasts-->
            <div class="row">
                @foreach($classes as $item)
                    <div class="col-lg-3 col-md-6 item mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="{{ route('evening.single', ['slug' => $item->slug]) }}" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="{{ $item->getImage() }}" alt="{{ $item->title }}">
                                </a>
                                <div class="post-pos">
                                     <a href="index.html#popular" class="receipe blue">Начинающий</a>
                                    <a href="/web/index.html#popular" class="receipe yellow ml-2">Новый</a>
                                </div>
                            </div>
                            <div class="card-body course-details">
                                <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                    <p>Хиты: {{ $item->hits }}</p>
                                    <p>Автор: {{ $item->author }}</p>
                                </div>
                                <a href="{{ route('evening.single', ['slug' => $item->slug]) }}" class="course-desc">{{ $item->title }}
                                </a>
                                <div class="course-meta mt-4">
                                    <div class="meta-item course-lesson">
                                        <span class="fas fa-users"></span>
                                        <span class="meta-value">{{ $item->description }}</span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                @endforeach 
                   <!--//Weekly evening broadcasts-->
                 
                    <div class="mt-5 mx-auto text-more text-center pt-lg-4">
                        <a href="/web/courses.html" class="btn btn-style btn-primary">Смотрите все курсы</a>
                    </div>
            </div>
        </div>
    </div>
 </section>