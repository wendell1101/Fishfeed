@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Users',
            'link' => route('users.index')
        ],
        [
            'name' => $user->name,
            'link' => route('users.edit', $user->id)
        ]
    ];
    $title = 'Edit User';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">Personal Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-2 form-group">
                        <label for="first_name">First name</label>
                        <input type="text" name="first_name" id="first_name" value="{{$user->first_name ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="middle_name">Middle name</label>
                        <input type="text" name="middle_name" id="middle_name" value="{{$user->middle_name ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" name="last_name" id="last_name" value="{{$user->last_name ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="suffix">Suffix</label>
                        <input type="text" name="suffix" id="suffix" value="{{$user->suffix ?? ''}}" class="form-control">
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="user_name">Username</label>
                        <input type="text" name="user_name" id="user_name" value="{{$user->user_name ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{$user->email ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="civil_status">Civil Status</label>
                        <select name="civil_status" id="civil_status" class="form-control" required>
                            <option value="">Please select an option</option>
                            <option value="single" @if($user->civil_status === 'single') selected @endif>Single</option>
                            <option value="married" @if($user->civil_status === 'married') selected @endif>Married</option>
                            <option value="widowed" @if($user->civil_status === 'widowed') selected @endif>Widowed</option>
                            <option value="separated" @if($user->civil_status === 'separated') selected @endif>Separated</option>
                            <option value="divorced" @if($user->civil_status === 'divorced') selected @endif>Divorced</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="sex">Sex</label>
                        <select name="sex" id="sex" class="form-control" required>
                            <option value="">Please select an option</option>
                            <option value="male" @if($user->sex === 'male') selected @endif>Male</option>
                            <option value="female" @if($user->sex === 'female') selected @endif>Female</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-2 form-group">
                        <label for="religion">Religion</label>
                        <input type="text" name="religion" id="religion"  value="{{$user->religion ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" name="birth_date" id="birth_date" value="{{$user->birth_date ?? ''}}"class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="number" name="contact_number" value="{{$user->contact_number ?? ''}}" id="contact_number" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="role">Role</label><br>
                        <input type="checkbox" name="is_admin" @if($user->is_admin) checked @endif id="is_admin"> 
                        <span>Admin</span>
                    </div>

                </div>
            </div>

            <div class="card-header">Address Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2 form-group">
                        <label for="house_number">House Number</label>
                        <input type="text" name="house_number" value="{{$user->house_number ?? ''}}" id="house_number" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="street">Street</label>
                        <input type="text" name="street" id="street" value="{{$user->street ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="barangay">Barangay</label>
                        <input type="text" name="barangay" id="barangay" value="{{$user->barangay ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="province">Province</label>
                        <input type="text" name="province" id="province" value="{{$user->province ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" value="{{$user->city ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="zip_code">Zip code</label>
                        <input type="text" name="zip_code" id="zip_code" value="{{$user->zip_code ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" value="{{$user->country ?? ''}}" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a href="{{route('users.index')}}" class="btn btn-secondary">
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
