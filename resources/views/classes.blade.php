@extends('app')
@section('content')
    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>OUR CLASSES
                </h2>
                <p>Don't like the gym where you have to train alone? Do you want to work in a team that will motivate and help achieve sports results?
                </p>
            </div>

            <div class="row">
                @foreach($classes as $class)
                <div class="col-lg-4">
                    <div class="call-to-action call-to-action-border">
                        <h4>{{$class->name}}</h4>
                        <div class="div wrap-classes-img">
                            <a href="{{ route('classes.training', ['classes' => $class->id]) }}">
                            <img src="{{$class->image}}" class="classes-img">
                            </a>
                        </div>
                        <a href="{{ route('classes.training', ['classes' => $class->id]) }}">
                        <p class="classes-m">{{$class->description}}</p>
                        </a>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('classes.training', ['classes' => $class->id]) }}">Read more</a>
                            <span class="product-wishlist">
                                @auth
                                    <form action="{{ route('account.favourite.add', ['classes' => $class->id]) }}"
                                          method="POST">
                                    @csrf
                                    <a href="#" onclick="this.parentNode.submit()">
                                        <i class="fa fa-heart"></i></a>
                                    </form>
                                @endauth
                                @guest
                                    <a  onclick="this.parentNode.submit()" data-target="#modal-2"
                                       data-toggle="modal" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                @endguest
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Favorites are only available to authorized users. Please sign in.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="float-left">
                        <button data-dismiss="modal" class="btn btn-b" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
