<!DOCTYPE html>
<html lang="el"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="author" content="RSK-Project">
	<link rel="shortcut icon" href="favicon.ico">
	<title>@yield('title') | Διακοπές στο Χωριό</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/simple-line-icons.css" rel="stylesheet">
	<link href="/assets/css/jquery-ui.css" rel="stylesheet">
	<link href="/assets/css/datepicker.css" rel="stylesheet">
	<link href="/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/assets/css/app.css" rel="stylesheet" id="app">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js" type="text/javascript"></script>
</head>
<body class="notransition" ng-app="api">
	@yield('content')
	<script src="/assets/js/jquery-2.1.1.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/jquery-ui-touch-punch.js"></script>
    <script src="/assets/js/jquery.cookie.js"></script>
    <script src="/assets/js/jquery.placeholder.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/jquery.touchSwipe.min.js"></script>
    <script src="/assets/js/jquery.slimscroll.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
	<script src="/assets/js/infobox.js"></script>
   	<script src="/assets/js/jquery.tagsinput.min.js"></script>
    <script src="/assets/js/bootstrap-datepicker.js"></script>

	@yield('scripts')
</body>
</html>
