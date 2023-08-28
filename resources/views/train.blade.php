@extends('app')
@section('content')
    <section id="page-content" class="sidebar-both">
        <div class="container">
            <div class="row">
                <!-- Sidebar-->
                <div class="sidebar col-lg-3">
                    <!--widget newsletter-->
                    <div class="widget clearfix widget-archive">
                        <h4 class="widget-title">Our team</h4>
                        @foreach($teams as $trainer)
                        <ul class="list list-lines">
                            <li><a href="{{ route('team') }}">{{$trainer->name}}</a>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <!-- end: Sidebar-->
                <!-- Content-->
                <div class="content col-lg-6">
                    @foreach($classes as $class)
                    <div class="product">
                        <div class="row m-b-40">
                            <div class="col-lg-12">
                                <div class="product-image">
                                    <img src="{{$class->image}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product-description">
                                    <div class="product-category">Women</div>
                                    <div class="product-title">
                                        <h3><a href="#">{{$class->name}}</a></h3>
                                    </div>
                                    <div class="product-price">
                                        <a href="#"><i
                                                class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="product-rate">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-reviews"><a href="#">3 customer reviews</a>
                                    </div>
                                    <div class="seperator m-b-10"></div>
                                    <p>{{$class->description}}</p>
                                    <div class="product-meta">
                                        <p>Tags: <a href="#" rel="tag">Clothing</a>, <a rel="tag" href="#">T-shirts</a>
                                        </p>
                                    </div>
                                    <div class="seperator m-t-20 m-b-10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- end: Content-->
                <!-- Sidebar-->
                <div class="sidebar col-lg-3">
                    <!--Tabs with Posts-->
                    <div class="widget ">
                        <h4 class="widget-title">Recent Posts</h4>
                        @foreach($recentPost as $post)
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img alt="" src="{{$post->image}}">
                                <div class="post-thumbnail-content">
                                    <a href="{{ route('about.blog') }}">{{$post->name}}</a>
                                    <span class="post-category"><i class="fa fa-tag"></i> {{$post->attention}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--End: Tabs with Posts-->
                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
@endsection
