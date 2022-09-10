@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Create Feed',
            'link' => route('feeds.create')
        ],
    ];
    $title = 'Create Feed';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <form action="{{route('feeds.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Type</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Please select an option</option>
                    <option value="Fish Fry Mash">Fish Fry Mash</option>
                    <option value="Fish Starter">Fish Starter</option>
                    <option value="Fish Grower">Fish Grower</option>
                </textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="10" rows="4" class="form-control" required>
                </textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
            <div class="form-group">
                <a href="{{route('feeds.index')}}" class="btn btn-secondary">
                    Cancel
                </a>
                <button type="submit" class="btn btn-success">
                    Create
                </button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->
@endsection
