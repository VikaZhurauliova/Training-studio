@extends('app')
@section('content')
    <section id="content">
        <div class="container">
            <!-- Pricing Table -->
            <div class="heading-text heading-line text-center pb-5">
                <h4>Subscription</h4>
            </div>
            <div class="row pricing-table">
                @foreach($subscriptions as $subscription)
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>{{$subscription->name}}</h4>
                            <div class="plan-price"><sup>$</sup>{{$subscription->price}}<span>/mo</span> </div>
                        </div>
                        <div class="plan-list">
                            <ul>
                                <li>{{$subscription->description}}</li>
                            </ul>
                            <div class="plan-button">
                                <a href="{{ route('payment.redirect', ['subscription' => $subscription->id]) }}" class="btn btn-light">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
