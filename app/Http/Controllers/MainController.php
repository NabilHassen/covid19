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

    public function show()
    {
        $overallStats = $this->overallStats();

        $recoveryRate = ($overallStats->recovered / $overallStats->cases) * 100;

        $deathRate = ($overallStats->deaths / $overallStats->cases) * 100;

        $countryStats = $this->statsByCountry();

        $activeCases = (($overallStats->cases - $overallStats->deaths - $overallStats->recovered) / $overallStats->cases) * 100;

        $ethStat = $this->ethStat();

        $itlStat = $this->itlStat();

        $gerStat = $this->gerStat();

        $ksaStat = $this->ksaStat();

        $myCountryStat = $this->getMyCountryStat();

        return view('covid', compact('overallStats', 'recoveryRate', 'deathRate', 'activeCases', 'countryStats', 'ethStat', 'itlStat', 'gerStat', 'ksaStat', 'myCountryStat'));
    }

    public function overallStats()
    {
        $response = Http::get("https://corona.lmao.ninja/all");

        return json_decode($response);
    }

    public function statsByCountry()
    {
        $response = Http::get("https://corona.lmao.ninja/countries?sort=cases");

        return json_decode($response);
    }

    public function ethStat()
    {
        $response = Http::get("https://corona.lmao.ninja/countries/ethiopia");

        return json_decode($response);
    }

    public function itlStat()
    {
        $response = Http::get("https://corona.lmao.ninja/countries/italy");

        return json_decode($response);
    }

    public function ksaStat()
    {
        $response = Http::get("https://corona.lmao.ninja/countries/sau");

        return json_decode($response);
    }

    public function gerStat()
    {
        $response = Http::get("https://corona.lmao.ninja/countries/germany");

        return json_decode($response);
    }

    public function getUsaStateStats()
    {
        $stateStats = json_decode(Http::get("https://corona.lmao.ninja/states"));

        $usaStats = json_decode(Http::get('https://corona.lmao.ninja/countries/usa'));

        $recoveryRate = ($usaStats->recovered / $usaStats->cases) * 100;

        $deathRate = ($usaStats->deaths / $usaStats->cases) * 100;

        $activeCases = (($usaStats->cases - $usaStats->deaths - $usaStats->recovered) / $usaStats->cases) * 100;

        return view('usa-state', compact('stateStats', 'usaStats', 'recoveryRate', 'deathRate', 'activeCases'));
    }

    public function getMyCountryStat()
    {
        // $country = json_decode(Http::get("https://api.ip2country.info/ip?" . $_SERVER['REMOTE_ADDR'] ));

        $country = json_decode(Http::get("https://api.ip2country.info/ip?196.188.240.205"));

        $response = Http::get("https://corona.lmao.ninja/countries/" . $country->countryCode);

        return json_decode($response);
    }

    public function showAbout()
    {
        return view('about');
    }
}
