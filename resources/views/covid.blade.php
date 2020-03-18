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
                      <i class="fas fa-skull-crossbones"></i>
                    </span>
                    <span>
                      Total Death
                    </span>
                    <div class="has-text-weight-bold is-size-3">
                        {{ number_format($overallStats->deaths) }}
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
                      </div>
                    </div>
                  </div>
                  <div class="columns is-marginless">
                    <div class="column is-3 has-text-white">
                      Recovery Rate
                      <div class="has-text-weight-bold is-size-3">
                        {{ number_format($recoveryRate) }}%
                      </div>
                    </div>
                    <div class="column is-3 has-text-white">
                      Death Rate
                      <div class="has-text-weight-bold is-size-3">
                        {{ number_format($deathRate) }}%
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>

      <br>

      <section class="container">
        <div class="columns is-marginless">
          <div class="column is-3">
            <div class="box has-background-success has-text-white">
              <div class="has-text-white has-text-weight-bold is-size-4">
                Ethiopian Stats
              </div>
              <hr>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-check"></i>
                </span>
                <span>
                  Confirmed Cases
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($ethStat->cases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-exclamation"></i>
                </span>
                <span>
                  New Cases
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($ethStat->todayCases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-skull-crossbones"></i>
                </span>
                <span>
                  Total Death
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($ethStat->deaths) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-grey has-text-white">
              <div class="has-text-white has-text-weight-bold is-size-4">
                USA Stats
              </div>
              <hr>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-check"></i>
                </span>
                <span>
                  Confirmed Cases
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($usaStat->cases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-exclamation"></i>
                </span>
                <span>
                  New Cases
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($usaStat->todayCases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-skull-crossbones"></i>
                </span>
                <span>
                  Total Death
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($usaStat->deaths) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-primary has-text-white">
              <div class="has-text-white has-text-weight-bold is-size-4">
                Saudi Arabia Stats
              </div>
              <hr>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-check"></i>
                </span>
                <span>
                  Confirmed Cases
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($ksaStat->cases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-exclamation"></i>
                </span>
                <span>
                  New Cases
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($ksaStat->todayCases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-skull-crossbones"></i>
                </span>
                <span>
                  Total Death
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($ksaStat->deaths) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-danger has-text-white">
              <div class="has-text-white has-text-weight-bold is-size-4">
                China Stats
              </div>
              <hr>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-check"></i>
                </span>
                <span>
                  Confirmed Cases
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($chnStat->cases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-exclamation"></i>
                </span>
                <span>
                  New Cases
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($chnStat->todayCases) }}
                </div>
              </div>
              <div class="is-size-5">
                <span class="icon">
                  <i class="fas fa-skull-crossbones"></i>
                </span>
                <span>
                  Total Death
                </span>
                <div class="has-text-weight-medium is-size-3">
                  {{ number_format($chnStat->deaths) }}
                </div>
              </div>
            </div>
          </div>
        </div>

        <br>

        <div class="columns is-marginless">
          <div class="column" style="height:400px;overflow:auto;">
            <table class="table is-fullwidth is-bordered is-hoverable has-background-white-bis">
              <thead>
                <th>Country</th>
                <th>Cases</th>
                <th class="has-text-danger">New Cases</th>
                <th>Death</th>
                <th class="has-text-danger">New Death</th>
                <th>Recovered</th>
                <th class="has-text-warning">Critical</th>
              </thead>
              <tbody>
                @foreach ($countryStats as $country)
                    <tr>
                      <td> {{ $country->country }} </td>
                      <td> {{ number_format($country->cases) }} </td>
                      <td class="has-text-danger"> {{ number_format($country->todayCases) }} </td>
                      <td> {{ number_format($country->deaths) }} </td>
                      <td class="has-text-danger"> {{ number_format($country->todayDeaths) }} </td>
                      <td> {{ number_format($country->recovered) }} </td>
                      <td class="has-text-warning"> {{ number_format($country->critical) }} </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <br><br>
  @endsection