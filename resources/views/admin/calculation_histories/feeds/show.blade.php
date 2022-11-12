@php
$links = [
[
'name' => 'Home',
'link' => '/admin/dashboard'
],
[
'name' => 'Feed Calculation Histories',
'link' => route('feed_calculation_histories')
],
[
'name' => 'By ' . $user->getUserFullName(),
'link' => route('feed_calculation_histories.show', $user->id)
]
];
$title = 'Feed Calculation Histories';
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
            <table id="example" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Calculation ID</th>
                        <th>ABW</th>
                        <th>Feed Rate</th>
                        <th>Types of Feed</th>
                        <th>Survival Rate</th>
                        <th>DFR</th>
                        <th>Monthly DFR</th>
                        <th>Sacks per month</th>
                        <th>Size of fish</th>
                        <th>Date Calculated</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($calculations as $key => $history)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{ $history->calculation_id}}</td>
                        <td>{{ $history->abw}}</td>
                        <td>{{ $history->feed_rate}} % </td>
                        <td>{{ $history->typs_of_feed}}</td>
                        <td>{{ $history->survival_rate}} % </td>
                        <td>{{ $history->dfr}} kgs</td>
                        <td>{{ $history->monthly_dfr}} kgs</td>
                        <td>{{ $history->sacks_per_month}} pcs</td>
                        <td>{{ ($history->size_of_fish > 0) ? $history->size_of_fish : 'N/A' }}</td>
                        <td>{{ $history->getConvertedDateTimeAttribute($history->created_at)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @else
        <p>No Feed Calculation History Found</p>
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