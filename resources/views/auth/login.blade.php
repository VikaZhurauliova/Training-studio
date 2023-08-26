@extends('app')
@section('content')
    <section class="fullscreen" data-bg-parallax="{{asset('images/slide-01.jpg')}}">
        <div class="container">
            <div>
                <div class="text-center m-b-30">
                    <a href="#" class="logo">
                        <img src="{{asset('images/line-dec.png')}}" alt="Training logo">
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-5 center p-50 background-white b-r-6">
                        <h3>Login to your Account</h3>
                        <form action="{{ route('auth.login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="sr-only">Username or Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group m-b-5">
                                <label class="sr-only">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group form-inline text-left">
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" name="remember"><small class="m-l-10"> Remember me</small>
                                    </label>
                                </div>
                            </div>
                            <a id="btn-search" href="{{ route('google.redirect') }}"> <i class="fa-google fab"></i></a>
                            </a>
                            <div class="col-lg-12 form-group">
                                @foreach($errors->all() as $key => $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{$error}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                @endforeach
                            </div>
                            <div class="text-left form-group">
                                <button type="submit" class="btn btn-outline btn-dark">Login</button>
                            </div>
                        </form>
                        <p class="small">Forget password? <a href="{{ route('password.request') }}">Click here</a></p>
                        <p class="small">Don't have an account yet? <a href="{{ route('auth.registerPage') }}">Register New Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
