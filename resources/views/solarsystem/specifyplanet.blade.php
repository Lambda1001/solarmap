@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col-md-8 justify-content-center">
            <div class="card">
                <div class="card-header">Enter the name of the planet you want to add</div>
                <div class="card-body">
                    <form action="/solarsystem/{{ $star->id }}/createplanet" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="planetName" class="col-md-4 col-form-label text-md-end">Planet Name</label>

                            <div class="col-md-6">
                                <input id="planetName" type="text" class="form-control @error('planetName') is-invalid @enderror" name="planetName" value="{{ old('planetName') }}" required autocomplete="planetName" autofocus>
                                @error('planetName')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Next
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
@endsection