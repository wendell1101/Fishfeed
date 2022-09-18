@php
$links = [
[
'name' => 'Home',
'link' => '/admin/dashboard'
],
[
'name' => 'Pond Detail | ' . $pond->name,
'link' => route('ponds.show', $pond->id)
],

];
$title = 'Pond Detail';
@endphp

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title" />
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <a href="{{route('ponds.index')}}" class="bg-secondary text-white py-1 px-4 mb-2"><span class="text-white">Back</span></a>
        <div class="row mt-2">
            <h3 class="text-center fw-bold">Pond Detail</h3>
        </div>
        <div class="row mt-2 mb-5 mx-auto">
            <div style="width:100%">
                <img src="{{ asset('storage/' . $pond->image) }}" class="fish-pond-img rounded-2" width="100%" height="600px" />
                <div class="p-3">
                    <p class="text-muted">
                        <span class="font-weight-bold">Name: </span>
                        <span style="font-size: 2rem" class="ml-2">{{strtoupper($pond->name)}}</span>
                    </p>
                    <p class="text-muted">
                        <span class="font-weight-bold">Type: </span>
                        {{$pond->type}}
                    </p>
                    <p class="text-muted">
                        <span class="font-weight-bold">Description: </span><br>
                        {{$pond->description}}
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection