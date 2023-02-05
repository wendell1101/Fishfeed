@php
$links = [
[
'name' => 'Home',
'link' => '/admin/dashboard'
],
[
'name' => 'Ponds',
'link' => route('ponds.index')
]
];
$title = 'Ponds';
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
        <div class="ml-auto float-right mb-2">
            <a href="{{route('ponds.create')}}" class="btn btn-success px-3 ml-auto" style="font-size: rem">Create</a>
        </div>
        @if($ponds->count())
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($ponds as $key => $pond)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>
                            <img src="{{ asset('storage/' . $pond->image) }}" alt="image" width="50" height="50">
                        </td>
                        <td><a href="{{route('ponds.show', $pond->id)}}">{{ $pond->name}}</a></td>
                        <td>
                            {{ Str::words($pond->description, 1)  }}
                        </td>
                        <td>
                            <div class="flex">
                                <a href="{{route('ponds.edit', $pond->id)}}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <a href="{{route('admin.ponds.delete', $pond->id)}}" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach                   
                </tbody>
            </table>
        </div>
        @else
            <p>No Pond Found</p>
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