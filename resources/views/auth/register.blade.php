@extends('app')
@section('content')
    <section class="fullscreen" style="background-image: url('{{asset('images/contact-bg.jpg')}}')">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">
                    <a href="index.html" class="logo">
                        <img src="{{asset('images/line-dec.png')}}" alt="Training logo">
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-6 center p-40 background-white b-r-6">
                        <form class="form-transparent-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Register New Account</h3>
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">First Name</label>
                                    <input type="text" value="" placeholder="First Name" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Last Name</label>
                                    <input type="text" value="" placeholder="Last Name" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Username</label>
                                    <input type="text" value="" placeholder="Username" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" value="" placeholder="Password" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="text" value="" placeholder="Email" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Phone</label>
                                    <input type="text" value="" placeholder="Phone" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button type="button" class="btn btn-outline btn-dark">Register New Account</button>
                                    <button type="button" class="btn btn-dark">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
