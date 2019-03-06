<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/admin-style.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/stylesheet.css">
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
	<script src="{{asset('js')}}/jquery.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> -->
	<script src="{{asset('js')}}/bootstrap.min.js"></script>
</head>
	@yield('body')
</html>