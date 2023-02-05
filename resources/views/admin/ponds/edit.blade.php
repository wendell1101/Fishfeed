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
            'link' => route('ponds.edit', $pond->id)
        ]
    ];
    $title = 'Edit Pond';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <form action="{{route('ponds.update', $pond->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$pond->name ?? ''}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Type</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Please select an option</option>
                    <option value="rectangle" @if($pond->type == 'rectangle') selected @endif>Rectangle</option>
                    <option value="round" @if($pond->type == 'round') selected @endif>Round</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="10" rows="4" class="form-control" required>
                    {{$pond->description}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <img src="{{ asset('storage/' . $pond->image) }}" alt="image" class="img-fluid shadow mt-3" width="300" height="300">
            </div>
            <div class="form-group">
                <a href="{{route('ponds.index')}}" class="btn btn-secondary">
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
