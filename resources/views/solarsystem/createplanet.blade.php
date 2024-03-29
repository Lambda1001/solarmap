@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enter a Planet</div>

                <div class="card-body">
                    <form method="post" action="/storeplanet" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="planetId" class="col-md-4 col-form-label text-md-end">Planet ID</label>

                            <div class="col-md-6">
                                <input id="planetId" type="text" class="form-control @error('planetId') is-invalid @enderror lowercase-text" name="planetId" @if($data) value="{{$data['englishName']}}" @else value="{{old('planetId') ?? ' '}}" @endif required autocomplete="planetId" autofocus>

                                @error('planetId')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="starId" class="col-md-4 col-form-label text-md-end">Home Star ID</label>

                            <div class="col-md-6">
                                <input id="starId" type="text" class="form-control @error('starId') is-invalid @enderror" name="star_id" value="{{ old('starId') ?? $starId}}" required autocomplete="starId" autofocus>

                                @error('starId')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="planetName" class="col-md-4 col-form-label text-md-end">Planet Name</label>

                            <div class="col-md-6">
                                <input id="planetName" type="text" class="form-control @error('planetName') is-invalid @enderror" name="planetName" @if($data) value="{{$data['englishName']}}" @else value="{{old('planetId') ?? ' '}}" @endif required autocomplete="planetName">

                                @error('planetName')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bodyType" class="col-md-4 col-form-label text-md-end">Body Type</label>

                            <div class="col-md-6">
                                <input id="bodyType" type="text" class="form-control @error('bodyType') is-invalid @enderror" name="bodyType" @if($data) value="{{$data['bodyType']}}" @else value="{{old('bodyType') ?? ' '}}" @endif required autocomplete="bodyType">

                                @error('bodyType')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="semiMajorAxis" class="col-md-4 col-form-label text-md-end">Planet Semi-major Axis</label>

                            <div class="col-md-6">
                                <input id="semiMajorAxis" type="semiMajorAxis" class="form-control @error('semiMajorAxis') is-invalid @enderror" name="planetSemimajorAxis"  @if($data) value="{{$data['semimajorAxis']}}" @else value="{{old('planetSemimajorAxis') ?? ' '}}" @endif required autocomplete="planetSemimajorAxis">

                                @error('planetSemimajorAxis')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="planetPerihelion" class="col-md-4 col-form-label text-md-end">Planet Perihelion</label>

                            <div class="col-md-6">
                                <input id="planetPerihelion" type="text" class="form-control @error('planetPerihelion') is-invalid @enderror" name="planetPerihelion" @if($data) value="{{$data['perihelion']}}" @else value="{{old('planetPerihelion') ?? ' '}}" @endif required autocomplete="planetPerihelion">

                                @error('planetPerihelion')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="planetAphelion" class="col-md-4 col-form-label text-md-end">Planet Aphelion</label>

                            <div class="col-md-6">
                                <input id="planetAphelion" type="text" class="form-control @error('planetAphelion') is-invalid @enderror" name="planetAphelion" @if($data) value="{{$data['aphelion']}}" @else value="{{old('planetAphelion]') ?? ' '}}" @endif required autocomplete="planetAphelion">

                                @error('planetAphelion')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="planetMeanRadius" class="col-md-4 col-form-label text-md-end">Planet Mean radius</label>

                            <div class="col-md-6">
                                <input id="planetMeanRadius" type="text" class="form-control @error('planetMeanRadius') is-invalid @enderror" name="planetMeanRadius" @if($data) value="{{$data['meanRadius']}}" @else value="{{old('planetMeanRadius') ?? ' '}}" @endif required autocomplete="planetMeanRadius">

                                @error('planetMeanRadius')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="massValue" class="col-md-4 col-form-label text-md-end">Planet Mass (Value)</label>

                            <div class="col-md-6">
                                <input id="massValue" type="text" class="form-control @error('massValue') is-invalid @enderror" name="massValue" @if($data) value="{{$data['mass']['massValue']}}" @else value="{{old('massValue') ?? ' '}}" @endif required autocomplete="massValue">

                                @error('massValue')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="massExponent" class="col-md-4 col-form-label text-md-end">Planet Mass (Exponent)</label>

                            <div class="col-md-6">
                                <input id="massExponent" type="text" class="form-control @error('massExponent') is-invalid @enderror" name="massExponent" @if($data) value="{{$data['mass']['massExponent']}}" @else value="{{old('massExponent') ?? ' '}}" @endif required autocomplete="massExponent">

                                @error('massExponent')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="planetGravity" class="col-md-4 col-form-label text-md-end">Planet Gravity</label>

                            <div class="col-md-6">
                                <input id="planetGravity" type="text" class="form-control @error('planetGravity') is-invalid @enderror" name="planetGravity" @if($data) value="{{$data['gravity']}}" @else value="{{old('planetGravity') ?? ' '}}" @endif required autocomplete="planetGravity">

                                @error('planetGravity')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="planetDescription" class="col-md-4 col-form-label text-md-end">Planet Description</label>

                            <div class="col-md-6">
                                <input id="planetDescription" type="text" class="form-control @error ('planetDescription') is-invalid @enderror" name="planetDescription" value="{{ old('planetDescription')}}" required autocomplete="planetDescription">

                                @error('planetDescription')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="planetImage" class="col-md-4 col-form-label text-md-end">Planet Image</label>
                            <div class="col-md-6">
                                <input type="file" name="planetImage" id="planetImage" class="form-control-file @error('planetImage') is-invalid @enderror" value="{{ old('planetImage') }}" required>

                                @error('planetImage')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-primary">
                                    Create the planet
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
