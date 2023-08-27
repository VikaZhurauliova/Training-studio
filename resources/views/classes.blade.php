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
            <div class="tabs tabs-vertical">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav flex-column nav-tabs" id="myTab4" role="tablist" aria-orientation="vertical">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Fitness Class
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Muscle Training</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Body Building</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab" aria-controls="fourth" aria-selected="false">Yoga Training Class</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="fifth-tab" data-toggle="tab" href="#fifth" role="tab" aria-controls="fifth" aria-selected="false">Advanced Training	</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                        </div>
                        <div class="tab-content" id="myTabContent4">
                            @foreach($classes as $class)
                            <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab">
                                <img src="{{asset('/images/training-image-02.jpg')}}">
                                <p class="classes-m">
                                    Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.
                                </p>
                                <button type="button" class="btn btn-outline btn-dark">Read more</button>
                            </div>
                            <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab">
                                <img src="{{asset('/images/training-image-01.jpg')}}">
                                <p class="classes-m">
                                    Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                </p>
                                <button type="button" class="btn btn-outline btn-dark">Read more</button>
                            </div>
                            <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab">
                                <img src="{{asset('/images/training-image-03.jpg')}}">
                                <p class="classes-m">
                                    Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.
                                </p>
                                <button type="button" class="btn btn-outline btn-dark">Read more</button>
                            </div>
                            <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                                <img src="{{asset('/images/training-image-04.jpg')}}">
                                <p class="classes-m">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.
                                </p>
                                <button type="button" class="btn btn-outline btn-dark">Read more</button>
                            </div>
                            <div class="tab-pane fade" id="fifth" role="tabpanel" aria-labelledby="fifth-tab">
                                <img src="{{asset('/images/training-image-01.jpg')}}">
                                <p class="classes-m">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.
                                </p>
                                <a href="{{ route('classes.training', ['classes' => $class->id]) }}">Read more</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
