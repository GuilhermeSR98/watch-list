<?php

namespace App\Repository;

use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesRepository
{
    public function createSerie(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $series = Series::create($request->all());

                $seasons = [];

                for ($i = 1; $i <= $request->seasons; $i++) {
                    $seasons[] = [
                        'series_id' => $series->id,
                        'number' => $i,
                    ];
                }

                Season::insert($seasons);

                $episodes = [];
                foreach ($series->seasons as $season) {
                    for ($j = 1; $j <= $request->episodes; $j++) {
                        $episodes[] = [
                            'season_id' => $season->id,
                            'number' => $j,
                        ];
                    }
                }
                Episode::insert($episodes);
            });
        } catch (\Throwable $th) {

            return to_route('series.index')
                ->with('error', "Não foi possível adicionar a série {$request->name}");
        }
    }
}
