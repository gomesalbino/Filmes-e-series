<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::query()->orderBy('nome')->get();
    
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
   
        Series::create($request->all());
            
        return to_route('series.index');
    }
    
    public function destroy(Request $request)
    {
        Series::destroy($request->serie);

       return to_route('series.index');
    }
}
