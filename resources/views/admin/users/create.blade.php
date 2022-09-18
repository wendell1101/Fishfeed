@php
    $links = [
        [
            'name' => 'Home',
            'link' => '/admin/dashboard'
        ],
        [
            'name' => 'Create User',
            'link' => route('users.index')
        ],
    ];
    $title = 'Create User';
@endphp 

@extends('admin.base')

@section('content')
<!-- Content Header (Page header) -->
<x-admin-header :links="$links" :title="$title"/>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid px-2 py-4 bg-white">
        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">Personal Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-2 form-group">
                        <label for="first_name">First name</label>
                        <input type="text" name="first_name" id="first_name" value="{{old('first_name')}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="middle_name">Middle name</label>
                        <input type="text" name="middle_name" id="middle_name" value="{{old('middle_name')}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" name="last_name" id="last_name" value="{{old('last_name')}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="suffix">Suffix</label>
                        <input type="text" name="suffix" id="suffix" value="{{old('suffix')}}" class="form-control">
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="user_name">Username</label>
                        <input type="text" name="user_name" id="user_name"  value="{{old('user_name')}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        @error('password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="civil_status">Civil Status</label>
                        <select name="civil_status" id="civil_status" class="form-control" required>
                            <option value="">Please select an option</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widowed">Widowed</option>
                            <option value="separated">Separated</option>
                            <option value="divorced">Divorced</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="sex">Sex</label>
                        <select name="sex" id="sex" class="form-control" required>
                            <option value="">Please select an option</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-2 form-group">
                        <label for="religion">Religion</label>
                        <input type="text" name="religion" id="religion"  value="{{old('religion')}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" name="birth_date" id="birth_date" value="{{old('birth_date')}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="number" name="contact_number" id="contact_number" value="{{old('contact_number')}}" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-2 form-group">
                        <label for="role">Role</label><br>
                        <input type="checkbox" name="is_admin"> 
                        <span>Admin</span>
                    </div>
                </div>
            </div>

            <div class="card-header">Address Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2 form-group">
                        <label for="house_number">House Number</label>
                        <input type="text" name="house_number"  id="house_number" value="{{old('house_number')}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="street">Street</label>
                        <input type="text" name="street" id="street" value="{{old('street')}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="barangay">Barangay</label>
                        <input type="text" name="barangay" id="barangay" value="{{old('barangay')}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="province">Province</label>
                        <input type="text" name="province" id="province" value="{{old('province')}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" value="{{old('city')}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="zip_code">Zip code</label>
                        <input type="text" name="zip_code" id="zip_code" value="{{old('zip_code')}}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" value="{{old('country')}}" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a href="{{route('users.index')}}" class="btn btn-secondary">
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
