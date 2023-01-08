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
                        <th>Calculation Name</th>
                        <th>Result</th>
                        <th>Date Calculated</th>
                        <th>Suggested date of transfer (2 months)</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($calculationHistories as $key => $history)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{ $history->calculation_name}}</td>
                        <td>{{ $history->result}}</td>
                        <td>{{ $history->date_time_calculated}}</td>
                        <td>{{ $history->date_transfer}}</td>
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