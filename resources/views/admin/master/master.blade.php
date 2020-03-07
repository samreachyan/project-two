<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> @yield('title')</title>

<base href="{{ asset('backend') }}/" >

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="Awesome/css/all.css">
<script src="js/lumino.glyphs.js"></script>


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
		@include('admin.master.header')
		
        @include('admin.master.sidebar')		

        @yield('content')

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
</body>

</html>
