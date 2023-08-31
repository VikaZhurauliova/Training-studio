@extends('app')
@section('content')
    <section id="page-content">
        <div class="container">
            <!-- post content -->
            <!-- Page title -->
            <div class="page-title">
                <h1>News</h1>
            </div>
            <!-- end: Page title -->
            <!-- Blog -->
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                @foreach($blogs as $blog)
                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="/storage/{{$blog->image}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <h2><a href="#">{{$blog->name}}
                                </a></h2>
                            <p>{{$blog->description}}</p>
{{--                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>--}}
                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
                @endforeach
            </div>
            <!-- end: Blog -->
        </div>
        <!-- end: post content -->
    </section>
@endsection
