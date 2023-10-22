<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;
use OpenAI;

class SinopseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Series $series)
    {
        $client = OpenAI::client(config('app.openai_api_key'));
        $result = $client->completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 2000,
            'prompt' => sprintf('Crie uma Sinopse sobre a série: %s', $series->name),
        ]);

        $content = trim($result['choices'][0]['text']);

        return view('sinopse.index')
            ->with('content', $content)
            ->with('series', $series);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
