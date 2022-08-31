@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Create Service',
            'link' => route('services.create')
        ],
    ];
    $title = 'Create Service';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <form action="{{route('services.store')}}" method="POST">
            @csrf
            @if($categories)
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control  @error('category_id') is-invalid @enderror">
                <option value="">Please select an option</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{strtoupper($category->name)}}</option>
                    @endforeach
                </select>
                @error('category_id') <span class="text-danger">Category is required</span> @enderror
            </div>
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" step=".01" min="0" class="form-control @error('price') is-invalid @enderror">
                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="10" rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <a href="{{route('services.index')}}" class="btn btn-secondary">
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
