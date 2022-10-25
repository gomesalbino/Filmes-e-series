<?php

namespace App\Repositories;
use App\Models\Series;
use App\Http\Requests\SeriesFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Season;
use App\Models\Episode;


class EloquentSeriesRepository implements SeriesRepository
{
    public function add(SeriesFormRequest $request): Series
    {
            
        return DB::transaction(function () use ($request, &$serie){

            $serie = Series::create($request->all());

            $seasons = [];
            for($i = 1; $i <= $request->seasonsQty; $i++)
            {
            $seasons[] =[
                    'series_id' => $serie->id,
                    'number' => $i,
                ];
            }
                Season::insert($seasons);

                $episodes = [];
            foreach($serie->seasons as $seasons)
                {
                for( $j = 1; $j <= $request->episodesPerSeason; $j++)
                {
                    $episodes[] = [
                        'season_id' => $seasons->id,
                        'number' => $j,
                    ];
                    }
                }
                Episode::insert($episodes);
                
            return $serie;
        });    
        
    }
}

