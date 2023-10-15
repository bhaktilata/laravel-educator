<section class="w3l-project" id="subscribe">
        <div class="container-fluid mx-lg-0">
            <div class="row">
                <div class="col-lg-6 bottom-info">
                    <div class="project-header-section text-left">
                    @if(session('status')) 
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                        @endif
                  
                    <div class="container">
                      	@if(session('success'))
                       	    <div class="alert alert-success">
                                {{ session('success') }}
                            </div>    
                        @endif
                    </div>
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif  
                        <h5 class="title-subw3hny text-left mb-1">Хоровод знатков</h5>
                        <h3 class="title-w3l">Присоединяйтесь к нам, чтобы получать мгновенные <span class="inn-text">обновления</span> по электронной почте!</span></h3>
                        <p class="mt-3 pr-lg-5">Подпишитесь и первым получайте уведомления о последних обновлениях и предложениях!</p>

                        <form action="{{ route('subscribe') }}" class="subscribe mt-5" method="post">
                        @csrf
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror mt-2" placeholder="Ваш E-mail адрес" required="required">
                            <!--input type="text" name="name" class="form-control @error('name') is-invalid @enderror mt-2" placeholder="Ваше имя" required="required"-->
                            <button class="btn btn-style btn-primary">Подписаться</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 subcribe-img">

                </div>
            </div>
        </div>
    </section>