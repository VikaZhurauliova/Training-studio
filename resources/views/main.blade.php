@extends('app')
@section('content')
    <section class="fullscreen" data-bg-video="{{asset('images/gym-video.mp4')}}">
        <div class="bg-overlay" data-style="1"></div>
        <div class="container-fluid">
            <div class="container-fullscreen">
                <div class="text-middle text-center">
                    <h3 class="m-b-0">WORK HARDER, GET STRONGER</h3>
                    <h2 class="text-medium m-t-0">EASY WITH OUR GYM</h2>
                    <p class="lead">We can help you</p>
                    <a class="btn btn-dark btn-outline" href="#">Become a member</a>
                </div>
            </div>
        </div>
    </section>
@endsection

