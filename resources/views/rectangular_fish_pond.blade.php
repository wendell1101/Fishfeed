@extends('layouts.app')

@section('content')
<div class="container">
    <div class="rectangular-type-calculation-wrapper">
        <div class="pond-calculation text-white p-5 rounded">
            <div class="calculation-header">
                <h2 class="text-center fw-bold">Rectangular Fish Pond Calculation</h2>
            </div>
            <form id="calculate-form" action="#" method="get">
                <div class="form-group mt-3">
                    <label for="pond-width">Width</label>
                    <input type="number" class="form-control" id="pond-width" placeholder="Enter Pond Width" required>
                </div>
                <div class="form-group mt-3">
                    <label for="pond-height">Height</label>
                    <input type="number" class="form-control" id="pond-height" placeholder="Enter Pond Height" required>
                </div>
                <div class="form-group mt-3">
                    <label for="pond-depth">Depth</label>
                    <input type="number" class="form-control" id="pond-depth" placeholder="Enter Pond Depth" required>
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
                <small class="description-rectangular-pond d-none">
                    Many ponds in the Southeast are watershed ponds that have been built by damming valleys. These ponds are usually irregular in shape. Check first with your county SCS office for records on your pond, or for aerial photos in the SCS or ASCS office. If no good records exist then a reasonable estimate can be made by chaining or pacing off the pond margins and using the following procedures to calculate area.
                </small>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        const width = document.getElementById('pond-width');
        const height = document.getElementById('pond-height')
        const pondDepth = document.getElementById('pond-depth')
        const standardPcs = document.getElementById('standard-pcs')
        const calculateBtn = document.getElementById('calculate-btn')
        const calculateForm = document.getElementById('calculate-form')
        const desc = document.getElementsByClassName('description-rectangular-pond');

        const calculationName = 'Rectangular Fish Pond Calculation'

        let result = 0;

        calculateForm.addEventListener('submit', (e) => {
            e.preventDefault();
            result = width.value * height.value * pondDepth.value * standardPcs.value;
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
