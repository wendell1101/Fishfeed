@extends('layouts.app')

@section('content')

<div class="container">
    <div class="calculation-wrapper">
        <div class="row gx-3 gy-3 w-100">
            @if($feeds->count() > 0)
            @foreach($feeds as $feed)
            <div class="col-lg-6">
                <div class="card bg-light rounded-2 p-3 h-100">
                    <div class="img-wrapper">
                        <img src="{{ asset('storage/' . $feed->image) }}" class="rounded-2" width="100%" alt="feed" class="fish" />

                    </div>
                    <div class="p-3">
                        <h4 class="text-center m-0 fw-bold">{{ $feed->name }}</h4>
                    </div>
                    <a href="{{route('feeds_info.show', $feed->id)}}" class="text-decoration-none">
                        <a href="{{route('feeds_info.show', $feed->id)}}" class="align-items-center d-flex justify-content-center btn btn-primary btn-lg w-100">
                            <i class='bx bx-detail me-1'></i>
                            <p class="m-0">See more details</p>
                        </button>
                    </a>
                </div>
            </div>
            @endforeach
            @else
            <div class="no-feeds-found text-center">
                <i class='bx bx-search-alt-2' ></i>
                <h2>No  Ponds Found</h2>
            </div>
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
