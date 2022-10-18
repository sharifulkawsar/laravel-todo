<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>Wallet - Payday Loan Service Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  
  <!-- theme meta -->
  <meta name="theme-name" content="wallet" />

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
  <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/brands.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/solid.css')}}">


	<!-- # Main Style Sheet -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  @yield('css')
</head>

<body>

@include('layouts.header')
@yield('content')
@include('layouts.footer')

<!-- # JS Plugins -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/plugins/scrollmenu/scrollmenu.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('assets/js/script.js')}}"></script>
@yield('script')
</body>
</html>
