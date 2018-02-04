<!DOCTYPE html>
<html>
<head>
	<title>Eventbrude-{{ $title }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href=" {{asset("css/style.css")}}">
</head>
<body>
	@include('inc/nav')
	<div class="container">
		@if(session()->has('notification.message'))
		<div class="alert alert-{{session('notification.type')}}" >
			{{session('notification.message') }}
		</div>
		@endif
		@yield('container')
	</div>

	<script type="text/javascript" src="{{asset("js/jquery.js")}}"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@include('flashy::message')
</body>
</html>