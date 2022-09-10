@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Ponds',
            'link' => route('ponds.index')
        ],
        [
            'name' => $pond->name,
            'link' => route('admin.ponds.delete', $pond->id)
        ]
    ];
    $title = 'Delete Pond';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <p style="font-size: 2rem">Are you sure you want to delete this category <span class="font-weight-bold">({{$pond->name}})</span> ? </p>
        <form action="{{route('ponds.destroy', $pond->id)}}" method="POST">
            @csrf
            @method('DELETE')            
            <div class="form-group">
                <a href="{{route('ponds.index', $pond->id)}}" class="btn btn-secondary">
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
