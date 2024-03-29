@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enter the Star</div>

                <div class="card-body">
                    <form method="POST" action="/storestar">
                        @csrf

                        <div class="row mb-3">
                            <label for="starId" class="col-md-4 col-form-label text-md-end">Star ID</label>

                            <div class="col-md-6">
                                <input id="starId" type="text" class="form-control @error('starId') is-invalid @enderror" name="starId" value="{{ old('starId') }}" required autocomplete="starId" autofocus>

                                @error('starId')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="starName" class="col-md-4 col-form-label text-md-end">Star Name</label>

                            <div class="col-md-6">
                                <input id="starName" type="text" class="form-control @error('starName') is-invalid @enderror" name="starName" value="{{ old('starName') }}" required autocomplete="starName">

                                @error('starName')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bodyType" class="col-md-4 col-form-label text-md-end">Body Type</label>

                            <div class="col-md-6">
                                <input id="bodyType" type="text" class="form-control @error('bodyType') is-invalid @enderror" name="bodyType" value="{{ old('bodyType') }}" required autocomplete="bodyType">

                                @error('bodyType')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="starMeanRadius" class="col-md-4 col-form-label text-md-end">Star Mean radius</label>

                            <div class="col-md-6">
                                <input id="starMeanRadius" type="text" class="form-control @error('starMeanRadius') is-invalid @enderror" name="starMeanRadius" value="{{ old('starMeanRadius') }}" required autocomplete="starMeanRadius">

                                @error('starMeanRadius')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="massValue" class="col-md-4 col-form-label text-md-end">Star Mass (Value)</label>

                            <div class="col-md-6">
                                <input id="massValue" type="text" class="form-control @error('massValue') is-invalid @enderror" name="massValue" value="{{ old('massValue') }}" required autocomplete="massValue">

                                @error('massValue')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="massExponent" class="col-md-4 col-form-label text-md-end">Star Mass (Exponent)</label>

                            <div class="col-md-6">
                                <input id="massExponent" type="text" class="form-control @error('massExponent') is-invalid @enderror" name="massExponent" value="{{ old('massExponent') }}" required autocomplete="massExponent">

                                @error('massExponent')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="starGravity" class="col-md-4 col-form-label text-md-end">Star Gravity</label>

                            <div class="col-md-6">
                                <input id="starGravity" type="text" class="form-control @error('starGravity') is-invalid @enderror" name="starGravity" value="{{ old('starGravity') }}" required autocomplete="starGravity">

                                @error('starGravity')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create the star
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
