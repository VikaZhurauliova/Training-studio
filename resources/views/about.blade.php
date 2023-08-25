@extends('app')
@section('content')
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 m-b-40 text-center">
                <h2>CHOOSE PROGRAM</h2>
                <p class="lead">Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
            </div>
            <div class="row">
                @foreach($abouts as $about)
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-rocket"></i></a>
                            </div>
                            <h3>{{$about->name}}</h3>
                            <p>{{$about->description}}</p>
                            <a href="#"><p>DISCOVER MORE</p></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="page-title" data-bg-parallax="{{asset('images/cta-bg.jpg')}}">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="page-title">
                <h1 class="text-uppercase text-medium">DON’T THINK, BEGIN TODAY!</h1>
                <span>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</span>
                <button type="button" class="btn btn-light btn-about">Become a member</button>
            </div>
        </div>
    </section>
@endsection
