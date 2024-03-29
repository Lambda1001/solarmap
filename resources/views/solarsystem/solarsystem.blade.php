@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="m-3 d-flex flex-row align-items-center justify-content-center text-center" style="height: 100vh;">
        <div class="col-11 border border-light h-100 p-3">
            <div class="row border border-light m-2 p-2">
                <h1>There are {{ $stars->count() }} star(s) in this galaxy</h3>
                <div class="row">
                    @foreach($stars as $star)
                        <h3>Star Name: {{ $star->starName }}</h3>
                        <a href="/solarsystem/{{ $star->id }}/viewplanets" class="text-dark">View Planets</a>
                        <a href="/solarsystem/{{ $star->id }}/specifyplanet" class="text-dark">Add Planets</a>
                    @endforeach
                    <a href="/createstar" class="mt-5">
                        <button class="btn btn-primary">Create a star</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
