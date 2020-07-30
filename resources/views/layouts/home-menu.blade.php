<div class="row">
    <div class="col-md-12">  
        <div class="row hide-scroll-down header-row">
            <div class="header-row-wrap">
                <div class="header__menu">
                    <div class="dot"></div>
                    <ul>
                        @foreach ($menus as $menu)
                        <li class="menu-li"><a href="{{ $menu->url }}">{{ $menu['title_'.\App::getLocale()] }}</a>
                            <div class="header__menu-sub">
                                <div class="container">
                                    <ul>
                                        @foreach ($menu->children($menu->id) as $submenu)
                                        <li><a href="{{ $submenu->url }}">{{ $submenu['title_'.\App::getLocale()] }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endforeach              
                    </ul>  
                </div>
                <div class="header__phone">
                    <a href="tel:(8-01795) 5-60-27" class="phone-link">(8-01795) 5-60-27</a>
                </div>
            </div>
        </div>
    </div>
</div>