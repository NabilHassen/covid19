<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show()
    {
        $overallStats = $this->overallStats();

        $recoveryRate = ($overallStats->recovered/$overallStats->cases)*100;

        $deathRate = ($overallStats->deaths/$overallStats->cases)*100;

        $countryStats = $this->statsByCountry();

        $activeCases = (($overallStats->cases - $overallStats->deaths - $overallStats->recovered)/$overallStats->cases)*100;

        $ethStat = $this->ethStat();

        $usaStat = $this->usaStat();

        $gerStat = $this->gerStat();

        $ksaStat = $this->ksaStat();

        return view('covid', compact('overallStats', 'recoveryRate', 'deathRate', 'activeCases', 'countryStats', 'ethStat', 'usaStat', 'gerStat', 'ksaStat'));
    }

    public function overallStats()
    {
        $response = Http::get("https://corona.lmao.ninja/all");

        return json_decode($response);
    }

    public function statsByCountry()
    {
        $response = Http::get("https://corona.lmao.ninja/countries");

        return json_decode($response);
    }

    public function ethStat()
    {
        $response = Http::get("https://corona.lmao.ninja/countries/ethiopia");

        return json_decode($response);
    }

    public function usaStat()
    {
        $response = Http::get("https://corona.lmao.ninja/countries/usa");

        return json_decode($response);
    }

    public function ksaStat()
    {
        $response = Http::get("https://corona.lmao.ninja/countries/saudi");

        return json_decode($response);
    }

    public function gerStat()
    {
        $response = Http::get("https://corona.lmao.ninja/countries/germany");

        return json_decode($response);
    }

    public function showAbout()
    {
        return view('about');
    }
}
