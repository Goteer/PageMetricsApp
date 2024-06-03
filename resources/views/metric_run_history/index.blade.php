@extends('app.layout')
@section('content') 

  <div class="container mt-5">
    <div class="row">
      @foreach ($metric_run_history as $metric_run)
        <div class="list-item-element">
              <h5 class="card-title">{{ $metric_run->id }}</h5>
              <p class="card-text">{{ $metric_run->url }}</p>    
        </div>
      @endforeach
    </div>
  </div>

@endsection