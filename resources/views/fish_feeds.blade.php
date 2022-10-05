@extends('layouts.app')

@section('content')
<div class="feed-calc">
    <div class="fish-feeds-calculation-wrapper" style="margin-top: 100px" >
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
                    <label for="month">Feed rate:
                    </label>
                    <select class="form-select" required id="month">
                        <option selected disabled>Select</option>
                        <option value="15">15%</option>
                        <option value="14">14%</option>
                        <option value="13">13%</option>
                        <option value="12">12%</option>
                        <option value="11">11%</option>
                        <option value="10">10%</option>
                        <option value="9">9%</option>
                        <option value="8">8%</option>
                        <option value="7">7%</option>
                        <option value="6">6%</option>
                        <option value="5">5%</option>
                        <option value="4">4%</option>
                        <option value="3">3%</option>
                        <option value="2">2%</option>
                        <option value="1">1%</option>
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
            <iframe style="margin-top: 200px" width="100%" height="710" src="https://www.youtube.com/embed/1vE1qNQ6Aic" title="Feeding FRENZY of Nile Tilapia in Aquaponics Facility" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
