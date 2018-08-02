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
</div>
</div>

	<div class="row">

		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark static-top">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="{{ url('/') }}">خرائط الحج الذكية </a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item ">
							 <a class="nav-link" href=" {{ url('/') }}">الرئيسية <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href=" {{ url('/map') }} ">الخرائط</a>
						</li>
					</ul>

				</div>
			</nav>
			<div class="carousel slide" id="carousel-531424">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-531424">
					</li>
					<li data-slide-to="1" data-target="#carousel-531424">
					</li>
					<li data-slide-to="2" data-target="#carousel-531424" class="active">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="img1.jpeg" />
						<div class="carousel-caption">
							<h4>
خدمة حجاج بيت الله الحرام							</h4>
							<p>
 							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src= "img2.jpg" />
						<div class="carousel-caption">
							<h4>
سهولة في الإسخدام							</h4>
							<p>
 							</p>
						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="img3.jpg" />
						<div class="carousel-caption">
							<h4>
تسهيل عمل المسئولين							</h4>
							<p>
 							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-531424" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-531424" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
وصف المشروع
			</h3>
			<p>
			خارطة الكترونية تفاعلية، تتكامل بها مجموعة GPSمن الأنظمة الملاحية
GISونظم المعلومات الجغرافية
DATABASEوقواعد البيانات
لتشكل معاً منظومة بناء الخارطة،
لدعم أهداف وخطط المستهدفين منه
 			</p>
		</div>
	</div>
	<div class="row">
		<div class="row">
			<div class="col-md-4">
				<h2>
					الجهات المستهدفة
				</h2>
				<p>
					وزارة الحج / إدارة الحشود / مؤسسات الطوافة /
					 النقابة العامة للسيارات
				</p>
				<p>
					<a class="btn" href="#">إضغط هنا للمزيد من التفاصل»</a>
				</p>
			</div>
			<div class="col-md-4">
				<h2>
					الرؤية
				</h2>
				<p>
					تقديم خدمات أمثل للحجاج في مجالات النقل، الإسكان، الاعاشة، الأمن والسلامة .. بشكل أكثر كفاءة.
				</p>
				<p>
					<a class="btn" href="#">إضغط هنا للمزيد من التفاصل »</a>
				</p>
			</div>
			<div class="col-md-4">
				<h2>
					دواعي التنفيذ
				</h2>
				<p>
					عدم معرفة مواقع سكن الحجاج بدقة، يؤدي إلى صعوبات في التخطيط لنقل واسكان واعاشة الحجاج
				</p>
				<p>
					<a class="btn" href="#">إضغط هنا للمزيد من التفاصل »</a>
				</p>
			</div>
		</div>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
