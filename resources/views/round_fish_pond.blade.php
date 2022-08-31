@extends('layouts.app')

@section('content')
<div class="container">
    <div class="round-type-calculation-wrapper">
        <div class="pond-calculation text-white p-5 rounded">
            <div class="calculation-header">
                <h2 class="text-center fw-bold">Round Fish Pond Calculation</h2>
            </div>
            <form>
                <div class="form-group mt-3">
                    <label for="pond-diameter">Diameter</label>
                    <input type="number" class="form-control" id="pond-diameter" placeholder="Enter Pond Diameter" required>
                </div>
                <div class="form-group mt-3">
                    <label for="pond-height">Height</label>
                    <input type="number" class="form-control" id="pond-height" placeholder="Enter Pond Height" required>
                </div>
                <div class="form-group mt-3">
                    <label for="standard-pcs">Standard pcs per cubic meter:
                    </label>
                    <select class="form-select" required id="standard-pcs">
                        <option selected disabled>Select</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-success w-100">Calculate</button>
                </div>
            </form>

            <div class="result text-center mt-4">
                <h5 class="fw-bold">Result</h5>
                <h3 class="fw-bold text-danger">
                    <span class="result-value">0</span>
                    <span class="result-unit">pcs</span>
                </h3>
                <small class="description">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel asperiores doloribus atque cupiditate maiores quo, quos itaque necessitatibus optio in delectus esse voluptates rerum illo
                </small>
            </div>
        </div>
    </div>
</div>
@endsection