<div class="container pl-offset">
    <div class="row">
        <div class="col-md-12">
            <div class="row mt-4">
                <div class="col-md-2">
                    <div class="header-inner__logo">
                        <a href="/" class="header-logo">
                            <img src="/frontend/images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="header__breadcrumbs">
                        <ul>
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            @if($child->parent_id!=null)
                            <li class="breadcrumb-item"><a href="/">{{ $child->getParent($child->parent_id)['title_'.\App::getLocale()] }}</a></li>
                            @endif
                            <li class="breadcrumb-item"> {{ $child['title_'.\App::getLocale()] }}</li>
                        </ul>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>