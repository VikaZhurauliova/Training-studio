@extends('app')
@section('content')
    <section id="page-content">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>EXPERT TRAINERS</h2>
                <span>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</span>
            </div>
            <div class="row team-members m-b-40 justify-center">
                @foreach($teams as $team)
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{$team->image}}">
                            </div>
                            <div class="team-desc">
                                <h3>{{$team->name}}</h3>
                                <span>{{$team->title}}</span>
                                <p>{{$team->description}}</p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> <!-- end: Content -->
@endsection
