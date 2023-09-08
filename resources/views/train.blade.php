@extends('app')
@section('content')
    <section id="page-content" class="sidebar-both">
        <div class="container">
            <div class="row">
                <div class="sidebar col-lg-3">
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
                <div class="content col-lg-6">
                    <div class="product">
                        <div class="row m-b-40">
                            <div class="col-lg-12">
                                <div class="product-image">
                                    <img src="{{$classes->image}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product-description">
                                    <div class="product-title">
                                        <h3><a href="#">{{$classes->name}}</a></h3>
                                    </div>
                                    <div class="product-price">
                                        @auth
                                            <form
                                                action="{{ route('account.favourite.add', ['classes' => $classes->id]) }}"
                                                method="POST">
                                                @csrf
                                                <a href="#" onclick="this.parentNode.submit()">
                                                    <i class="fa fa-heart"></i></a>
                                            </form>
                                        @endauth
                                        @guest
                                            <a onclick="this.parentNode.submit()" data-target="#modal-2"
                                               data-toggle="modal" href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        @endguest
                                    </div>
                                    <div class="product-rate">
                                        @for($i = 0; $i < $classes->averageReviews(); $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                    </div>
                                    <div class="product-reviews"><a href="#">{{ count($classes->reviews) }} customer
                                            reviews</a>
                                    </div>
                                    <div class="seperator m-b-10"></div>
                                    <p>{{$classes->description}}</p>
                                    <div class="seperator m-t-20 m-b-10">
                                        <p>{{$classes->long_description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments" id="comments">
                        <div class="comment-list">
                            <!-- Comment -->
                            <div class="comment" id="comment-1">
                                @foreach($classes->reviews as $review)
                                    <div class="image">
                                        <img alt="" src="{{asset('images/user-photo')}}" class="avatar">
                                    </div>
                                    <div class="text">
                                        <div class="product-rate">
                                            @for ($i = 0; $i < $review->star_count; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                        <h5 class="name">{{ $review->user->name }}</h5>
                                        <span
                                            class="comment_date">Posted at {{ Carbon\Carbon::parse($review->created_at)->format('d M Y H:i') }}</span>
                                        <div class="text_holder">
                                            <p>{{ $review->text }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-lg-3">
                    <div class="widget ">
                        <h4 class="widget-title">Recent Posts</h4>
                        @foreach($recentPost as $post)
                            <div class="post-thumbnail-list">
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="/storage/{{$post->image}}">
                                    <div class="post-thumbnail-content">
                                        <a href="{{ route('about.blog') }}">{{$post->name}}</a>
                                        <span class="post-category"><i
                                                class="fa fa-tag"></i> {{$post->attention}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
