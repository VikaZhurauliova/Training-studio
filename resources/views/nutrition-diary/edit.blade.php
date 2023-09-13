@extends('app')
@section('content')
    <section>
        <div class="container">
            <h1>Edit Entry</h1>

            <form action="{{route('nutrition-diary.update', ['id' => $entry->id])}}" method="POST">
                @csrf
                <label for="date">Date</label>
                <input type="date" name="date" id="date" value="{{ $entry->date }}">

                <label for="meal">Meal</label>
                <input type="text" name="meal" id="meal" value="{{ $entry->meal }}">

                <label for="calories">Calories</label>
                <input type="number" name="calories" id="calories" value="{{ $entry->calories }}">

                <button class="btn btn-outline btn-dark btn-sm" type="submit">Update</button>
            </form>
        </div>
    </section>
@endsection
