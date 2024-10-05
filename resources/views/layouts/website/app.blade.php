<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS Files -->
    <link href="{{ asset('website/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('website/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('website/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/main.css') }}" rel="stylesheet">
</head>
<body>

    @include('components.website.header')

    <main>
        @yield('content')
    </main>

    @include('components.website.footer')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
    <!-- JS Files -->
    <script src="{{ asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('website/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('website/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('website/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{asset('website/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('website/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>
</body>
</html>
