<!DOCTYPE html>
<html lang="">

<head>

	<meta charset="utf-8">
	<title>OptimizedHTML 5</title>
	<meta name="description" content="Startup HTML template OptimizedHTML 5">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="img/favicon.png">
	<meta property="og:image" content="img/dest/preview.jpg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/FontAwesomePro/css/all.css">
	<link rel="stylesheet" href="/frontend/css/fullpage.css">
	<link rel="stylesheet" href="/frontend/css/main.css">

</head>

<body>

	<header class="header">
		<div class="position-relative">
			<div class="container-fluid">
				<div class="row mt-4">
					<div class="col-md-2">
						<div class="header-inner__logo">
							<a href="/" class="header-logo">
								<img src="/frontend/images/logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-10">
					</div>	
				</div>
			</div>
			
			<div class="header-block__left">
				<a href="" class="block__left-icon"><img src="./images/icon/eye.svg" alt=""></a>
				<a href="" class="block__left-icon"><img src="./images/icon/search.svg" alt=""></a>
				<a href="" class="block__left-icon">RU</a>
			</div>
		</div>
	</header>

	<div class="section__wrapper">
		<div class="section__content s-not-found" style="background-image: url('/frontend/images/bg-main.jpg')">
			<div class="section-bg-floating">
				<div class="bg-floating-404"></div>
			</div>
			<div class="container">
				<div class="section__content-wrap" style="text-align: center;">
					<div class="content-wrap-images">
						<img src="/frontend/images/404.png" alt="">
					</div>
					<div class="content-wrap-title">
						<div class="title title-style">
							<h2>Страница не найдена</h2>
						</div>
						<p>запрашиваемая страница не найдена или не существует.<br>
Попробуйте начать сначала.</p>
						<a href="/" class="btn btn-red">На главную</a>
					</div>
					
				</div>
			</div>

		</div>
	</div>





	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="/frontend/js/jquery.simple3D.min.js"></script>
	<script src="/frontend/js/jquery.nicescroll.min.js"></script>
	<script src="/frontend/js/app.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript">
	</script>

<script>
	$(".section-bg-floating").simple3D({
		moveX:3, // 1 - 5
		moveY:3, // 1 - 5
		bgImage:true,
		targetAll:true,
		reverseX: true,
		reverseY: true
	});
</script>

</body>
</html>

