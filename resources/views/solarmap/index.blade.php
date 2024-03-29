@extends('layouts.landing')

@section('content')
    <div class="container d-flex justify-content-between align-content-center text-light">
        <div class="col-8 p-4">
            <div>
                <h2 style="font-size: 7em;">Solar Map</h2>
                <p class="fs-3" style="width: 300px;">Explore the planets in our solar system and learn of all its fascinating yet intricate data </p>
            </div>
        </div>
        <div class="col-4">
            <div class="container" style="width: 400px; height: 400px; background-position: center; background-size: cover">
                <img src="/img/STSCI-MarsPhobosComp3000.jpg" alt="APOD" class="img-fluid" style="border: 1px solid #b3b3b329; ">
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center align-content-center" style="margin-top: 60px;">
        <a href="/solarmap/planets">
            <button class="btn btn-dark text-light">
                Explore
            </button>
        </a>
    </div>
@endsection