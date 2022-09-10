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
            'link' => route('admin.feeds.delete', $feed->id)
        ]
    ];
    $title = 'Delete Feed';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <p style="font-size: 2rem">Are you sure you want to delete this feed <span class="font-weight-bold">({{$feed->name}})</span> ? </p>
        <form action="{{route('feeds.destroy', $feed->id)}}" method="POST">
            @csrf
            @method('DELETE')            
            <div class="form-group">
                <a href="{{route('feeds.index', $feed->id)}}" class="btn btn-secondary">
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
