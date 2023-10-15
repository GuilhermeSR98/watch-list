<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series = Series::with(['seasons'])->get();
        return view('series.index')->with('series', $series);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $series = Series::create($request->all());
        } catch (\Throwable $th) {

            return to_route('series.index')
                ->with('error', "Não foi possível adicionar a série {$request->name}");
        }

        return to_route('series.index')
            ->with('success', "Série {$series->name} criada com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Series $series)
    {
        return view('series.edit')
            ->with('series', $series);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Series $series, Request $request)
    {
        try {
            $series->fill($request->all());
            $series->save();
        } catch (\Throwable $th) {

            return to_route('series.index')
                ->with('error', "Não foi possível editar a série {$series->name}");
        }

        return to_route('series.index')
            ->with('success', "Série {$series->name} editada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('success', "Série {$series->name} excluída com sucesso.");
    }
}
