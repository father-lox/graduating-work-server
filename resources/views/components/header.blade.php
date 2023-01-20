<header class="header">
        <nav class="navigation">
            <div class="navigation__side">
                <a href="{{ route('home') }}" class="button navigation__home">read news</a>
            </div>
            <div class="navigation__side">
                @auth("web")
                    <a href="{{ route('write') }}" class="button">write</a>
                    <a href="{{ route('publications') }}" class="button">publications</a>
                    <a href="{{ route('logout') }}" class="button">logout</a>
                @endauth
                @guest('web')
                    <a href="{{ route('login') }}" class="button">login</a>
                    <a href="{{ route('registration') }}" class="button">sign up</a>
                @endguest
            </div>
        </nav>
</header>    