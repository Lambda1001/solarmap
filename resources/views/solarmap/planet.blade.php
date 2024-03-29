@extends('layouts.landing')
@section('content')
    <div class="container">
        <div class="row mt-3 text-light text-lg-center">
            <img src="/storage/{{ $planet->planetImage }}" alt="planet" style="position: absolute; top: 300px; left: 50%; z-index: -10; transform: translateX(-50%); filter:brightness(0.9)">
            <h2 style="text-transform: uppercase; font-weight: 500; font-size: 5em; margin-top: 200px;">{{ $planet->planetName }}</h2>
        </div>

        <div class="text-light mt-4 p-2" style="backdrop-filter: blur(5px); border: 1px solid #b3b3b329;">
            <h2 style="text-align: center; font-size: 44px; font-weight: bold;">Description</h2>
            <div class="fs-4 p-2">
                <p> {{ $planet->planetDescription }}</p>
            </div>
        </div>


        <div class="text-light text-lg-center mt-4 p-2" style="backdrop-filter: blur(5px); border: 1px solid #b3b3b329;">
            <h2 style="font-size: 44px; font-weight: bold;">Dimensions</h2>
            <div class="d-flex flex-column justify-content-center p-5">
                <div class="fs-4">
                    <h4>Semimajor Axis (Distance between the sun's center and {{ $planet->planetName }})</h4>
                    <p>{{ $planet->planetSemimajorAxis }} Km</p>
                </div>
                <div class="fs-4">
                    <h4>Perihelion (Closest distance between {{ $planet->planetName }} and the sun)</h4>
                    <p>{{ $planet->planetPerihelion }} Km</p>
                </div>
                <div class="fs-4">
                    <h4>Aphelion (Farthest distance between {{ $planet->planetName }} and the sun)</h4>
                    <p>{{ $planet->planetAphelion }} Km</p>
                </div>
                <div class="fs-4">
                    <h4>Mean Radius (The mean radius of {{ $planet->planetName }})</h4>
                    <p>{{ $planet->planetMeanRadius }} Km</p>
                </div>
                <div class="fs-4">
                    <h4>Mass (The approx. mass)</h4>
                    <p>{{ $planet->massValue }}^{{ $planet->massExponent }}</p>
                </div>
                <div class="fs-4">
                    <h4>{{ $planet->planetName }}'s gravity</h4>
                    <p>{{ $planet->planetGravity }} m/s²</p>
                </div>
            </div>
        </div>            
        
        <div class="text-light mt-4 p-2" style="backdrop-filter: blur(3px); border:1px solid #b3b3b329;">
            <h2 style="text-align: center; font-size: 44px; font-weight: bold;" >Gallery</h2>
            <div class="w-75">

            </div>
        </div>
    </div>
@endsection