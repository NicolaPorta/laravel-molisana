@extends('layouts.main')

@section('content')
<section class="container">
    <h2>LE LUNGHE</h2>
    <ul>
        @foreach ($long as $type)
            <li>
                <img src="{{asset($type["src"])}}" alt="{{asset($type["titolo"])}}">
                <div class="layover">
                    <a href="#">{{$type["titolo"]}}</a>
                </div>
            </li>
        @endforeach
    </ul>
</section>
<section class="container">
    <h2>LE CORTE</h2>
    <ul>
        @foreach ($short as $type)
            <li>
                <img src="{{asset($type["src"])}}" alt="{{asset($type["titolo"])}}">
                <div class="layover">
                    <a href="#">{{$type["titolo"]}}</a>
                </div>
            </li>
        @endforeach
    </ul>
</section>
<section class="container">
    <h2>LE CORTISSIME</h2>
    <ul>
        @foreach ($veryShort as $type)
            <li>
                <img src="{{ $type['src'] }}" alt="{{$type['titolo']}}">
                <div class="layover">
                    <a href="#">{{$type["titolo"]}}</a>
                </div>
            </li>
        @endforeach
    </ul>
</section>
@endsection