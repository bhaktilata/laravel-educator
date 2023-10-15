@extends('front.layouts.layout')
@section('title')Школа духовного развития Рода :: Северная традиция@endsection
@section('description')Школа Рода помогает обусловленным дживам осознать себя вечной душой, преодолеть сознание двойственности и через общение с родными богами достичь мира Прави.@endsection
@section('keywords')институт сознания INICONS, Школа Рода, арийский путь, древнеславянский язык, ведическая культура, веды, руны рода, магия северной традции.@endsection
@section('content')
@include('front.modular.banner_top')
@include('front.modular.bottom_grids')
@include('front.modular.about')
<!--include('front.modular.last_news')-->
@include('front.modular.home_stats')
<!--include('front.modular.popular_course')-->

@include('front.modular.blog')
@include('front.modular.subscribe')
    <!--//subscribe-->
@endsection



