@extends('app')
@section('content')
    <section class="fullscreen" style="background-image: url('{{asset('images/contact-bg.jpg')}}')">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">
                    <a href="{{route ('main')}}" class="logo">
                        <img src="{{asset('images/line-dec.png')}}" alt="Training logo">
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-6 center p-40 background-white b-r-6">
                        <form class="form-transparent-grey" action="{{ route('auth.register')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>{{__('register_new_account')}}</h3>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">{{__('name')}}</label>
                                    <input type="text" name="name" placeholder="{{__('name')}}" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">{{__('email')}}</label>
                                    <input type="email" name="email" placeholder="{{__('email')}}" class="form-control"
                                           required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">{{__('password')}}</label>
                                    <input type="password" name="password" placeholder="{{__('password')}}"
                                           class="form-control" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">{{__('password_confirmation')}}</label>
                                    <input type="password" name="password_confirmation"
                                           placeholder="{{__('password_confirmation')}}" class="form-control" required>
                                </div>

                                <div class="col-lg-12 form-group">
                                    @foreach($errors->all() as $key => $error)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{$error}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button
                                        type="submit" class="btn btn-outline btn-dark">{{__('register_new_account')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
