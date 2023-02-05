@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Feeds',
            'link' => route('feeds.index')
        ],
        [
            'name' => $feed->name,
            'link' => route('feeds.edit', $feed->id)
        ]
    ];
    $title = 'Edit Feed';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <form action="{{route('feeds.update', $feed->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$feed->name ?? ''}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Type</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Please select an option</option>
                    <option value="Fish Fry Mash">Fish Fry Mash</option>
                    <option value="Fish Starter">Fish Starter</option>
                    <option value="Fish Grower">Fish Grower</option>
                    <option value="Fish Grower">Fish Finisher</option>
                </textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="10" rows="4" class="form-control" required>
                    {{$feed->description}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <img src="{{ asset('storage/' . $feed->image) }}" alt="image" class="img-fluid shadow mt-3" width="300" height="300">
            </div>
            <div class="form-group">
                <a href="{{route('feeds.index')}}" class="btn btn-secondary">
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
