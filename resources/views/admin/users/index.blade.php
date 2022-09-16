@php
$links = [
[
'name' => 'Home',
'link' => '/admin/dashboard'
],
[
'name' => 'Users',
'link' => route('users.index')
]
];
$title = 'Users';
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
            <a href="{{route('users.create')}}" class="btn btn-success px-3 ml-auto" style="font-size: rem">Create</a>
        </div>
        @if($users->count())
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $key => $user)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>
                            <!-- <img src="{{ asset('storage/' . $user->image) }}" alt="image" width="50" height="50"> -->
                            @if($user->image)
                                <img src="{{ asset('storage/user_images/' . $user->image) }}" class="img-circle elevation-2" alt="User Image"  width="50" height="50">
                            @else
                            <img src="https://ui-avatars.com/api/?name={{ $user?->first_name . ' ' . $user?->last_name }}" class="img-circle elevation-2"  width="50" height="50" alt="User Image">
                            @endif
                        </td>
                        <td>{{ $user->getUserFullName()}}</td>
                        <td>
                            {{ $user->email  }}
                        </td>
                        <td>
                            <div class="flex">
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <a href="{{route('admin.users.delete', $user->id)}}" class="btn btn-danger btn-sm">
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