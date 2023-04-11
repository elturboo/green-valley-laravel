<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Green Valley</title>

		<meta name="keywords" content="Green valley" />
		<meta name="description" content="Green Valley">
		<meta name="author" content="www.boo-code.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href=" {{asset('assets/img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">


		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/theme-elements.css')}}">



		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('assets/css/skins/skin-corporate-10.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('assets/vendor/modernizr/modernizr.min.js')}}"></script>

        @if (App::isLocale('ar'))
		<link rel="stylesheet" href="{{asset('assets/master/rtl/css/rtl-theme.css')}}">
        @endif

	</head>
	<body data-plugin-page-transition>
		<div class="body">
            @include('partial.header')

            @yield('content')

            @include('partial.footer')


		</div>

		<!-- Vendor -->
		<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->


		<!-- Theme Custom -->
		<script src="{{asset('assets/js/theme.js')}}"></script>
		<script src="{{asset('assets/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('assets/js/theme.init.js')}}"></script>

	</body>
</html>
