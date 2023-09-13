<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class NutritionDiaryController extends Controller
{
    public function index()
    {
        $entries = Entry::select('date')->distinct()->get();

        $caloriesPerDay = [];
        foreach ($entries as $entry) {
            $date = $entry->date;
            $totalCalories = Entry::getTotalCalories($date);
            $caloriesPerDay[$date] = $totalCalories;
        }

        $entries = Entry::all();
        return view('nutrition-diary.index', compact('entries', 'caloriesPerDay'));
    }

    public function create()
    {
        return view('nutrition-diary.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'date' => 'required',
            'meal' => 'required',
            'calories' => 'required|numeric',
        ]);

        Entry::create($request->all());
        return redirect('/nutrition-diary')->with('success', 'Entry created successfully.');
    }

    public function edit($id)
    {
        $entry = Entry::find($id);
        return view('nutrition-diary.edit', compact('entry'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required',
            'meal' => 'required',
            'calories' => 'required|numeric',
        ]);

        $entry = Entry::find($id);
        $entry->update($request->all());

        return redirect('/nutrition-diary')->with('success', 'Entry updated successfully.');
    }

    public function delete($id)
    {
        $entry = Entry::find($id);
        $entry->delete();

        return redirect('/nutrition-diary')->with('success', 'Entry deleted successfully.');
    }


}
