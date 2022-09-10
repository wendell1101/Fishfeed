@extends('layouts.app')

@section('content')

<div class="container">
    <div class="calculation-wrapper">
        <div class="row gx-3 gy-3 w-100">
            @if($feeds->count() > 0)
            @foreach($feeds as $feed)
            <div class="col-lg-6">
                <div class="bg-light rounded-2 p-3 h-100">
                    <div class="round-type-calculation">
                        <img src="{{ asset('storage/' . $feed->image) }}" class="rounded-2" width="100%" alt="fish" class="fish" />
                    </div>
                    <a href="#" class="text-decoration-none">
                        <button class="align-items-center d-flex justify-content-center btn btn-primary btn-lg mt-3 w-100" type="submit">
                            <i class='bx bx-water me-1'></i>
                            <p class="m-0">Types of Feeds</p>
                        </button>
                    </a>
                </div>
            </div>
            @endforeach
            @else
            <h2>No Feed Found</h2>
            @endif
            <!-- <div class="col-lg-6">
                <div class="bg-light rounded-2 p-3 h-100">
                    <div class="round-type-calculation">
                        <img src="{{asset('imgs/type-of-reproduction.png')}}" class="rounded-2" width="100%" alt="fish" class="fish" />
                    </div>
                    <a href="{{route('fish_reproduction')}}" class="text-decoration-none">
                        <button class="align-items-center d-flex justify-content-center btn btn-primary btn-lg mt-3 w-100" type="submit">
                            <i class='bx bxs-heart-circle me-1'></i>
                            <p class="m-0">Type of Fish Reproduction</p>
                        </button>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection
