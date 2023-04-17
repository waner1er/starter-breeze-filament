<nav class="main-nav">
    Logo
    <ul class="main-nav__items">
        <li>
            <a href="{{ route('home') }}" class="main-nav__items__item__link">
                Home
            </a>
        </li>
        @foreach($menus as $menu)
            <li class="main-nav__items__item">
                @if($menu->page && $menu->page->is_published)
                    <a href="{{ route('pages.show', $menu->page->slug ) }}"
                       class="main-nav__items__item__link">
                        {{ substr($menu->title, 0, 30) }}  {{ (strlen($menu->page->title) > 30) ? '...' : '' }}
                        {!! (strlen($menu->page->title) > 30) ? '<span class="tooltip">'. $menu->page->title. '</span>' : '' !!}
                    </a>
                @endif
            </li>
        @endforeach
    </ul>
    @if (Route::has('login'))
        <div class="main-nav__login">
            @auth
                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Register</a>
                @endif
            @endauth
        </div>
    @endif
</nav>
