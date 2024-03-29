@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="row">
        <div class="fw-bold" style="font-size: 5em;">{{ $planet->planetName }}</div>
        <h3>Characteristics</h3>
        <div class="row">
            <p><span class="fw-bold">Body Type</span>: {{ $planet->bodyType }}</p>
            <p><span class="fw-bold">SemiMajor Axis</span>: {{ $planet->planetSemimajorAxis }} Km</p>
            <p><span class="fw-bold">Perihelion</span>: {{ $planet->planetPerihelion }} Km</p>
            <p><span class="fw-bold">Aphelion</span>: {{ $planet->planetAphelion }} Km</p>
            <p><span class="fw-bold">Mean Radius</span>: {{ $planet->planetMeanRadius }} Km</p>
            <p><span class="fw-bold">Mass (Value)</span>: {{ $planet->massValue }}</p>
            <p><span class="fw-bold">Mass (Exponent)</span>: {{ $planet->massExponent }}</p>
            <p><span class="fw-bold">Gravity</span>: {{ $planet->planetGravity }} m/s^2</p>
            <p><span class="fw-bold">Description</span>: {{ $planet->planetDescription }}</p>
            <p><span class="fw-bold">Planet Image</span>: {{ $planet->planetImage }}</p>
        </div>
        <a href="/solarsystem/{{ $planet->planetId }}/update">
            <button class="btn btn-dark">
                Update the data
            </button>
        </a>
    </div>
</div>
@endsection
