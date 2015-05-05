<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />

		<title>E-Learning SMKN 56 Jakarta</title>

		<!-- css style -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-theme.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/MyStyle.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/nivo-slider.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/default/default.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-datetimepicker.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-datetimepicker.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery-ui-1.11.3/jquery-ui.min.css') }}">

<!-- 
		<link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/main-responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/theme_light.css') }}" id="skin_color">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/print.css') }}" media="print"/>
 -->

		<!-- Fonts -->
		<link rel="stylesheet" href="{{asset('/fonts/style.css')}}">
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>


	</head>
	<body>
		
		<div class="container-fluid">
			
			<div class="row Row-Main-Header">
				@include('templates.guru_header')
			</div> <!-- Tutup div row header -->

			<center>
			<div class="row Row-Main-Body">
				<div class="row">
					<ol class="breadcrumb">
					  <li><a href="{{ URL::to('guru/') }}">Guru</a></li>
					  <li class="active">@yield('bread_guru')</li>
					</ol>
				</div>
					@yield('content')
			</div>
			</center>

			<div class="row Row-space"></div>

			<div class="row Row-Footer">
				<div class="col-md-12">
					<p class="footer"> COPYRIGHT ©2015 SITE. ALL RIGHT RESERVED </p>
				</div>
			</div> <!-- Tutup div row footer -->

		</div>
		

		<!-- Scripts -->
		<script src="{{ asset('/js/jquery.js') }}"></script>
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		<script src="{{ asset('/js/moment.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap-datetimepicker.js') }}"></script>
		<script src="{{ asset('/js/bootstrap-datetimepicker.min.js') }}"></script>
		<script src="{{ asset('/js/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ asset('/js/jquery-ui-1.11.3/jquery-ui.js') }}"></script>
		<script src="{{ asset('/js/jquery.nivo.slider.js') }}"></script>
		<script>
            var base_url = "{{url()}}";

	        $(window).load(function() {
	            $('#slider').nivoSlider();
	        });
		</script>
		
	</body>
</html>