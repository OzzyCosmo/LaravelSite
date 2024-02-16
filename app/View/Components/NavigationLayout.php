<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class NavigationLayout extends Component
{
    public $date;

    public $weather;
    public $main;
    public $wind;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $apiKey = "d3710fa280eba08edb2744b7b049b9cc";
        $cityId = "2657832";
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

        $response = Http::get($googleApiUrl)->body();
        
        $data = json_decode($response);

        $this->weather = $data->weather;
        $this->main = $data->main;
        $this->wind = $data->wind;
        $this->date = Carbon::now();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.navigation');
    }
}
