@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Categories',
            'link' => route('categories.index')
        ],
        [
            'name' => $category->name,
            'link' => route('admin.categories.delete', $category->id)
        ]
    ];
    $title = 'Delete Category';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <p style="font-size: 2rem">Are you sure you want to delete this category <span class="font-weight-bold">({{$category->name}})</span> ? </p>
        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
            @csrf
            @method('DELETE')            
            <div class="form-group">
                <a href="{{route('categories.index', $category->id)}}" class="btn btn-secondary">
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
