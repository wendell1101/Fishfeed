@php
$links = [
[
'name' => 'Home',
'link' => '/admin/dashboard'
],
[
'name' => 'Calculation Histories',
'link' => route('calculation_histories.index')
]
];
$title = 'Calculation Histories';
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
        @if($users->count())
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $key => $user)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td><a href="{{route('users.show', $user->id)}}">{{ strtoupper($user->getUserFullName())}}</a></td>
                        <td>
                            {{ $user->email  }}
                        </td>
                        <td>
                            <a href="{{route('calculation_histories.show', $user->id)}}" class="btn btn-success">View calculations</a>
                        </td>
                    </tr>
                    @endforeach                   
                </tbody>
            </table>
        </div>
        @else
            <p>No User Found</p>
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