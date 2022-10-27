<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;
use PDF;
class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
        
    }
    public function index(Request $request)
    {
        $search = request('search');

        if($search){
            $series = Series::where([
                ['nome', 'like', '%'.$search.'%']
            ])->paginate(4);
        }else{
         $series = Series::paginate(4);
        }

        $mensagemSucesso = session('mensagem.sucesso');


        return view('series.index')
        ->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
       $serie = $this->repository->add($request);

        return to_route('series.index')
        ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionado com sucesso!");
    }

    public function destroy(Series $series)
    {
        
        $series->delete();
        return to_route('series.index')
        ->with('mensagem.sucesso', "Série '{$series->nome}'removida com sucesso!");
    }
    public function edit(Series $series)
    {
        
        return view('series.edit')->with('series', $series);
    }
    public function update(Series $series, SeriesFormRequest $request)
    {
        
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
        ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso.");
    }

    public function imprimir()
    {
       $series = Series::get();
        $pdf = PDF::loadView('pdf.imprimir', [
            'series' => $series,
        ]);
        // return $pdf->stream();
        return $pdf->download('imprimir.pdf');

    }
}
