@extends('app')
@section('content')
    <section>
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <h1>Nutrition Diary</h1>
                    <form action="{{ route('nutrition-diary.create') }}" method="GET">
                        @csrf
                        <button class="btn btn-outline btn-dark btn-sm" type="submit">Create New Entry</button>
                    </form>
                    <table>
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Meal</th>
                            <th>Calories</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($entries as $entry)
                            <tr>
                                <td>{{ $entry->date }}</td>
                                <td>{{ $entry->meal }}</td>
                                <td>{{ $entry->calories }}</td>
                                <td>
                                    <form action="{{route('nutrition-diary.edit', ['id' => $entry->id])}}" method="GET">
                                        @csrf
                                        <button class="btn btn-success btn-xs" type="submit">Edit</button>
                                    </form>
                                    <form action="{{route('nutrition-diary.delete', ['id' => $entry->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs" type="submit">Delete</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <h1>Daily Calories</h1>
                    @foreach ($caloriesPerDay as $date => $totalCalories)
                        {{ $date }} - {{ $totalCalories }} Calories<br>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
