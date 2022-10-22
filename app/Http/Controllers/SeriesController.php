<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'um' => 'UM',
            'dois' => 'DOIS',
            'tres' => 'TRES',
            'quatro' => 'QUATRO',

        ];
        return view('series.index')->with('series', $series);
    }

    public function store(Request $request)
    {
        return view('series.create');
    }
}
