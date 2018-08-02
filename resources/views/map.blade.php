<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="rtl" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>خرائط الحج الذكية</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">

			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark static-top">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="{{ url('/') }}">خرائط الحج الذكية </a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href=" {{ url('/') }}">الرئيسية  </a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href=" {{ url('/map') }} ">الخرائط <span class="sr-only">(current)</span></a>
						</li>
					</ul>

				</div>
			</nav>
</div>
</div>
		<!--content -->
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-12">
<iframe src="https://www.google.com/maps/d/embed?mid=1nfcdbl2lX25fXuqtweLBHukU4WXqcIb6" frameborder="0" width=100% height="600"></iframe>			</div>
			<div class="col-md-2">
	</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
