@extends('app')
@section('content')
    <section id="page-content">
        <div class="container">
            <div class="page-title">
                <h1>News</h1>
            </div>
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                @foreach($blogs as $blog)
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="/storage/{{$blog->image}}">
                                </a>
                                <span class="post-meta-category"><a href="">{{$blog->attention}}</a></span>
                            </div>
                            <div class="post-item-description">
                                <h2><a href="#">{{$blog->name}}
                                    </a></h2>
                                <p>{{$blog->description}}</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
