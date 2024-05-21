<?php


namespace App\Http\Controllers;

use App\Models\Stellen;
use App\Models\Categories;
use App\Models\Companies;
use Illuminate\Http\Request;

class StellenController extends Controller
{
    public function index() {
        $stellen = Stellen::all();
        return view('liste', compact('stellen'));
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function edit(Stellen $stellen) {
        //
    }

    public function update(Request $request, Stellen $stellen) {
        //
    }

    public function destroy(Stellen $stellen) {
        //
    }
}