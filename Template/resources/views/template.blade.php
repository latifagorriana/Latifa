<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	@section("title-website")
		Framework Lanjutan
	@show
	</title>
	@section("head")
	<script type="text/javascript" src="{{ asset('latifa-template/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('latifa-template/bootstrap/js/bootstrap.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('latifa-template/bootstrap/css/bootstrap.min.css') }}">
	@show
	<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      border-radius: 0;
    }
    </style>
</head>
<body>

	<div class="container">
		@section("header")
			<h1>Pemesanan Makanan & Minuman</h1>
		@show
	</div>

	@section("navigation")
		@include("LatifaTemplate::nav")
	@show

	<div class="container">
		@section("layout")
		
		@show
	</div>

	<div class="container">
		<div class="text-center">
			@section("footer")
				Copyright &copy; {{ date("Y") }} by Latifa Gorriana. All Right Reserved.
			@show	
		</div>
	</div>
</body>
</html>

