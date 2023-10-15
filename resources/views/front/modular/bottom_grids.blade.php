<section class="w3l-bottom-grids-6 " id="grids">
        <div class="container">
 <div class="mt-3">                           <!--Message-->      
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
 <!--//Message-->  
</div> 
            <div class="grids-area-hny row text-left pt-lg-5 mt-lg-5">
                <div class="col-lg-4 col-md-6 grids-feature pr-lg-5">
                    <div class="area-box">
                        <span class="fas fa-users"></span>
                        <h4><a href="/index.html#feature" class="title-head">Институт сознания INICONS</a></h4>
                         <p>Институт сознания INICONS - научно-исследовательская организация, основным направлением исследований которой является:
                         изучение сознания и его трансформация, свобода воли, естественный и искусственный интеллект, управление реальностью.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-5">
                    <div class="area-box">
                        <span class="fas fa-laptop-code"></span>
                        <h4><a href="/index.html#feature" class="title-head">Идеализм или юджизм</a>
                        </h4>
                        <p>Содержательную сторну нашей программы можно выразить, примерно, следующим образом: «Проблема исследования философии сознания, 
                            как бы странно это не казалось, тесно сопряжена с эволюцией идеалов идеализма».</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-5 pl-lg-5">
                    <div class="area-box">
                        <span class="fas fa-book-open"></span>
                        <h4><a href="/index.html#feature" class="title-head">Области исследования</a></h4>
                        <p>Институт ставит задачей провести актуальную и революционную работу по изучению сознания. Исследования 
                            направлены на то, чтобы содействовать настоятельным требованиям времени необходимости планетарного перехода на более высокие уровни 
                            реальности!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>