@php
$links = [
    [
    'name' => 'Home',
    'link' => '/admin/dashboard'
    ],
    [
    'name' => 'Calculation Histories',
    'link' => route('pond_calculation_histories')
    ],
    [
    'name' => 'By ' . $user->getUserFullName(),
    'link' => route('pond_calculation_histories.show', $user->id)
    ]
];
$title = 'Pond Calculation Histories';
@endphp

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title" />
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <x-alert />        
        @if($calculations->count())
        <div class="table-responsive">

            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                <tr>
                        <th>#</th>
                        <th>Calculation Name</th>
                        <th>Result</th>
                        <th>Date Calculated</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($calculations as $key => $history)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{ $history->calculation_name}}</td>
                        <td>{{ $history->result}}</td>
                        <td>{{ $history->getConvertedDateTimeAttribute($history->created_at)}}</td>
                    </tr>
                    @endforeach          
                </tbody>
            </table>
        </div>
        @else
            <p>No Pond Calculation History Found</p>
        @endif
    </div>
</section>
<!-- /.content -->
@endsection


@section('js')
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
</script>
@endsection