@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row mt-5">
        <h1 class="text-center fw-bold">Feed Details</h1>
    </div>
    <div class="row mt-5 mb-5">
        <div class="bg-light rounded-2 p-0">
            <div class="pond-type">
                <img src="{{ asset('storage/' . $feed->image) }}" class="fish-pond-img rounded-2" width="30%"/>
                <div class="p-3">
                    <h3 class="fw-bold">{{ $feed->name }}</h3>
                    <p class="text-muted">
                        <span class="font-weight-bold">Type: </span>
                        {{$feed->type}}
                    </p>
                    <p class="text-muted">
                        <span class="font-weight-bold">Description: </span><br>
                        {{$feed->description}}
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection
