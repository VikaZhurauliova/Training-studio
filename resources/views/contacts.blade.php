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
                        <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <!--  <div class="form-group">
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                            </div>  -->
                            <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
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
                                    <abbr title="Phone">P:</h4> {{$contact->phone}}
                                </address>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
