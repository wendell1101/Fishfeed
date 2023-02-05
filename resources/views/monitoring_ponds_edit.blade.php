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
                    <input type="tel" name="student_number" id="student_number" class="form-control" required disabled value="{{auth()->user()->student_number}}">
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
            <div class="card">
                <form action="{{route('monitoring_ponds.update', $monitoringPond->id)}}" method="post">
                    <div class="card-header">
                        <p class="text-center">Edit Pond information form</p>
                    </div>                
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_started">Date Started</label>
                                    <input type="date" name="date_started" id="date_started" onfocus="this.showPicker()" class="form-control" disabled value="{{$monitoringPond->date_started}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expected_date_harvest">Expected Date Harvest</label>
                                    <input type="date" name="expected_date_harvest" id="expected_date_harvest" onfocus="this.showPicker()" disabled value="{{$monitoringPond->expected_date_harvest}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="abw">ABW</label>
                                    <input type="number" name="abw" id="abw" class="form-control" value="{{$monitoringPond->abw}}" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stock_fingerlings">Number of stock fingerlings</label>
                                    <input type="number" name="stock_fingerlings" id="stock_fingerlings" disabled value="{{$monitoringPond->stock_fingerlings}}" class="form-control" step=".01" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <p class="mt-2">Note: Fill up this every monthly sampling</p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mortality">Mortality</label>
                                    <input type="number" name="mortality" id="mortality" value="{{$monitoringPond->mortality}}" class="form-control" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mortality">Date(Every Sampling)</label>
                                    <input type="date" name="date_of_sampling" id="date_of_sampling" onfocus="this.showPicker()" value="{{$monitoringPond->date_of_sampling}}" class="form-control" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            @if($ponds)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Types of ponds</label>
                                    <select name="pond_id" id="pond_id" class="form-control" disabled required>
                                        <option value="">Please select an option</option>
                                        @foreach($ponds as $pond)
                                        <option value="{{$pond->id}}" @if($monitoringPond->pond_id == $pond->id) selected @endif>{{$pond->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ponds_name">Ponds Name</label>
                                    <input type="text" name="ponds_name" id="ponds_name" value="{{$monitoringPond->ponds_name}}" disabled class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{route('monitoring_ponds.index')}}" class="btn btn-secondary mt-2">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')

@endsection