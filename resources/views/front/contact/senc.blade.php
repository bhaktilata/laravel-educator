<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('public/img/favicon.png')}}">
    <meta name="robots" content="noindex">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/front/css/style-liberty.css') }}">
</head>
<body>
<div class="container">
          		 @if(session('message'))
                <div class="container py-md-3"> 
                    <div class='alert alert-success'>
                        {{ session('message') }} 
                    </div>
                </div>
                @endif
                   <div class="container">
                      	@if(session('success'))
                       	    <div class="alert alert-success">
                                {{ session('success') }}
                            </div>    
                        @endif
                        <h3 class="head">Оставайтесь на связи с нами!!!</h3>
                       
                        {!! $body !!}
                        <!--img src="{# $message->embed(url('img/blog1.jpg')) #}" alt=""-->
                   </div>
            </div>
 

   
</body>
</html>


          
     
