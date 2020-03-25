@extends('layout')

  @section('title')
    USA Stats COVID-19 Updates - NabilDev
  @endsection

  @section('main')
      <section>
        <div class="section has-background-info has-background-dark">
            <div class="container">
                <h1 class="title has-text-white">
                  USA States Updates
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
                      {{ number_format($usaStats->cases) }}
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
                        {{ number_format($usaStats->deaths) }}
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
                        {{ number_format($usaStats->recovered) }}
                      </div>
                    </div>
                  </div>
                  <div class="columns is-marginless">
                    <div class="column is-3 has-text-white">
                      Active Cases
                      <div class="has-text-weight-bold is-size-3">
                        {{ number_format($activeCases) }}%
                      </div>
                    </div>
                    <div class="column is-3 has-text-white">
                      Death Cases
                      <div class="has-text-weight-bold is-size-3">
                        {{ number_format($deathRate) }}%
                      </div>
                    </div>
                    <div class="column is-3 has-text-white">
                      Recovered Cases
                      <div class="has-text-weight-bold is-size-3">
                        {{ number_format($recoveryRate) }}%
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
              <a class="has-text-white has-text-weight-bold is-size-4">
                {{ $stateStats[0]->state }} Stats
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
                  {{ number_format($stateStats[0]->cases) }}
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
                  {{ number_format($stateStats[0]->todayCases) }}
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
                  {{ number_format($stateStats[0]->deaths) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-grey has-text-white">
              <a class="has-text-white has-text-weight-bold is-size-4">
                {{ $stateStats[1]->state }} Stats
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
                  {{ number_format($stateStats[1]->cases) }}
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
                  {{ number_format($stateStats[1]->todayCases) }}
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
                  {{ number_format($stateStats[1]->deaths) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-primary has-text-white">
              <a class="has-text-white has-text-weight-bold is-size-4">
                {{ $stateStats[2]->state }} Stats
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
                  {{ number_format($stateStats[2]->cases) }}
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
                  {{ number_format($stateStats[2]->todayCases) }}
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
                  {{ number_format($stateStats[2]->deaths) }}
                </div>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="box has-background-danger has-text-white">
              <a class="has-text-white has-text-weight-bold is-size-4">
                {{ $stateStats[3]->state }} Stats
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
                  {{ number_format($stateStats[3]->cases) }}
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
                  {{ number_format($stateStats[3]->todayCases) }}
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
                  {{ number_format($stateStats[3]->deaths) }}
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
          <a href="https://onrica.com" target="_blank">
            <img src="/img/wide_logo.png" width="130px" height="70px">
          </a>
        </div>
        
        <div class="columns is-marginless">
          <div class="column" style="height:400px;overflow:auto;">
            <table class="table is-fullwidth is-bordered is-hoverable has-background-white-bis">
              <thead class="has-background-grey-lighter">
                <th>States</th>
                <th>Cases</th>
                <th class="has-text-danger">New Cases</th>
                <th>Death</th>
                <th class="has-text-danger">New Death</th>
                <th class="has-text-danger">Active</th>
              </thead>
              <tbody>
                @foreach ($stateStats as $state)
                    <tr>
                      <td> {{ $state->state }} </td>
                      <td> {{ number_format($state->cases) }} </td>
                      <td class="has-text-danger"> {{ number_format($state->todayCases) }} </td>
                      <td> {{ number_format($state->deaths) }} </td>
                      <td class="has-text-danger"> {{ number_format($state->todayDeaths) }} </td>
                      <td class="has-text-danger"> {{ number_format($state->active) }} </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <br><br>
  @endsection