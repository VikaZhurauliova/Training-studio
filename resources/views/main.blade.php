@extends('app')
@section('content')
    <section class="fullscreen" data-bg-video="{{asset('images/gym-video.mp4')}}">
        <div class="bg-overlay" data-style="1"></div>
        <div class="container-fluid">
            <div class="container-fullscreen">
                <div class="text-middle text-center">
                    <h3 class="m-b-0">{{__('banner-pre-title')}}</h3>
                    <h2 class="text-medium m-t-0">{{__('banner-title')}}</h2>
                    <p class="lead">{{__('banner-advice')}}</p>
                    <a class="btn btn-dark btn-outline" href="{{ route('auth.register') }}">{{__('banner-action')}}</a>
                </div>
            </div>
        </div>
    </section>
@endsection

