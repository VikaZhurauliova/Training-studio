@extends('app')
@section('content')
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Boxes</h1> <span>You can reserve a locker</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('main') }}">Home</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="no-padding equalize d-flex boxes " data-equalize-item=".text-box">
        @foreach($boxes as $box)
        <div class="col-lg-2 boxes-wrap"
             @if($box->is_added)
                style="background-color: #2F2F2F;"
            @else
                style="background-color: #39B24B;"
        @endif
        >
            <div class="text-box text-box-wrap ">
                <a href="#"> <i class="fas fa-chart-pie"></i>
                    <h3>{{$box->number}}</h3>
                    @if($box->is_added)
                        <h4>Please, choose another one</h4>
                        @if($box->user_id == auth()->id())
                            <form method="POST" action="{{ route('boxes.delete') }}">
                                @csrf
                                <input type="hidden" name="box_id" value="{{ $box->id }}">
                                <button class="btn btn-danger btn-xs" type="submit">Cancel</button>
                            </form>
                        @else
                            <button class="btn btn-dark btn-xs btn-displayed"
                                    disabled type="submit">Booked
                            </button>
                        @endif
                    @else
                        <h4>You can book this box</h4>
                        <form method="POST" action="{{ route('boxes.book', $box->id) }}">
                            @csrf
                            <button class="btn btn-success btn-xs" type="submit">Book</button>
                        </form>
                    @endif

                </a>
            </div>
        </div>
        @endforeach

    </section>
@endsection
