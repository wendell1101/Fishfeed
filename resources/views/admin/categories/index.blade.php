@php
$links = [
[
'name' => 'Home',
'link' => '/admin/dashboard'
],
[
'name' => 'Categories',
'link' => route('categories.index')
]
];
$title = 'Categories';
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
            <a href="{{route('categories.create')}}" class="btn btn-success px-3 ml-auto" style="font-size: rem">Create</a>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($categories))
                    @foreach($categories as $key => $category)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{ $category->name}}</td>
                        <td>
                            <div class="flex">
                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <a href="{{route('admin.categories.delete', $category->id)}}" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No Category Found</p>
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
        var table = $('#example').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
</script>
@endsection