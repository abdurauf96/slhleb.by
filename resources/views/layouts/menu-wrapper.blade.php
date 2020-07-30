<div class="menu-wrapper">
    <div class="menu-wrapper__container">
        <ul class="parent-menu">
            <div class="dot-menu"></div>
            @foreach ($menus as $menu)
            <li><a href="{{ $menu->url }}">{{ $menu['title_'.\App::getLocale()] }}</a>
                <ul class="sub__menu">
                    @foreach ($menu->children($menu->id) as $submenu)
                    <li><a href="{{ $submenu->url }}">{{ $submenu['title_'.\App::getLocale()] }}</a></li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</div>