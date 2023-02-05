@php
$links = [
[
'name' => 'Home',
'link' => '/admin/dashboard'
],
[
'name' => 'Users Detail',
'link' => route('users.index')
],
[
'name' => $user->name,
'link' => route('users.edit', $user->id)
]
];
$title = 'User Detail';
@endphp

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title" />
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <a href="{{route('users.index')}}" class="bg-secondary text-white py-1 px-4 mb-2"><span class="text-white">Back</span></a>
        <div class="row mt-2">
            <div class="col-12 border-bottom pb-2 mb-2">
                <h2>Personal Information</h2>
            </div>

            <div class="col-md-4 mb-2">
                <span>First name:</span> <span class="font-weight-bold">{{$user->first_name}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Middle name:</span> <span class="font-weight-bold">{{$user->middle_name}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Last name:</span> <span class="font-weight-bold">{{$user->last_name}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Suffix:</span> <span class="font-weight-bold">{{$user->suffix? $user->suffix : 'N/A'}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Email:</span> <span class="font-weight-bold">{{$user->email}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Username:</span> <span class="font-weight-bold">{{$user->user_name}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Civil Status:</span> <span class="font-weight-bold">{{$user->civil_status}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Sex:</span> <span class="font-weight-bold">{{$user->sex}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Religion:</span> <span class="font-weight-bold">{{$user->religion}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Birth Date:</span> <span class="font-weight-bold">{{$user->birth_date}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Contact Number:</span> <span class="font-weight-bold">{{$user->contact_number}}</span>
            </div>

            <div class="col-12 border-bottom pb-2 mb-2">
                <h2>Address Information</h2>
            </div>
            <div class="col-md-4 mb-2">
                <span>House Number:</span> <span class="font-weight-bold">{{$user->house_number}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Street:</span> <span class="font-weight-bold">{{$user->street}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Barangay:</span> <span class="font-weight-bold">{{$user->barangay}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Province:</span> <span class="font-weight-bold">{{$user->province}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>City:</span> <span class="font-weight-bold">{{$user->city}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Zip Code:</span> <span class="font-weight-bold">{{$user->zip_code}}</span>
            </div>
            <div class="col-md-4 mb-2">
                <span>Country:</span> <span class="font-weight-bold">{{$user->country}}</span>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection