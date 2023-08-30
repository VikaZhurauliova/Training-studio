@extends('app')
@section('content')
    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>OUR CLASSES
                </h2>
                <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.
                </p>
            </div>

            <div class="row">
                @foreach($classes as $class)
                <div class="col-lg-4">
                    <!--call-to-action border -->

                    <div class="call-to-action call-to-action-border">
                        <div class="div wrap-classes-img">
                            <img src="{{$class->image}}" class="classes-img">
                        </div>
                        <p class="classes-m">{{$class->description}}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('classes.training', ['classes' => $class->id]) }}">Read more</a>
                            <span class="product-wishlist">
                                <form action="{{ route('account.favourite.add', ['classes' => $class->id]) }}"
                                      method="POST">
                                    @csrf
                                    <a href="#" onclick="this.parentNode.submit()"><i
                                            class="fa fa-heart"></i></a>
                                </form>
                        </span>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
