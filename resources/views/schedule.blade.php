@extends('app')
@section('content')
    <section id="page-title" data-bg-parallax="{{asset('images/schedule-bg.jpg')}}">
        <div class="container">
            <div class="page-title">
                <h1>{{__('schedule_title')}}</h1>
                <span>{{__('schedule_pre_title')}}</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('main') }}">{{__('home')}}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($trainings as $training)
                            <tr>
                                <td><strong>{{$training->name}}</strong></td>
                                @foreach ($training->slots as $slot)
                                    <td>
                                    Time:{{ $slot->time }}<br>
                                    Trainer:{{ $slot->team?->name }}<br>
                                    @if ($slot->remaining_spots > 0)
                                        Remaining Spots: {{ $slot->remaining_spots }}<br>
                                        <form action="/schedule/book" method="POST">
                                            @csrf
                                            <input type="hidden" name="training_id" value="{{ $training->id }}">
                                            <input type="hidden" name="slot_id" value="{{ $slot->id }}">
                                            <button  class="btn btn-dark btn-xs" type="submit">Book</button>
                                        </form>
                                    @else
                                        <strong>No spots available</strong>
                                    @endif
                                </td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="content col-lg-9">
                <h2>Your Bookings</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Training</th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach ($bookings as $booking)
                    <tbody>
                    <tr class="table-success">
                        <td>{{ $booking->slot->day }}</td>
                        <td>{{ $booking->slot->time }}</td>
                        <td>{{ $booking->classes->name }}</td>
                        <td>
                            <form action="/schedule/delete" method="POST">
                                @csrf
                                <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                                <button type="submit" class="btn btn-dark btn-xs">Delete</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

