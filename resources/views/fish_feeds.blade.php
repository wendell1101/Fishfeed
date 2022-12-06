@extends('layouts.app')

@section('content')
<div class="feed-calc">
    <div class="fish-feeds-calculation-wrapper" style="margin-top: 100px" >
        <div class="fish-feed-calculation text-white p-5 rounded">
            <div class="calculation-header">
                <h2 class="text-center fw-bold">Fish Feed Calculation:</h2>
            </div>
            <form id="calculate-form" action="#" method="post">
                <div class="form-group mt-3">
                    <label for="abw">Average body weight:</label>
                    <input type="number" class="form-control" step=".01" id="abw" placeholder="Enter body weight" required>
                </div>
                <div class="form-group mt-3">
                    <label for="total-fingerlings">Total quantity of fingerlings:</label>
                    <input type="number" class="form-control" id="total-fingerlings" placeholder="Enter quantity of fingerlings" required>
                </div>
                <div class="form-group mt-3">
                    <label for="feed-rate-percentage">Feed rate:
                    </label>
                    <select class="form-select" required id="feed-rate-percentage">
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
                <!-- <h3 class="fw-bold text-danger">
                    <span class="result-value" id="result">1 monthly feeding</span>
                </h3> -->
               <div class="d-flex align-items-center justify-content-between">
                    <small class="">Survival rate:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="survival-rate">0%</span>
                    </small>
               </div>
               <div class="d-flex align-items-center justify-content-between">
                    <small class="">Types of feed:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="types-of-feed">Fish Grower</span>
                    </small>
               </div>
               
                <div class="d-flex align-items-center justify-content-between">
                    <small class="">DFR (daily feed requirements total):</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="dfr">0 kgs</span>
                    </small>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small class="">Total monthly feed allowance:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="monthly-dfr">0 kgs</span>
                    </small>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small class="">Sacks pcs per month:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="sacks-per-month">0</span>
                    </small>
                </div>

                <div class="d-flex align-items-center justify-content-between">
                    <small class="">Feed rate:</small>
                    <small class="fw-bold text-danger">
                        <span class="result-value" id="feed-rate">0 %</span>
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

        const abw = document.getElementById('abw');
        let abwValue = abw.value;
        const qtyOfFingerlings = document.getElementById('total-fingerlings')
        const feedRatePercentage = document.getElementById('feed-rate-percentage')

        const calculateForm = document.getElementById('calculate-form')



        const survivalRate = document.getElementById('survival-rate')
        let survivalRateValue = 0;
        const typesOfFeed = document.getElementById('types-of-feed')
        let typesOfFeedValue = '';
        const dfr = document.getElementById('dfr')
        let dfrValue = 0;
        const monthlyDfr = document.getElementById('monthly-dfr')
        let monthlyDfrValue = 0;
        const sacksPerMonth = document.getElementById('sacks-per-month')
        let sacksPerMonthValue = 0;
        const feedRate = document.getElementById('feed-rate')
        let feedRateValue = 0;

        const calculationName = 'Round Fish Pond Calculation'

        let result = 0;

        calculateForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // survivalRate
           if(abw.value >= 0.1 && abw.value <= 1)
            {
                survivalRateValue = 75;
                survivalRate.textContent = "75%";
            }else if(abw.value > 1 && abw.value <= 5){
                survivalRateValue = 80;
                survivalRate.textContent = "80%"
            }else if(abw.value > 5 && abw.value <= 20){
                survivalRateValue = 85;
                survivalRate.textContent = "85%"
            }else if(abw.value > 20 && abw.value <= 150){
                survivalRateValue = 90;
                survivalRate.textContent = "90%"
            }else if(abw.value > 150 && abw.value <= 500){
                survivalRateValue = 95;
                survivalRate.textContent = "95%"
            }

            //types of feeds
            if(abw.value >= 0.1 && abw.value <= 5){
                typesOfFeedValue = 'Fish Fry Mash'
                typesOfFeed.textContent = 'Fish Fry Mash'
            }else if(abw.value >= 5 && abw.value <= 20){
                typesOfFeedValue = 'Crumble'
                typesOfFeed.textContent = 'Crumble'
            }else if(abw.value >= 20 && abw.value <= 50){
                typesOfFeedValue = 'Pellet'
                typesOfFeed.textContent = 'Pellet'
            }else if(abw.value >= 50 && abw.value <= 150){
                typesOfFeedValue = 'Fish Grower'
                typesOfFeed.textContent = 'Fish Grower'
            }else if(abw.value > 150){
                typesOfFeedValue = 'Fish Finisher'
                typesOfFeed.textContent = 'Fish Finisher'
            }

            //DFR
            let frPercentage = feedRatePercentage.value * 0.01;
            let survivalRatePercentage = survivalRateValue * 0.01;

            dfrValue = (abw.value * qtyOfFingerlings.value * frPercentage * survivalRatePercentage) / 1000;
            dfrValue = dfrValue.toFixed(2)
           
            dfr.textContent = dfrValue + ' kgs';

            // total monthly dfr
            monthlyDfrValue = dfrValue * 30
            monthlyDfrValue = monthlyDfrValue.toFixed(2)
            monthlyDfr.textContent = monthlyDfrValue + ' kgs'


            //sacks per month
            sacksPerMonthValue = monthlyDfrValue / 25
            sacksPerMonthValue = sacksPerMonthValue.toFixed(2)
            sacksPerMonth.textContent = sacksPerMonthValue + ' pcs'

            //feedRate
            feedRateValue = feedRatePercentage.value
            feedRate.textContent = feedRateValue + ' %'
   

            axios.post('/feed_calculation_history', {
                    abw: abw.value,
                    feed_rate: feedRateValue,
                    typs_of_feed: typesOfFeedValue,
                    survival_rate: survivalRateValue,
                    dfr: dfrValue,
                    monthly_dfr: monthlyDfrValue,
                    sacks_per_month: sacksPerMonthValue,
                    size_of_fish: 0,
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
