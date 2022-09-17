@extends('layouts.app')

@section('content')
<div class="container">
    <div class="round-type-calculation-wrapper">
        <div class="pond-calculation text-white p-5 rounded">
            <div class="calculation-header">
                <h2 class="text-center fw-bold">Round Fish Pond Calculation</h2>
            </div>
            <form id="calculate-form" action="#" method="get">
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
                    <button class="btn btn-success w-100" type="submit" id="calculate-btn">Calculate</button>
                </div>
            </form>

            <div class="result text-center mt-4">
                <h5 class="fw-bold">Result</h5>
                <h3 class="fw-bold text-danger">
                    <span class="result-value" id="result">0</span>
                    <span class="result-unit">pcs</span>
                </h3>
                <small class="description-round-pond d-none">
                    Good fish farm managers must know the area and volume of all ponds and tanks. Exact measurement of area and volume is essential in order to calculate stocking rates and chemical applications. Stocking fish into a pond of uncertain area can result in poor production, more disease and possibly death. Chemical treatments can be ineffective if volume/area is underestimated and potentially lethal if it is overestimated.
                </small>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    const diameter = document.getElementById('pond-diameter');
    const height = document.getElementById('pond-height')
    const standardPcs = document.getElementById('standard-pcs')
    const calculateBtn = document.getElementById('calculate-btn')
    const calculateForm = document.getElementById('calculate-form')
    const desc = document.getElementsByClassName('description-round-pond');

    const calculationName = 'Round Fish Pond Calculation'

    let result = 0;

    calculateForm.addEventListener('submit', (e) => {
        e.preventDefault();

        result = diameter.value * height.value * standardPcs.value;
        let resultValue = document.getElementById('result');
        resultValue.textContent = result;
        desc[0].classList.remove('d-none');

        axios.post('/calculation_history', {
                calculation_name: calculationName,
                result: result
            })
            .then(function(response) {
                console.log('success: ', response);
            })
            .catch(function(error) {
                console.log(error);
            });
    })
</script>

@endsection