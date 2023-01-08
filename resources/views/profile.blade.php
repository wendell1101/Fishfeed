@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <form action="" class="row">
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
                <a href="{{route('profile')}}" class="btn btn-success ml-2">Monitoring Reports</a>
                <a href="{{route('edit_profile')}}" class="btn btn-secondary ml-2 mt-4">Edit profile</a>
            </div>
        </div>
        <div class="col-md-9 bg-white">
            <!-- Chart -->
            <div class="row align-items-center">
                <div class="form-group mt-2 col-9">
                    <div class="d-flex m-2">
                        <select name="year" id="year" class="form-control">
                        <option value="2023"  @if(Request()->year === '2023')  selected @endif>2023</option>
                            <option value="2022" @if(Request()->year === '2022') selected @endif>2022</option>
                            
                        </select>
                    </div>

                </div>
                <div class="form-group col-2">
                    <button type="submit" class="btn btn-success">filter</button>
                </div>
            </div>


            <div class="col-md-12 mt-5">
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </div>

    </form>
</div>
@endsection

@section('js')
<script>
    var ctx = document.getElementById('myChart');
    const monitoringData = {
        firstDay: {
            date: 'NA',
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        january: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        february: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        march: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        april: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        may: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        june: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        july: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        august: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        september: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        october: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        november: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
        december: {
            abw: 0,
            dfr: 0,
            monthly_dfr: 0,
        },
    };

    monitoringData.firstDay['date'] = "<?php echo $data['first_day']['date'] ?>"
    monitoringData.firstDay['abw'] = "<?php echo $data['first_day']['abw'] ?>"
    monitoringData.firstDay['dfr'] = "<?php echo $data['first_day']['dfr'] ?>"
    monitoringData.firstDay['monthly_dfr'] = "<?php echo $data['first_day']['monthly_dfr'] ?>"

    monitoringData.january['abw'] = "<?php echo $data['january']['abw'] ?>"
    monitoringData.january['dfr'] = "<?php echo $data['january']['dfr'] ?>"
    monitoringData.january['monthly_dfr'] = "<?php echo $data['january']['monthly_dfr'] ?>"

    monitoringData.february['abw'] = "<?php echo $data['february']['abw'] ?>"
    monitoringData.february['dfr'] = "<?php echo $data['february']['dfr'] ?>"
    monitoringData.february['monthly_dfr'] = "<?php echo $data['february']['monthly_dfr'] ?>"

    monitoringData.march['abw'] = "<?php echo $data['march']['abw'] ?>"
    monitoringData.march['dfr'] = "<?php echo $data['march']['dfr'] ?>"
    monitoringData.march['monthly_dfr'] = "<?php echo $data['march']['monthly_dfr'] ?>"

    monitoringData.april['abw'] = "<?php echo $data['april']['abw'] ?>"
    monitoringData.april['dfr'] = "<?php echo $data['april']['dfr'] ?>"
    monitoringData.april['monthly_dfr'] = "<?php echo $data['april']['monthly_dfr'] ?>"

    monitoringData.may['abw'] = "<?php echo $data['may']['abw'] ?>"
    monitoringData.may['dfr'] = "<?php echo $data['may']['dfr'] ?>"
    monitoringData.may['monthly_dfr'] = "<?php echo $data['may']['monthly_dfr'] ?>"

    monitoringData.june['abw'] = "<?php echo $data['june']['abw'] ?>"
    monitoringData.june['dfr'] = "<?php echo $data['june']['dfr'] ?>"
    monitoringData.june['monthly_dfr'] = "<?php echo $data['june']['monthly_dfr'] ?>"

    monitoringData.july['abw'] = "<?php echo $data['july']['abw'] ?>"
    monitoringData.july['dfr'] = "<?php echo $data['july']['dfr'] ?>"
    monitoringData.july['monthly_dfr'] = "<?php echo $data['july']['monthly_dfr'] ?>"

    monitoringData.august['abw'] = "<?php echo $data['august']['abw'] ?>"
    monitoringData.august['dfr'] = "<?php echo $data['august']['dfr'] ?>"
    monitoringData.august['monthly_dfr'] = "<?php echo $data['august']['monthly_dfr'] ?>"

    monitoringData.september['abw'] = "<?php echo $data['september']['abw'] ?>"
    monitoringData.september['dfr'] = "<?php echo $data['september']['dfr'] ?>"
    monitoringData.september['monthly_dfr'] = "<?php echo $data['september']['monthly_dfr'] ?>"

    monitoringData.october['abw'] = "<?php echo $data['october']['abw'] ?>"
    monitoringData.october['dfr'] = "<?php echo $data['october']['dfr'] ?>"
    monitoringData.october['monthly_dfr'] = "<?php echo $data['october']['monthly_dfr'] ?>"

    monitoringData.november['abw'] = "<?php echo $data['november']['abw'] ?>"
    monitoringData.november['dfr'] = "<?php echo $data['november']['dfr'] ?>"
    monitoringData.november['monthly_dfr'] = "<?php echo $data['november']['monthly_dfr'] ?>"

    monitoringData.december['abw'] = "<?php echo $data['december']['abw'] ?>"
    monitoringData.december['dfr'] = "<?php echo $data['december']['dfr'] ?>"
    monitoringData.december['monthly_dfr'] = "<?php echo $data['december']['monthly_dfr'] ?>"




    console.log(monitoringData)

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Aug', 'September', 'October', 'November', 'December'],
            datasets: [{
                    label: 'ABW (g)',
                    data: [monitoringData.january.abw, monitoringData.february.abw, monitoringData.march.abw, monitoringData.april.abw, monitoringData.may.abw, monitoringData.june.abw, monitoringData.july.abw, monitoringData.august.abw, monitoringData.september.abw, monitoringData.october.abw, monitoringData.november.abw, monitoringData.december.abw, ],
                    backgroundColor: [
                        'blue',
                        'blue',
                        'blue',
                        'blue',
                        'blue',
                        'blue',
                        'blue',
                        'blue',
                        'blue',
                        'blue',
                        'blue',
                        'blue',

                    ],
                    borderColor: [
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                    ],
                    borderWidth: 1
                },
                {
                    label: 'Total monthly Feeds (kg)',
                    data: [monitoringData.january.monthly_dfr, monitoringData.february.monthly_dfr, monitoringData.march.monthly_dfr, monitoringData.april.monthly_dfr, monitoringData.may.monthly_dfr, monitoringData.june.monthly_dfr, monitoringData.july.monthly_dfr, monitoringData.august.monthly_dfr, monitoringData.september.monthly_dfr, monitoringData.october.monthly_dfr, monitoringData.november.monthly_dfr, monitoringData.december.monthly_dfr, ],
                    backgroundColor: [
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                        'orange',
                    ],
                    borderColor: [
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                    ],
                    borderWidth: 1
                },
                {
                    label: 'DFR',
                    data: [ monitoringData.january.dfr, monitoringData.february.dfr, monitoringData.march.dfr, monitoringData.april.dfr, monitoringData.may.dfr, monitoringData.june.dfr, monitoringData.july.dfr, monitoringData.august.dfr, monitoringData.september.dfr, monitoringData.october.dfr, monitoringData.november.dfr, monitoringData.december.dfr, ],
                    backgroundColor: [
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                        'gray',
                    ],
                    borderColor: [
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                        '#333',
                    ],
                    borderWidth: 1
                },
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endsection