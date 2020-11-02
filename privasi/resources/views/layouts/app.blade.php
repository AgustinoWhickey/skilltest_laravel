<!DOCTYPE html>
<html>
	<head>
		<title>Test Programmer</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
		
		<link href="{{ asset('bootstrap-material-design-master/dist/css/bootstrap-material-design.css') }}" rel="stylesheet">
		<link href="{{ asset('bootstrap-material-design-master/dist/css/ripples.min.css') }}" rel="stylesheet">
		
		<link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">
		
		<link href="{{ asset('bootstrap-material-design-master/index.css') }}" rel="stylesheet">
	</head>
	<body>
		
		<div class="navbar navbar-info">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse navbar-warning-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="{{ url('/form') }}">Form</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			@yield('content')
		</div>
		
	</body>
</html>
