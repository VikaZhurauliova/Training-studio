<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="{{asset('images/line-dec.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>{{__('main_title')}}</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- Header -->
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
                <!--End: Logo-->
                <!-- Search -->
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                    <form class="search-form" action="search-results-page.html" method="get">
                        <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                    </form>
                </div>
                <!-- end: search -->
                <!--Header Extras-->
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
                <!--end: Header Extras-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <!--end: Navigation Resposnive Trigger-->
                <!--Navigation-->
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="{{ route('main') }}">{{__('home')}}</a></li>
                                <li><a href="{{ route('about') }}">{{__('about')}}</a></li>
                                <li><a href="{{ route('classes') }}">{{__('classes')}}</a></li>
                                <li><a href="{{ route('schedule') }}">{{__('schedules')}}</a></li>
                                <li><a href="{{ route('team') }}">{{__('team')}}</a></li>
                                <li><a href="{{ route('contacts') }}">{{__('contacts')}}</a></li>

                                @auth
<<<<<<< HEAD
                                    <li class="dropdown"><a href="#">{{__('account')}}</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('account.show') }}">{{__('account_information')}}</a></li>
                                            <li><a href="{{ route('account.favourite') }}">{{__('favourite_classes')}}</a></li>
                                        </ul>
                                    </li>
=======
                                    <li><a href="{{ route('account.show') }}">{{__('account')}}</a></li>
>>>>>>> parent of 179b940 (Fix)
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
                <!--end: Navigation-->
            </div>
        </div>
    </header>
    <!-- end: Header -->
    @yield('content')
    <!-- Footer -->
    <footer id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-lg-2 col-md-4">
                        <!-- Footer widget area 1 -->
                        <div class="widget  widget-contact-us"
                             style="background-image: url('{{asset('images/world-map-dark.png')}}'); background-position: 50% 20px; background-repeat: no-repeat">
                            <h4>About POLO</h4>
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
                        <!-- end: Footer widget area 1 -->
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <!-- Footer widget area 1 -->
                        <div class="widget">
                            <h4>PROJECT</h4>
                            <ul class="list">
                                <li><a href="#">Latest Release</a></li>
                                <li><a href="#">Updates</a></li>
                                <li><a href="#">License</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Links</a></li>
                            </ul>
                        </div>
                        <!-- end: Footer widget area 1 -->
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <!-- Footer widget area 2 -->
                        <div class="widget">
                            <h4>SUPPORT</h4>
                            <ul class="list">
                                <li><a href="#">Troubleshooting</a></li>
                                <li><a href="#">Common Questions</a></li>
                                <li><a href="#">Report a Bug</a></li>
                                <li><a href="#">Get Help</a></li>
                                <li><a href="#">FAQS</a></li>
                            </ul>
                        </div>
                        <!-- end: Footer widget area 2 -->
                    </div>
                    <div class="col-lg-4">
                        <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form"
                              method="post">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" aria-required="true" name="widget-contact-form-name"
                                       class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" aria-required="true" required name="widget-contact-form-email"
                                       class="form-control required email" placeholder="Enter your Email">
                            </div>
                            <div class="form-group mb-2">
                                <textarea type="text" name="widget-contact-form-message" rows="5"
                                          class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send
                                    message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->
</div>
<!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<!--Template functions-->
<script src="{{asset('js/functions.js')}}"></script>
</body>
</html>



