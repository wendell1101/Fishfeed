@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Services',
            'link' => route('services.index')
        ]
    ];
    $title = 'Services';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <x-alert />
        <div class="ml-auto float-right mb-2">
            <a href="{{route('services.create')}}" class="btn btn-success px-3 ml-auto" style="font-size: rem">Create</a>
        </div>
        <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($services))
            @foreach($services as $key => $service)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{ $service->category->name}}</td>
                <td>{{$service->name}}</td>
                <td>{{$service->price == 0 ? 'Price may vary' :  'PHP ' .$service->price}}</td>
                <td> 
                    <div class="flex">
                        <a href="{{route('services.edit', $service->id)}}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <a href="{{route('admin.services.delete', $service->id)}}" class="btn btn-danger btn-sm">
                            Delete
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <p>No Service Found</p>
            @endif            
        </tbody>
    </table>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection


@section('js')
    <script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
    </script>
@endsection
