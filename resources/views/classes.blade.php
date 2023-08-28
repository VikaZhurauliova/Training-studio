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
                        <a href="{{ route('classes.training', ['class' => $class->id]) }}">Read more</a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
