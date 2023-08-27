@extends('app')
@section('content')
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">{{__('account')}}</span>
                            <p class="text-muted">{{__('account_change_information')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('account.update') }}" method="POST">
                                @csrf
                                <div class="tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tabProfile" role="tab" aria-controls="home" aria-selected="true">{{__('account')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabBilling" role="tab" aria-controls="contact" aria-selected="false">Billing Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabPassword" role="tab" aria-controls="profile" aria-selected="false">Password</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tabProfile" role="tabpanel" aria-labelledby="tab-profile">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="firstName">First Name</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="first_name"
                                                        placeholder="Enter your Name"
                                                        required
                                                        value="{{ $user->information?->first_name }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="surname">Last Name</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="last_name"
                                                        placeholder="Enter your Surname"
                                                        required
                                                        value="{{ $user->information?->last_name }}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="sex">Gender</label>
                                                    <select class="form-control" name="sex" required>
                                                        <option value="">Select your gender</option>
                                                        <option>Female</option>
                                                        <option>Male</option>
                                                        <option>Rather not say</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="telephone">Telephone</label>
                                                    <input
                                                        class="form-control"
                                                        type="tel"
                                                        name="phone"
                                                        placeholder="Enter your Telephone number"
                                                        required
                                                        value="{{ $user->information?->phone }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabBilling" role="tabpanel" aria-labelledby="tab-billing">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="address">Country</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="country"
                                                        placeholder="Enter your Street Address"
                                                        required
                                                        value="{{ $user->information?->country }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address2">City</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="city"
                                                        placeholder="Enter your Apartment, studio, or floor"
                                                        required
                                                        value="{{ $user->information?->city }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($errors->all() as $key => $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{$error}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                @endforeach
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-sm">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
