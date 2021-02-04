<section class="container">
    <h2>{{$title}}</h2>
    <ul>
        @foreach ($types as $type)
            <li>
                <img src="{{$type["src"]}}" alt="{{$type["titolo"]}}">
                <div class="layover">
                    <a href="{{route('product', [ 'id' => $type['id'] ])}}">{{$type["titolo"]}}</a>
                </div>
            </li>
        @endforeach
    </ul>
</section>