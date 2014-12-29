<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title')
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- google fonts -->
	{{HTML::style("css/reset.css")}}
	{{HTML::style("css/style.css")}}
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	{{ HTML::script('js/functions.js')}}
</head>
<body>
	<div class="container">
		<div class="content">
			@yield('content')
		</div>
<!-- 		<div class="footer">
	<div class="minifooter">Copyright 2014 Maico Paulussen &amp; Matthias Verhoeven</div>
</div> -->
	</div>
</body>
</html>