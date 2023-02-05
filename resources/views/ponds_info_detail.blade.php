@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row mt-5">
        <h1 class="text-center fw-bold">Pond Details</h1>
    </div>
    <div class="row mt-5 mb-5">
        <div class="bg-light rounded-2 p-0">
            <div class="pond-type">
                <img src="{{ asset('storage/' . $pond->image) }}" class="fish-pond-img rounded-2" width="30%"/>
                <div class="p-3">
                    <h3 class="fw-bold">{{ $pond->name }}</h3>
                    <p class="text-muted">
                        <span class="font-weight-bold">Type: </span>
                        {{$pond->type}}
                    </p>
                    <p class="text-muted">
                        <span class="font-weight-bold">Description: </span><br>
                        {{$pond->description}}
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection
