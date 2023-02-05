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
                    <a class="nav-link text-dark active" href="{{route('profile')}}">Chart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="{{route('monitoring_ponds.index')}}">Monitoring Ponds</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="{{route('monitoring_ponds.create')}}">Create monitoring ponds</a>
                </li>
            </ul>
            <!-- Chart -->
            <form action="">
                @if(!empty($harvestDay))
                <div class="alert alert-warning" style="background-color:yellow" role="alert">
                <div class="d-flex justify-content-left">
                    <i class="fa-sharp fa-solid fa-bell text-dark mr-2" style="font-size:2rem"></i>
                    <p class="fw-bold ml-2">Alert!</p>
                </div>
                    <span class="ml-4">Ready to harvest:</span><br>
                    <ul>
                        @foreach($harvestDay as $date)
                            <li>{{$date['ponds_name']}} ({{$date['currentDate']}})</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card card-body">                    
                    <div class="row align-items-center">
                        <div class="form-group mt-2 col-md-6">
                            <div class="">
                                <label for="year">Select Year</label>
                                <select name="year" id="year" class="form-control">
                                    <option value="2023" @if(Request()->year === '2023') selected @endif>2023</option>
                                    <option value="2022" @if(Request()->year === '2022') selected @endif>2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-2 col-md-6">
                            <div>
                                <label for="pond_id">Select pond type</label>
                                <select name="pond_id" id="pond_id" class="form-control">
                                    @foreach($ponds as $pond)
                                    <option value="{{$pond->id}}" @if(Request()->pond_id == $pond->id) selected @endif>{{$pond->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            <button type="submit" class="btn btn-success">filter</button>
                        </div>
                    </div>


                    <div class="col-md-12 mt-5">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <h4 class="mb-2">Overall Summary</h4>
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr class="bg-secondary text-white">
                                        <th scope="col">Month</th>
                                        <th scope="col">Abw</th>
                                        <th scope="col">Overall Harvest</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr>
                                        <td>January</td>
                                        <td>
                                            {{$data['january']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['january']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>February</td>
                                        <td>
                                            {{$data['february']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['february']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>March</td>
                                        <td>
                                            {{$data['march']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['march']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>
                                            {{$data['april']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['april']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>May</td>
                                        <td>
                                            {{$data['may']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['may']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>June</td>
                                        <td>
                                            {{$data['june']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['june']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>
                                            {{$data['july']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['july']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>August</td>
                                        <td>
                                            {{$data['august']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['august']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>September</td>
                                        <td>
                                            {{$data['september']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['september']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>October</td>
                                        <td>
                                            {{$data['october']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['october']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>November</td>
                                        <td>
                                            {{$data['november']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['november']['survived']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>December</td>
                                        <td>
                                            {{$data['december']['abw']}}
                                        </td>
                                        <td>
                                            {{$data['december']['survived']}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection

@section('js')
<script>
    var ctx = document.getElementById('myChart');
    const monitoringData = {
        january: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        february: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        march: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        april: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        may: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        june: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        july: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        august: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        september: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        october: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        november: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
        december: {
            abw: 0,
            stock_fingerlings: 0,
            mortality: 0,
            survived: 0
        },
    };

    monitoringData.january['abw'] = "<?php echo $data['january']['abw'] ?>"
    monitoringData.january['stock_fingerlings'] = "<?php echo $data['january']['stock_fingerlings'] ?>"
    monitoringData.january['mortality'] = "<?php echo $data['january']['mortality'] ?>"
    monitoringData.january['survived'] = "<?php echo $data['january']['survived'] ?>"

    monitoringData.february['abw'] = "<?php echo $data['february']['abw'] ?>"
    monitoringData.february['stock_fingerlings'] = "<?php echo $data['february']['stock_fingerlings'] ?>"
    monitoringData.february['mortality'] = "<?php echo $data['february']['mortality'] ?>"
    monitoringData.february['survived'] = "<?php echo $data['february']['survived'] ?>"

    monitoringData.march['abw'] = "<?php echo $data['march']['abw'] ?>"
    monitoringData.march['stock_fingerlings'] = "<?php echo $data['march']['stock_fingerlings'] ?>"
    monitoringData.march['mortality'] = "<?php echo $data['march']['mortality'] ?>"
    monitoringData.march['survived'] = "<?php echo $data['march']['survived'] ?>"

    monitoringData.april['abw'] = "<?php echo $data['april']['abw'] ?>"
    monitoringData.april['stock_fingerlings'] = "<?php echo $data['april']['stock_fingerlings'] ?>"
    monitoringData.april['mortality'] = "<?php echo $data['april']['mortality'] ?>"
    monitoringData.april['survived'] = "<?php echo $data['april']['survived'] ?>"

    monitoringData.may['abw'] = "<?php echo $data['may']['abw'] ?>"
    monitoringData.may['stock_fingerlings'] = "<?php echo $data['may']['stock_fingerlings'] ?>"
    monitoringData.may['mortality'] = "<?php echo $data['may']['mortality'] ?>"
    monitoringData.may['survived'] = "<?php echo $data['may']['survived'] ?>"

    monitoringData.june['abw'] = "<?php echo $data['june']['abw'] ?>"
    monitoringData.june['stock_fingerlings'] = "<?php echo $data['june']['stock_fingerlings'] ?>"
    monitoringData.june['mortality'] = "<?php echo $data['june']['mortality'] ?>"
    monitoringData.june['survived'] = "<?php echo $data['june']['survived'] ?>"

    monitoringData.july['abw'] = "<?php echo $data['july']['abw'] ?>"
    monitoringData.july['stock_fingerlings'] = "<?php echo $data['july']['stock_fingerlings'] ?>"
    monitoringData.july['mortality'] = "<?php echo $data['july']['mortality'] ?>"
    monitoringData.july['survived'] = "<?php echo $data['july']['survived'] ?>"

    monitoringData.august['abw'] = "<?php echo $data['august']['abw'] ?>"
    monitoringData.august['stock_fingerlings'] = "<?php echo $data['august']['stock_fingerlings'] ?>"
    monitoringData.august['mortality'] = "<?php echo $data['august']['mortality'] ?>"
    monitoringData.august['survived'] = "<?php echo $data['august']['survived'] ?>"

    monitoringData.september['abw'] = "<?php echo $data['september']['abw'] ?>"
    monitoringData.september['stock_fingerlings'] = "<?php echo $data['september']['stock_fingerlings'] ?>"
    monitoringData.september['mortality'] = "<?php echo $data['september']['mortality'] ?>"
    monitoringData.september['survived'] = "<?php echo $data['september']['survived'] ?>"

    monitoringData.october['abw'] = "<?php echo $data['october']['abw'] ?>"
    monitoringData.october['stock_fingerlings'] = "<?php echo $data['october']['stock_fingerlings'] ?>"
    monitoringData.october['mortality'] = "<?php echo $data['october']['mortality'] ?>"
    monitoringData.october['survived'] = "<?php echo $data['october']['survived'] ?>"

    monitoringData.november['abw'] = "<?php echo $data['november']['abw'] ?>"
    monitoringData.november['stock_fingerlings'] = "<?php echo $data['november']['stock_fingerlings'] ?>"
    monitoringData.november['mortality'] = "<?php echo $data['november']['mortality'] ?>"
    monitoringData.november['survived'] = "<?php echo $data['november']['survived'] ?>"

    monitoringData.december['abw'] = "<?php echo $data['december']['abw'] ?>"
    monitoringData.december['stock_fingerlings'] = "<?php echo $data['december']['stock_fingerlings'] ?>"
    monitoringData.december['mortality'] = "<?php echo $data['december']['mortality'] ?>"
    monitoringData.december['survived'] = "<?php echo $data['december']['survived'] ?>"




    console.log(monitoringData)

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Aug', 'September', 'October', 'November', 'December'],
            datasets: [{
                    label: 'Stock fingerlings',
                    data: [monitoringData.january.stock_fingerlings, monitoringData.february.stock_fingerlings, monitoringData.march.stock_fingerlings, monitoringData.april.stock_fingerlings, monitoringData.may.stock_fingerlings, monitoringData.june.stock_fingerlings, monitoringData.july.stock_fingerlings, monitoringData.august.stock_fingerlings, monitoringData.september.stock_fingerlings, monitoringData.october.stock_fingerlings, monitoringData.november.stock_fingerlings, monitoringData.december.stock_fingerlings, ],
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
                    label: 'Mortality',
                    data: [monitoringData.january.mortality, monitoringData.february.mortality, monitoringData.march.mortality, monitoringData.april.mortality, monitoringData.may.mortality, monitoringData.june.mortality, monitoringData.july.mortality, monitoringData.august.mortality, monitoringData.september.mortality, monitoringData.october.mortality, monitoringData.november.mortality, monitoringData.december.mortality, ],
                    backgroundColor: [
                        'red',
                        'red',
                        'red',
                        'red',
                        'red',
                        'red',
                        'red',
                        'red',
                        'red',
                        'red',
                        'red',
                        'red',
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
                    label: 'Survived',
                    data: [monitoringData.january.survived, monitoringData.february.survived, monitoringData.march.survived, monitoringData.april.survived, monitoringData.may.survived, monitoringData.june.survived, monitoringData.july.survived, monitoringData.august.survived, monitoringData.september.survived, monitoringData.october.survived, monitoringData.november.survived, monitoringData.december.survived, ],
                    backgroundColor: [
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
                        '#198754',
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