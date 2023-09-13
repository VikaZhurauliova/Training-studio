@extends('app')
@section('content')
    <section>
        <div class="container">
            <h1>Create New Entry</h1>
            <form action="{{route('nutrition-diary.store')}}" method="POST">
                @csrf

                <label for="date">Date</label>
                <input type="date" name="date" id="date">

                <label for="meal">Meal</label>
                <input type="text" name="meal" id="meal">

                <label for="calories">Calories</label>
                <input type="number" name="calories" id="calories">

                <button class="btn btn-outline btn-dark btn-sm" type="submit">Save</button>
            </form>
        </div>
    </section>
@endsection
