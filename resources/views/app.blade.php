<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="{{asset('images/line-dec.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{__('main_title')}}</title>
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="body-inner">
    <header id="header" class="header-modern">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo">
                    <a href="{{ route('main') }}">
                        <span class="logo-default">TRAINING</span>
                        <span class="logo-dark">TRAINING</span>
                    </a>
                </div>
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                            class="icon-x"></i></a>
                    <form class="search-form" action="search-results-page.html" method="get">
                        <input class="form-control" name="q" type="text" placeholder="Type & Search..."/>
                        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                    </form>
                </div>
                <div class="header-extras">
                    <ul>
                        <li>
                            <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                        </li>
                        <li>
                            <div class="p-dropdown">
                                <a href="#"><i class="icon-globe"></i>
                                    <span>
                                        @if(session()->get('locale') == 'ru')
                                            RU
                                        @else
                                            EN
                                        @endif
                                    </span>
                                </a>
                                <ul class="p-dropdown-content">
                                    <li><a href="{{ route('changeLang', ['lang' => 'en']) }}">English</a></li>
                                    <li><a href="{{ route('changeLang', ['lang' => 'ru']) }}">Русский</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="{{ route('main') }}">{{__('home')}}</a></li>
                                <li class="dropdown"><a href="#">{{__('about')}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('about') }}">Why us</a></li>
                                        <li><a href="{{ route('about.blog') }}">News</a></li>
                                        <li><a href="{{ route('about.subscription') }}">Subscriptions</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('classes') }}">{{__('classes')}}</a></li>
                                <li><a href="{{ route('schedule') }}">{{__('schedules')}}</a></li>
                                <li><a href="{{ route('team') }}">{{__('team')}}</a></li>
                                <li><a href="{{ route('contacts') }}">{{__('contacts')}}</a></li>
                                @auth
                                    <li class="dropdown"><a href="#">{{__('account')}}</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('account.show') }}">{{__('account_information')}}</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('account.favourite') }}">{{__('favourite_classes')}}</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('boxes') }}">Boxes</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('nutrition-diary') }}">Nutrition Diary</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('auth.logout') }}">{{__('logout')}}</a></li>
                                @endauth
                                @guest
                                    <li><a href="{{ route('auth.login') }}">{{__('login')}}</a></li>
                                    <li><a href="{{ route('auth.register') }}">{{__('register')}}</a></li>
                                @endguest

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-lg-2 col-md-4">
                        <div class="widget  widget-contact-us"
                             style="background-image: url('{{asset('images/world-map-dark.png')}}'); background-position: 50% 20px; background-repeat: no-repeat">
                            <h4>Training Studio</h4>
                            <ul class="list-icon">
                                <li><i class="fa fa-map-marker-alt"></i> 795 Folsom Ave, Suite 600 <br>
                                    San Francisco, CA 94107
                                </li>
                                <li><i class="fa fa-phone"></i> (123) 456-7890</li>
                                <li><i class="far fa-envelope"></i> <a href="mailto:first.last@example.com">first.last@example.com</a>
                                </li>
                                <li><br>
                                    <i class="far fa-clock"></i>Monday - Sunday: <strong>08:00 - 22:00</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="widget">
                            <h4>PROJECT</h4>
                            <ul class="list">
                                <li><a href="{{ route('about.blog') }}">News</a></li>
                                <li><a href="{{route('schedule')}}">Schedule</a></li>
                                <li><a href={{route('team')}}#">Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <!-- Footer widget area 2 -->
                        <div class="widget">
                            <h4>SUPPORT</h4>
                            <ul class="list">
                                <li><a href="{{route('contacts')}}">Get Help</a></li>
                                <li><a href="#">FAQS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <form enctype="multipart/form-data" action="{{ route('contacts.feedback') }}" method="POST">
                            @csrf
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <input
                                    type="text"
                                    aria-required="true"
                                    name="name"
                                    class="form-control required name"
                                    placeholder="Enter your Name"
                                    value="{{ old('name') }}"
                                >
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa fa-envelope"></i></span>
                                </div>
                                <input
                                    type="email"
                                    aria-required="true"
                                    required
                                    name="email"
                                    class="form-control required email"
                                    placeholder="Enter your Email"
                                    value="{{ old('name') }}"
                                >
                            </div>
                            <div class="form-group mb-2">
                                <textarea
                                    type="text"
                                    name="message"
                                    rows="5"
                                    class="form-control required"
                                    placeholder="Enter your Message"
                                ></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

@if (session('success'))
    <div id="notification-modal" data-notify="container" data-animate="fadeInLeftBig"
         class="bootstrap-notify col-xs-11 col-sm-3 alert alert-success" role="alert" data-notify-position="top-right"
         style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 10000; top: 30px; right: 30px;">
        <span data-notify="title">{{ session('success') }}</span>
    </div>
@elseif(session('error'))
    <div id="notification-modal" data-notify="container" data-animate="zoomIn"
         class="bootstrap-notify col-xs-11 col-sm-3 alert alert-danger" role="alert" data-notify-position="top-right"
         style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 10000; top: 30px; right: 30px;">
        <span data-notify="icon"></span> <span data-notify="title">{{ session('error') }}</span>
    </div>
@endif

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script>
    setTimeout(function () {
        $('#notification-modal').hide('slow');
    }, 2000);
</script>
</body>
</html>



