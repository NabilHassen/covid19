@extends('layout')

  @section('title')
    Live Coronavirus Updates - NabilDev
  @endsection

  @section('main')
      <section>
        <div class="section has-background-info has-background-dark">
            <div class="container">
                <h1 class="title has-text-white">
                  Coronavirus Updates
                  <span class="help is-italic has-text-weight-light">
                    Updated few seconds ago
                  </span>
                </h1>
                <div class="columns is-marginless">
                  <div class="column is-3 has-text-white">
                    <span class="icon is-medium">
                      <i class="fas fa-check"></i>
                    </span>
                    <span>
                      Total Cases
                    </span>
                    <div class="has-text-weight-bold is-size-3">
                      {{ number_format($overallStats->cases) }}
                    </div>
                  </div>
                  <div class="column is-3 has-text-white">
                    <span class="icon is-medium">
                      <i class="fas fa-globe"></i>
                    </span>
                    <span>
                      Affected Regions
                    </span>
                    <div class="has-text-weight-bold is-size-3">
                      {{ number_format($overallStats->affectedCountries) }}
                    </div>
                  </div>
                </div>
                  <div class="columns is-marginless">
                    <div class="column is-3 has-text-white">
                      <span class="icon is-medium">
                        <i class="fas fa-bed"></i>
                      </span>
                      <span>
                        Active Cases
                      </span>
                      <div class="has-text-weight-bold is-size-3">
                        {{ number_format($overallStats->active) }}
                        <span class="is-size-7 has-text-weight-normal">
                          ({{ number_format($activeCases, 1) }}%)
                        </span>
                      </div>
                    </div>
                    <div class="column is-3 has-text-white">
                      <span class="icon is-medium">
                        <i class="fas fa-skull-crossbones"></i>
                      </span>
                      <span>
                        Total Death
                      </span>
                      <div class="has-text-weight-bold is-size-3">
                          {{ number_format($overallStats->deaths) }}
                          <span class="is-size-7 has-text-weight-normal">
                            ({{ number_format($deathRate, 1) }}%)
                          </span>
                      </div>
                    </div>
                    <div class="column is-3 has-text-white">
                      <span class="icon is-medium">
                        <i class="fas fa-heart"></i>
                      </span>
                      <span>
                        Total Recovered
                      </span>
                      <div class="has-text-weight-bold is-size-3">
                        {{ number_format($overallStats->recovered) }}
                        <span class="is-size-7 has-text-weight-medium">
                          ({{ number_format($recoveryRate, 1) }}%)
                        </span>
                      </div>
                    </div>
                  </div>
              </div>  
          </div>
      </section>

      <br>

      <div class="container">
        <div class="columns is-marginless">
          <div class="column" style="overflow:auto;">
            <table class="table is-fullwidth is-bordered is-hoverable has-background-white-bis">
              <thead class="has-background-grey-lighter">
                <a name="my-country">&nbsp;</a>
                <th>Your Country</th>
                <th>Cases</th>
                <th class="has-text-danger">New Cases</th>
                <th>Death</th>
                <th class="has-text-danger">New Death</th>
                <th class="has-text-link">Recovered</th>
                <th class="has-text-danger">Critical</th>
                <th>Tests</th>
              </thead>
              <tbody>
                <tr class="has-background-white-ter">
                  <td>  
                    <span class="icon is-small">
                      <img src="{{ $myCountryStat->countryInfo->flag }}" width="16px"> 
                    </span>
                    <span>
                      {{ $myCountryStat->country }}
                    </span>
                  </td>
                  <td> {{ number_format($myCountryStat->cases) }} </td>

                  <td class="has-text-danger"> 
                    @if ($myCountryStat->todayCases === $myCountryStat->cases)
                      {{ number_format($myCountryStat->todayCases) }} 
                    @else
                      {{ number_format($myCountryStat->todayCases) }} 
                      <span class="is-size-7 has-text-success">
                          (+{{ number_format(($myCountryStat->todayCases / ($myCountryStat->cases - $myCountryStat->todayCases))*100, 2) }}%)
                      </span>
                    @endif
                  </td>

                  <td> {{ number_format($myCountryStat->deaths) }} </td>

                  <td class="has-text-danger"> 
                    @if ($myCountryStat->deaths === $myCountryStat->todayDeaths)
                      {{ number_format($myCountryStat->todayDeaths) }} 
                    @else
                      {{ number_format($myCountryStat->todayDeaths) }} 
                      <span class="is-size-7 has-text-success">
                          (+{{ number_format(($myCountryStat->todayDeaths / ($myCountryStat->deaths - $myCountryStat->todayDeaths))*100, 2) }}%)
                      </span>
                    @endif
                  </td>

                  <td class="has-text-link"> {{ number_format($myCountryStat->recovered) }} </td>
                  <td class="has-text-danger"> {{ number_format($myCountryStat->critical) }} </td>
                  <td> 
                    @if ($myCountryStat->tests === 0)
                        {{ "" }}
                    @else
                        {{ number_format($myCountryStat->tests) }} 
                    @endif 
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <br>

      <section class="container">
        <div class="columns is-marginless">
          <div class="column is-3">
            <div class="box has-background-success has-text-white">
              <a name="ethiopia" class="has-text-white has-text-weight-bold is-size-4">
                Ethiopia Stats
              </a>
              <hr>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-check"></i>
                </span>
                <span>
                  Confirmed Cases
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($ethStat->cases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-exclamation"></i>
                </span>
                <span>
                  New Cases
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($ethStat->todayCases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-skull-crossbones"></i>
                </span>
                <span>
                  Total Death
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($ethStat->deaths) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-heart"></i>
                </span>
                <span>
                  Total Recovered
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($ethStat->recovered) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-grey has-text-white">
              <a name="usa" class="has-text-white has-text-weight-bold is-size-4">
                Italy Stats
              </a>
              <hr>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-check"></i>
                </span>
                <span>
                  Confirmed Cases
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($itlStat->cases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-exclamation"></i>
                </span>
                <span>
                  New Cases
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($itlStat->todayCases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-skull-crossbones"></i>
                </span>
                <span>
                  Total Death
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($itlStat->deaths) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-heart"></i>
                </span>
                <span>
                  Total Recovered
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($itlStat->recovered) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-primary has-text-white">
              <a name="saudi-arabia" class="has-text-white has-text-weight-bold is-size-4">
                Saudi Arabia Stats
              </a>
              <hr>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-check"></i>
                </span>
                <span>
                  Confirmed Cases
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($ksaStat->cases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-exclamation"></i>
                </span>
                <span>
                  New Cases
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($ksaStat->todayCases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-skull-crossbones"></i>
                </span>
                <span>
                  Total Death
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($ksaStat->deaths) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-heart"></i>
                </span>
                <span>
                  Total Recovered
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($ksaStat->recovered) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-danger has-text-white">
              <a name="germany" class="has-text-white has-text-weight-bold is-size-4">
                Germany Stats
              </a>
              <hr>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-check"></i>
                </span>
                <span>
                  Confirmed Cases
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($gerStat->cases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-exclamation"></i>
                </span>
                <span>
                  New Cases
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($gerStat->todayCases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-skull-crossbones"></i>
                </span>
                <span>
                  Total Death
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($gerStat->deaths) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon is-medium">
                  <i class="fas fa-heart"></i>
                </span>
                <span>
                  Total Recovered
                </span>
                <div class="has-text-weight-medium is-size-3 has-text-centered">
                  {{ number_format($gerStat->recovered) }}
                </div>
              </div>
            </div>
          </div>
        </div>

        <br>

        <div class="container has-text-centered">
          <span class="has-text-weight-normal has-text-grey is-italic">
            Powered by 
          </span>
          <br>
          <a href="https://onricatech.com" target="_blank">
            <img src="/img/wide_logo.png" width="130px" height="70px">
          </a>
        </div>
        
        <div class="columns is-marginless">
          <div class="column" style="height:400px;overflow:auto;">
            <table class="table is-fullwidth is-bordered is-hoverable has-background-white-bis">
              <thead class="has-background-grey-lighter">
                <th>Country</th>
                <th>Cases</th>
                <th class="has-text-danger">New Cases</th>
                <th>Death</th>
                <th class="has-text-danger">New Death</th>
                <th class="has-text-link">Recovered</th>
                <th class="has-text-danger">Critical</th>
                <th>Tests</th>
              </thead>
              <tbody>
                @foreach ($countryStats as $country)
                    <tr>
                      <td>  
                        <span class="icon is-small">
                          <img src="{{ $country->countryInfo->flag }}" width="16px"> 
                        </span>
                        <span>
                          {{ $country->country }}
                        </span>
                      </td>
                      <td> {{ number_format($country->cases) }} </td>

                      <td class="has-text-danger"> 
                        @if ($country->todayCases === $country->cases)
                          {{ number_format($country->todayCases) }} 
                        @else
                          {{ number_format($country->todayCases) }} 
                          <span class="is-size-7 has-text-success">
                              (+{{ number_format(($country->todayCases / ($country->cases - $country->todayCases))*100, 2) }}%)
                          </span>
                        @endif
                      </td>

                      <td> {{ number_format($country->deaths) }} </td>

                      <td class="has-text-danger"> 
                        @if ($country->deaths === $country->todayDeaths)
                          {{ number_format($country->todayDeaths) }} 
                        @else
                          {{ number_format($country->todayDeaths) }} 
                          <span class="is-size-7 has-text-success">
                              (+{{ number_format(($country->todayDeaths / ($country->deaths - $country->todayDeaths))*100, 2) }}%)
                          </span>
                        @endif
                      </td>

                      <td class="has-text-link"> {{ number_format($country->recovered) }} </td>
                      <td class="has-text-danger"> {{ number_format($country->critical) }} </td>
                      <td>
                        @if ($country->tests === 0)
                            {{ "" }}
                        @else
                            {{ number_format($country->tests) }} 
                        @endif 
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <br><br>
  @endsection