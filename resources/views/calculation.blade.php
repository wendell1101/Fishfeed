@extends('layouts.app')

@section('content')
<div class="container">
    <div class="calculation-wrapper">
      <div class="row gx-3 gy-3 w-100">
        <div class="col-lg-6">
          <div class="bg-light rounded-2 p-3 h-100">
            <div class="round-type-calculation">
              <img src="{{asset('imgs/round-type-calculation.png')}}" class="rounded-2" width="100%" alt="fish" class="fish"/>
            </div>
            <a href="{{route('round_fish_pond')}}" class="text-decoration-none">
              <button class="align-items-center d-flex justify-content-center btn btn-primary btn-lg mt-3 w-100" type="submit">
                <i class='bx bxs-calculator me-1'></i>
                <p class="m-0">Calculate round fish pond</p>
              </button>
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-2 p-3 h-100">
            <div class="round-type-calculation">
              <img src="{{asset('imgs/rectangular-fish-ponds.png')}}" class="rounded-2" width="100%" alt="fish" class="fish"/>
            </div>
            <a href="{{route('rectangular_fish_pond')}}" class="text-decoration-none">
              <button class="align-items-center d-flex justify-content-center btn btn-primary btn-lg mt-3 w-100" type="submit">
                <i class='bx bxs-calculator me-1'></i>
                <p class="m-0">Calculate rectangular fish pond</p>
              </button>
            </a>
          </div>
        </div>
         

      </div>

    </div>
  </div>

@endsection