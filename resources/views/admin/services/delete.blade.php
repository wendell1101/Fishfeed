@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Services',
            'link' => route('services.index')
        ],
        [
            'name' => $service->name,
            'link' => route('admin.services.delete', $service->id)
        ]
    ];
    $title = 'Delete Service';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <p style="font-size: 2rem">Are you sure you want to delete this service <span class="font-weight-bold">({{$service->name}})</span> ? </p>
        <form action="{{route('services.destroy', $service->id)}}" method="POST">
            @csrf
            @method('DELETE')            
            <div class="form-group">
                <a href="{{route('services.index', $service->id)}}" class="btn btn-secondary">
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
