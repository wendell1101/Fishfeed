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
            'link' => route('categories.edit', $category->id)
        ]
    ];
    $title = 'Edit Category';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <form action="{{route('categories.update', $category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$category->name ?? ''}}" class="form-control">
            </div>
            <div class="form-group">
                <a href="{{route('categories.index', $category->id)}}" class="btn btn-secondary">
                    Cancel
                </a>
                <button type="submit" class="btn btn-success">
                    Update
                </button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->
@endsection
