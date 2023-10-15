<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('front.particls.head')
<body>
@include('front.particls.header')

@yield('content')
@include('front.particls.footer')
@include('front.particls.scripts')
</body>
</html>
