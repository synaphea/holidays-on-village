<!DOCTYPE html>
<html lang="en" ng-app="RDash">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Γιώργος Θεοφίλης">

		<link rel="shortcut icon" href="favicon.ico">

		<title>@yield('title') | {{ trans('base.title') }}</title>
		
		<link href='https://fonts.googleapis.com/css?family=Roboto:500,700&subset=latin,greek' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
		<style type="text/css">
		body {
		    background-image: url("/grey_@2X.png");
		} 
		</style>
		
	</head>
	<body ng-controller="MasterCtrl">
		<!-- Main Content -->
		<div>
			@yield('content')
		</div>
	</body>
</html>
