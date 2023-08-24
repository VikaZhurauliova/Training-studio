@extends('app')
@section('content')
    <section id="page-content">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>EXPERT TRAINERS</h2>
                <span>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</span>
            </div>
            <div class="row team-members m-b-40 justify-center">
                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{asset('images/first-trainer.jpg')}}">
                        </div>
                        <div class="team-desc">
                            <h3>Bret D. Bowers</h3>
                            <span>Strength Trainer</span>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
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
                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{asset('images/second-trainer.jpg')}}">
                        </div>
                        <div class="team-desc">
                            <h3>Hector T. Daigl</h3>
                            <span>
                                Muscle Trainer
                            </span>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.
                            </p>
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
                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{asset('images/third-trainer.jpg')}}">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Paul D. Newman
                            </h3>
                            <span>
                                Power Trainer
                            </span>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.
                            </p>
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
            </div>
        </div>
    </section> <!-- end: Content -->
@endsection
