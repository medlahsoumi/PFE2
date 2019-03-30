

<!doctype html>
<html >
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="Lahsoumi">
		<link rel="icon" href="favicon.ico">
		<title>Acceuil</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
 
</head>
@yield('head')

<body id="page-top">
		<!-- Navigation -->
		@include('inc.nav2')
		<!-- Header -->
		@include('inc.header2')
		
		@section('about')
			
		@endsection
		
	</div>
			@include('inc.homesections')
	<p id="back-top">
		<a href="#top"><i class="fa fa-angle-up"></i></a>
	</p>
	
	@include('inc.homefooter')
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/mooz.themes.scripts.js"></script>
</body>
</html>
