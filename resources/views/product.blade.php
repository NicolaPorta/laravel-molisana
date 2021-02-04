@extends('layouts.main')

@section('content')
    <main class="product">
        @if ($id > 0)
            <a href="{{route('product', ['id' => $id - 1])}}" class="prev"></a>
        @endif
        @if ($id < $max)
            <a href="{{route('product', ['id' => $id + 1])}}" class="next"></a>
        @endif
        <div class="container">
            <h2>{{$product['titolo']}}</h2>
            <img src="{{$product['src-h']}}" alt="{{$product['titolo']}}">
            <img src="{{$product['src-p']}}" alt="{{$product['titolo']}}">
            <p>{!!$product['descrizione']!!}</p>
        </div>
    </main>
@endsection