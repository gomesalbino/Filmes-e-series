<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::query()->orderBy('nome')->get();

        $mensagemSucesso = session('mensagem.sucesso');

    
        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
   
        Series::create($request->all());
            
        return to_route('series.index')->with('mensagem.sucesso', "Série  adicionado com sucesso!");
    }
    
    public function destroy(Request $request)
    {
        Series::destroy($request->serie);
        
       return to_route('series.index')->with('mensagem.sucesso', "Série removida com sucesso!");;
    }
}
