@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="row">
        <h1>These are the planets in the {{ $star->starName }}'s  Solarsystem</h1>
    </div>
    <div class="row m-2 p-2">
        <h3>Planets:</h3>
        @foreach($planets as $planet)
            <a href="/solarsystem/{{ $planet->planetId }}/viewplanet" class="text-dark">
                <h6>{{ $planet->planetName }}</h6>
            </a>
        @endforeach  
    </div>
</div>
@endsection
