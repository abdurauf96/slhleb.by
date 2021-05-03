<!DOCTYPE html>
<html lang="">

<head>

	<meta charset="utf-8">
	<title>{{ MetaTag::get('title') }}</title>
        {!! MetaTag::tag('description') !!}
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="/frontend/images/favicon-slhleb.png">
	<meta property="og:image" content="/frontend/img/dest/preview.jpg">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/css/lightgallery.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link rel="stylesheet" type="text/css" href="/frontend/fonts/FontAwesomePro/css/all.css">
	<link rel="stylesheet" type="text/css" href="/frontend/css/twentytwenty.css">
	
	<link rel="stylesheet" href="/frontend/css/bvi.min.css" type="text/css">
	
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
					@slot('subchild')
						@yield('subchild')
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
				<a href="#" class="block__left-icon bvi-open"><img src="/frontend/images/icon/eye.svg" alt=""></a>
				<a href="" class="block__left-icon search-btn"><img src="/frontend/images/icon/search.svg" alt=""></a>
				<div class="dropdown-custom">
                    @if (app()->getLocale()=='ru')
                    <a href="#" class="block__left-icon">RU</a>            
                    <ul class="dropdown-menu dropdown-content">
                        <a href="/lang/en" class="block__left-icon">EN</a>
                        <a href="/lang/by" class="block__left-icon">BY</a>
                    </ul>  
                    @elseif(app()->getLocale()=='en')
                    <a href="#" class="block__left-icon">EN</a>            
                    <ul class="dropdown-menu dropdown-content">
                        <a href="/lang/ru" class="block__left-icon">RU</a>
                        <a href="/lang/by" class="block__left-icon">BY</a>
                    </ul>
                    @else
                    <a href="#" class="block__left-icon">BY</a>            
                    <ul class="dropdown-menu dropdown-content">
                        <a href="/lang/en" class="block__left-icon">EN</a>
                        <a href="/lang/ru" class="block__left-icon">RU</a>
                    </ul>
                    @endif
                </div>
			</div>
		</div>
	</header>

    
	@include('layouts.menu-wrapper')

	@include('layouts.product-menu')

    @yield('content')

	@include('layouts.modals')
	
	<!--<script src="https://lidrekon.ru/slep/js/jquery.js"></script>-->
 <!--   <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>-->
	
	  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/vendors/scrolloverflow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/js/lightgallery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/g/lightgallery,lg-autoplay,lg-fullscreen,lg-hash,lg-share,lg-thumbnail,lg-video,lg-zoom"></script>
	<script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script src="/js/jquery.simple3D.min.js"></script>
	<script src="/frontend/js/jquery.event.move.js"></script>
	<script src="/frontend/js/jquery.twentytwenty.js"></script>
	<script src="/frontend/js/bvi.min.js"></script>
	<script src="/frontend/js/bvi-init.min.js"></script>
	<script src="/frontend/js/js.cookie.min.js"></script>
	<script src="/frontend/js/jquery.nicescroll.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="/frontend/js/app.min.js"></script>
	<script src="/frontend/js/my.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"> </script> 
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-mapael/2.2.0/js/jquery.mapael.min.js"></script>

	<script src="/frontend/js/countries.js"></script>
        
    @yield('scripts')
	
    <script>
        $(".section-bg-floating").simple3D({
            moveX:1, // 1 - 5
            moveY:1, // 1 - 5
            bgImage:true,
            targetAll:true,
            reverseX: true,
            reverseY: true
        });
    </script>

</body>
</html>