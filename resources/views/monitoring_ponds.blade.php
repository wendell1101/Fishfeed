@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <x-alert />
        <div class="col-12">
            <h2 class="bg-white p-2 rounded">Profile Information</h2>
        </div>
        <div class="col-md-3">
            <div class="card card-body">
                <div class="form-group mb-2">
                    <label for="student_number">Student Number</label>
                    <input type="tel" name="student_number" id="student_number" class="form-control" required readonly value="{{auth()->user()->student_number}}">
                </div>
                <a href="{{route('calculation_history')}}" class="btn btn-secondary mr-2 mb-2">Ponds Calculation History</a>
                <a href="{{route('feed_calculation_history')}}" class="btn btn-secondary ml-2 mb-2 ">Feeds Calculation History</a>
                <a href="{{route('profile')}}" class="btn btn-success ml-2">Monitoring Module</a>
                <a href="{{route('edit_profile')}}" class="btn btn-secondary ml-2 mt-4">Edit profile</a>
            </div>
        </div>
        <div class="col-md-9">
            <ul class="nav nav-tabs mb-2">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('profile')}}">Chart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark active" aria-current="page" href="{{route('monitoring_ponds.index')}}">Monitoring Ponds</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="{{route('monitoring_ponds.create')}}">Create monitoring ponds</a>
                </li>
            </ul>
            <div class="card p-2">
                @if($monitoringPonds)
                <table class="table">
                    <caption>List of ponds</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($monitoringPonds as $pond)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$pond->ponds_name}}</td>
                            <td>
                                <a href="{{route('monitoring_ponds.edit', $pond->id)}}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                @else
                <p>No result found</p>
                @endif
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')

@endsection