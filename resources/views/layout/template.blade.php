<!DOCTYPE html>
<html>
<head>
	<title>Eventbrude-{{ $title }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="" >
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=" {{asset("css/style.css")}}">
</head>
<body>
	@include('inc/nav')
	<div class="container">
		@yield('container')
	</div>
	<script type="text/javascript" src="{{asset("js/jquery.js")}}"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>