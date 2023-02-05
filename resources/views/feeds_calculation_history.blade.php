@extends('layouts.app')

@section('content')
<div class="container">
    <div style="min-height:80vh" class="mt-4 card p-2 mb-2">
        <div class="table-responsive">
        {{$calculationHistories->links()}}
            @if(count($calculationHistories))
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
                        <th>Date Calculated</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($calculationHistories as $key => $history)
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
                        <td>{{ $history->getConvertedDateTimeAttribute($history->created_at)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h2 class="text-center mt-5">No Results found</h2>
            @endif
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );
</script>
@endsection