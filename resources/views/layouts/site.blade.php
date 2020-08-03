<!DOCTYPE html>
<html lang="">

<head>

	<meta charset="utf-8">
	<title> Cлуцкхлебозавод</title>
	<meta name="description" content="Startup HTML template OptimizedHTML 5">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="img/favicon.png">
	<meta property="og:image" content="/frontend/img/dest/preview.jpg">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/css/lightgallery.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link rel="stylesheet" type="text/css" href="/frontend/fonts/FontAwesomePro/css/all.css">
	<link rel="stylesheet" href="/frontend/css/fullpage.css">
	<link rel="stylesheet" href="/frontend/css/main.css">
    @yield('styles')
</head>

<body>
    <div class="container-fluid search-nav-wrapper">
		<span class="close">
			<i class="fal fa-times"></i>
		</span>
		<div class="container-inner">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-8">
					<form action="/search" method="GET" role="form">
						@csrf
						<div class="form-group">
							<input type="text" name="q" value="" class="form-control" placeholder="Введите ваш поисковый запрос" required="">
							<button type="submit" class="btn">
								<i class="fal fa-search"></i>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@if (\Request::route()->getName()=='home')
	<a href="/" class="header-logo">
		<img src="/frontend/images/logo.png" alt="">
	</a>
	@endif
	<header class="header {{ \Request::route()->getName()!='home' ? 'header-inner' : ''}} ">
		<div class="position-relative">
			<a href="#" class="header__burger-menu">
				<span></span>
				<span></span>
				<span></span>
			</a>
			@if (\Request::route()->getName()=='home')
				@include('layouts.home-menu')
			@else
				@component('components.breadcrumb')
					@slot('parent')
						@yield('parent')	
					@endslot
					@slot('child')
						@yield('child')	
					@endslot
				@endcomponent
			@endif
			
			<div class="header-block__left">
				@if(\Request::route()->getName()=='stories')
				<a href="#modal-send-history" data-toggle="modal" class="btn btn-red">@lang('messages.send_hist')</a>
				@elseif(\Request::route()->getName()=='viewProduct')
				<a href="#modal-order" data-toggle="modal" class="btn btn-red">@lang('messages.order')</a>
				@elseif(\Request::route()->getName()=='viewStory')
				<a href="#modal-send-history" data-toggle="modal" class="btn btn-red">@lang('messages.send_hist')</a>
				@elseif(\Request::route()->getName()=='recipes')
				<a href="#modal-send-recipe" data-toggle="modal" class="btn btn-red">@lang('messages.send_rec')</a>
				@endif
				<a id="specialButton" href="" class="block__left-icon"><img src="/frontend/images/icon/eye.svg" alt=""></a>
				<a href="" class="block__left-icon search-btn"><img src="/frontend/images/icon/search.svg" alt=""></a>
				<a href="/lang/ru" class="block__left-icon">RU</a>
				<a href="/lang/en" class="block__left-icon">EN</a>
				<a href="/lang/by" class="block__left-icon">BY</a>
			</div>
		</div>
	</header>


	@include('layouts.menu-wrapper')

	@include('layouts.product-menu')

    @yield('content')

	@include('layouts.modals')
	<script src="https://lidrekon.ru/slep/js/jquery.js"></script>
	<script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
	  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/vendors/scrolloverflow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/js/lightgallery.min.js"></script>
	<script src="/js/jquery.simple3D.min.js"></script>
	<script src="/frontend/js/jquery.nicescroll.min.js"></script>
    <script src="/frontend/js/app.min.js"></script>
    @yield('scripts')
	{{-- <script src="/https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript">
	</script>
	<script type="text/javascript">
        // Функция ymaps.ready() будет вызвана, когда
        // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
        ymaps.ready(init);
        function init(){
            var myMap = new ymaps.Map("map", {
                center: [55.76, 37.64],
                zoom: 7
            });
        }
    </script> --}}
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