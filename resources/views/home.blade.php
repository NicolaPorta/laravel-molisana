@extends('layouts.main')

@section('content')
<main class="home">
    @include('partials.sectionCards', [
        'title' => 'LE LUNGHE',
        'types' => $long
    ])

    @include('partials.sectionCards', [
        'title' => 'LE CORTE',
        'types' => $short
    ])

    @include('partials.sectionCards', [
        'title' => 'LE CORTISSIME',
        'types' => $veryShort
    ])
</main>
@endsection