@extends('layouts.app')

@section('content')
<div class="container">
    <div style="min-height:80vh" class="mt-4">
        <div class="table-responsive">
            @if(count($calculationHistories))
            <table id="example" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Calculation Name</th>
                        <th>Result</th>
                        <th>Date Calculated</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($calculationHistories as $key => $history)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{ $history->calculation_name}}</td>
                        <td>{{ $history->result}}</td>
                        <td>{{ $history->created_at}}</td>
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
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
</script>
@endsection