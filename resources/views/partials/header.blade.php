<header>
    <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo La Molisana">
    <nav>
        <i class="fas fa-bars"></i>
        <ul>
            <li class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="{{Route::currentRouteName() == 'product' ? 'active' : ''}}">
                <a href="{{route('product', [ 'id' => 0 ])}}">Prodotti</a>
            </li>
            <li class="{{Route::currentRouteName() == 'news' ? 'active' : ''}}">
                <a href="{{route('news')}}">News</a>
            </li>
        </ul>
    </nav>
</header>