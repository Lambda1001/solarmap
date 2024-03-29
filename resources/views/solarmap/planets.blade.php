@extends('layouts.landing')
@section('content')
    <div class="container d-flex flex-column text-light">
        <div class="col-8">
            <div>
                <h1 style="font-size: 7em; font-weight: 500;">{{ $sun->starName}}'s solar System</h1>
            </div>
        </div>
        <div class="col-2">
            <div class="fs-4">
                Some description about the solar system
            </div>
        </div>
        <div style="position: absolute; right:20px; top: 50%; transform: translateY(-20%); width: 500px; height: 500px; border-radius: 50%; border: 1px solid #b3b3b329; padding: 1px;">
            <img src="/img/sun.png" alt="Image of the sun" class="img-fluid">
        </div>
    </div>
    <div class="container text-lg-center text-light" style="margin-top: 200px">
        <h2>These are the planets orbiting the {{ $sun->starName }}</h2>
        <div class="d-flex flex-row justify-content-center align-content-center">
            @foreach($star_planets as $star_planet)
                <a href="/solarmap/planet/{{ $star_planet->id }}" id="planet_Name">
                    <div class="m-5" style="width: 70px; height: 70px; border-radius: 50%; border: 1px solid #b3b3b329; padding: 10px;">
                        <img src="/storage/{{ $star_planet->planetImage }}" class="img-fluid rounded">
                        <p style="text-transform: capitalize;">{{ $star_planet->planetName }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection