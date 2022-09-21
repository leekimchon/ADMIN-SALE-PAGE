<!DOCTYPE html>
<html lang="en">
<head>
<title>NotThing Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('Frontend/styles/bootstrap4/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Frontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Frontend/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Frontend/styles/responsive.css') }}">
@yield('css')
</head>

<body>

<div class="super_container">

	<!-- Header -->
    @include('includes.frontend.header')

	<!-- Content -->
    @yield('content')

	<!-- Footer -->
    @include('includes.frontend.footer')

</div>

<script src="{{ asset('Frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('Frontend/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('Frontend/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('Frontend/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('Frontend/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('Frontend/js/custom.js') }}"></script>
@yield('js')
</body>

</html>
