@extends('layouts.landing')

@section('content')
    <div class="container text-light mt-4">
        <div  class="d-flex justify-content-between align-content-center">
            <div>
                <h2 style="font-size: 7em;">About</h2>
                <p class="fs-3">Want to reach me?</p>
            </div>
            <div class="text-lg-center" style="width: 200px; height: 200px; border: 1px solid #fff;">
                image
            </div>
        </div>
        <div class="d-flex justify-content-between align-content-center" style="margin-top: 300px;">
            <div>
                <p class="fs-4">I am just a developer passionate about design... and creativity.</p>
                <p class="fs-4">You can reach me on these places.</p>
                <ul class="nav justify-content-start text-light">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Twitter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TikTok</a>
                    </li>
                </ul>
                <p class="fs-4 mt-5">For any business inquiries, my email is always open :)</p>
                <a href="#">kvinandk11@gmail.com</a>
            </div>
        </div>

    </div>
@endsection