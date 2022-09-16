@extends('layouts.app')

@section('content')
<div class="container">
    <div class="fish-feeds-calculation-wrapper">
        <div class="fish-feed-calculation text-white p-5 rounded">
            <div class="calculation-header">
                <h2 class="text-center fw-bold">Fish Feed Calculation:</h2>
            </div>
            <form id="calculate-form" action="#" method="get">
                <div class="form-group mt-3">
                    <label for="avg-body-weight">Average body weight:</label>
                    <input type="number" class="form-control" id="avg-body-weight" placeholder="Enter body weight" required>
                </div>
                <div class="form-group mt-3">
                    <label for="total-fingerlings">Total quantity of fingerlings:</label>
                    <input type="number" class="form-control" id="total-fingerlings" placeholder="Enter quantity of fingerlings" required>
                </div>
                <div class="form-group mt-3">
                    <label for="month">Month:
                    </label>
                    <select class="form-select" required id="month">
                        <option selected disabled>Select</option>
                        <option value="1st month">1st month</option>
                        <option value="2nd month">2nd month</option>
                        <option value="3rd month">3rd month</option>
                        <option value="4th month">4th month</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-success w-100 mb-3" type="submit" id="calculate-btn">Calculate</button>
                    <button class="btn btn-danger w-100" type="reset" id="calculate-btn">Reset</button>
                </div>
            </form>

            <div class="result text-center mt-4">
                <h5 class="fw-bold">Result</h5>
                <h3 class="fw-bold text-danger">
                    <span class="result-value" id="result">1 monthly feeding</span>
                </h3>
               <div class="d-flex align-items-center justify-content-between">
                    <small class="">Survival rate:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="total-feeding">90%</span>
                    </small>
               </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small class="">Feed rate:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="total-feeding">8%</span>
                    </small>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small class="">DFR (daily feed requirements total):</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="total-feeding">11.52 kilos</span>
                    </small>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small class="">Daily feed 3 to 4 times a day:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="total-feeding">3.8 kilos</span>
                    </small>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small class="">Total monthly feeds allowance:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="total-feeding">345.6 kilos</span>
                    </small>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small class="">Sacks pcs for 1st month:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="total-feeding">14</span>
                    </small>
                </div>
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

        let result = 0;

        calculateForm.addEventListener('submit', (e) => {
            e.preventDefault();
            result = width.value * height.value * pondDepth.value * standardPcs.value;
            let resultValue = document.getElementById('result');
            resultValue.textContent = result;
            desc[0].classList.remove('d-none');
        })

    </script>

@endsection
