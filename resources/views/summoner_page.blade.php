@extends('layouts/app')

@section('content')

  <div class="container" style="padding-top:30px;">
    <div class="box">
      <div class="columns">
        <div class="column is-offset-one-quarter is-half has-text-centered">

            <div class="field">
              <label class="label">Summoner: {{ $name }}</label>
            </div>
            <div class="field">
              <label class="label">Level: {{ $level }}</label>
            </div>
            <hr/>
            <div class="field has-text-centered">
              <p class="has-text-centered">
                <a href="/">
                  <button class="button is-warning">
                    Back
                  </button>
                </a>
              </p>
            </div>

        </div>
      </div>
    </div>
  </div>


@endsection
