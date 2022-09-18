@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Users',
            'link' => route('users.index')
        ],
        [
            'name' => $user->name,
            'link' => route('admin.users.delete', $user->id)
        ]
    ];
    $title = 'Delete User';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <p style="font-size: 2rem">Are you sure you want to delete this user <span class="font-weight-bold">({{$user->getUserFullName()}})</span> ? </p>
        <form action="{{route('users.destroy', $user->id)}}" method="POST">
            @csrf
            @method('DELETE')            
            <div class="form-group">
                <a href="{{route('users.index', $user->id)}}" class="btn btn-secondary">
                    Cancel
                </a>
                <button type="submit" class="btn btn-danger">
                    Yes, Delete
                </button>
              
            </div>
        </form>
    </div>
</section>
<!-- /.content -->
@endsection
