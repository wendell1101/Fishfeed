@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active text-bold">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>1 </h3>

                        <p>Available Services</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-navy">
                    <div class="inner">
                        <h3>3</h3>

                        <p>Reservations</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-calendar text-light"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>4</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>6</h3>

                        <p>Available Products</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        <div class="row container-fluid">
            <!-- ./col -->
            <div class="row w-100">
                <div class="col-md-6 col-sm-12 mt-3 text-center mx-auto py-5" >
                    <h4 class="text-center text-bold">Reservations Over time</h4>
                    <canvas id="reservationDates" style="position: relative; height:40vh; width:80vw"></canvas>
                </div>

                <div class="col-md-4 col-sm-12 mt-3 text-center mx-auto py-5" >
                    <h4 class="text-center text-bold">Reservations Status</h4>
                    <canvas id="reservationStatus" style="position: relative; height:40vh; width:80vw"></canvas>
                </div>
            </div>

            <div class="row w-100 border-top py-3">
                <div class="col-md-4 offset-md-1 col-sm-12 offset-sm-0">
                    <h4 class="text-center text-bold">Verified Users </h4>
                    <canvas id="verifiedUsers" style="height:40vh; width:;"></canvas>
                </div>

                <div class="col-md-4 offset-md-1 col-sm-12 offset-sm-0">
                    <h4 class="text-center text-bold">User Profile Completion</h4>
                    <canvas id="myChart" style="height:40vh; width:;"></canvas>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- /.content -->
@endsection


@section('js')

@endsection
