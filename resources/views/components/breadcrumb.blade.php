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
                            <li class="breadcrumb-item"><a href="/">@lang('messages.home')</a></li>
                            
                            {{ $parent }}
                            
                            <li class="breadcrumb-item"> {{ $child }}</li>
                        </ul>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>