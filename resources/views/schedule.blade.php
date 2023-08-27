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
                        <tr>
                            <td>Fitness Class</td>
                            <td>10:00AM - 11:30AM</td>
                            <td>2:00PM - 3:30PM</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Muscle Training</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>10:00AM - 11:30AM	</td>
                        </tr>
                        <tr>
                            <td>Body Building</td>
                            <td>2:00PM - 3:30PM	</td>
                            <td>10:00AM - 11:30AM	</td>
                            <td></td>
                            <td>2:00PM - 3:30PM</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Yoga Training Class</td>
                            <td></td>
                            <td></td>
                            <td>10:00AM - 11:30AM</td>
                            <td></td>
                            <td>2:00PM - 3:30PM	</td>
                        </tr>
                        <tr>
                            <td>Advanced Training</td>
                            <td></td>
                            <td>2:00PM - 3:30PM</td>
                            <td>2:00PM - 3:30PM</td>
                            <td>10:00AM - 11:30AM	</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
