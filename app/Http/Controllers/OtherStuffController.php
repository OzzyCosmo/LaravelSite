<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Legion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OtherStuffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $apiKey = "d3710fa280eba08edb2744b7b049b9cc";
        $cityId = "2657832";
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

        $response = Http::get($googleApiUrl);

        $data = $response->body();
        
        $data = json_decode($response);

        $date = Carbon::now();

        $legions = Legion::all();

        $limit = "1";
        $X_Api_Key = 'IFv/y6DAfE4fPj/4El73Ww==mNpuKKu3yPhVOKkD';
        $ApiURL = "https://api.api-ninjas.com/v1/jokes?limit={$limit}" . $X_Api_Key;
        $jokesApiResponse = Http::get($ApiURL);

        // $jokesApiResponse = Http::get($ApiURL, [
        //     'headers' => [
        //         'X-Api-Key' => 'IFv/y6DAfE4fPj/4El73Ww==mNpuKKu3yPhVOKkD',
        //     ]
        // ]);
        // $jokesApiResponse = $jokesApiResponse->body();
        // $jokesApiResponse = json_decode($jokesApiResponse);

        return view('other-stuff', [
            'data' => $data,
            'date' => $date,
            'randomJoke' => $jokesApiResponse,
            'legions' => $legions
        ]);
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
