<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Movie;

class MovieController extends Controller
{

    public function index() {

        return Movie::all();
    }

    public function show($id) {
        return Movie::findOrFail($id);
    }

    public function store(Request $request) {

        $movie = Movie::create($request->all());
        return response()->json($movie, 201); // 201 is the code of php that means, everything is okey!
    }

    public function update(Request $request, $id) {

        $movie = Movie::findOrFail($id); // if not found, is going to retrieve about php considers.
        $movie->update($request->all()); // update the information with the request all

        return response()->json($movie, 200);
    }

    public function delete($id) {

        $movie = Movie::findOrFail($id);
        $movie->delete();

        return response()->json(null, 204); // we return this because it should be deleted properly.
    }
}
