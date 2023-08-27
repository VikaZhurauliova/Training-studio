@extends('app')
@section('content')
    <section id="page-title" data-bg-parallax="{{asset('images/contact-bg.jpg')}}">
        <div class="container">
            <div class="page-title">
                <h1>Contact Us</h1>
                <span>The most happiest time of the day!.</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('main') }}">Home</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Get In Touch</h3>
                    <div class="m-t-30">
                        <form enctype="multipart/form-data" action="{{ route('contacts.feedback') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input value="{{ old('name') }}" type="text" aria-required="true" name="name" required class="form-control name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" value="{{ old('email') }}" aria-required="true" name="email" class="form-control email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" value="{{ old('subject') }}" name="subject"  class="form-control" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="message" rows="5" class="form-control" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" name="file" class="form-control-file" id="file">
                            </div>
                            <button class="btn" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Address & Map</h3>
                    <div class="row">
                        @foreach($contacts as $contact)
                            <div class="col-lg-6">
                                <address>
                                    <strong>{{$contact->name}}</strong><br>
                                    {{$contact->address}}
                                    <h4 title="Phone">P:</h4> {{$contact->phone}}
                                </address>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
