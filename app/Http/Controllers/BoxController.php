<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class BoxController extends Controller
{

    public function index()
    {
        $boxes = Box::all();
        return view('boxes', compact('boxes'));
    }

    public function book($id)
    {
        $userId = auth()->id();
        $box = Box::findOrFail($id);

        $existingBox= Box::where('user_id', $userId)->first();
        if ($existingBox) {
            return redirect('/boxes')->with('error', 'You have already booked a box.');
        }

        $box->is_added = true;
        $box->user_id = $userId;
        $box->save();

        return redirect('/boxes')->with('success', 'Box booked successfully.');
    }

    public function delete(Request $request)
    {
        $userId = auth()->id();
        $boxId = $request->input('box_id');

        $box = Box::where('id', $boxId)->where('user_id', $userId)->first();

        if ($box) {
            $box->is_added = false;
            $box->user_id = null;
            $box->save();

            return redirect('/boxes')->with('success', 'Box reservation canceled.');
        }
    }
}
