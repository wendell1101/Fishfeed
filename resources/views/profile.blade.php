@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <h2>Profile information</h2>
    <div class="card">
        <form action="#" method="POST">
            @csrf
            <div class="card-header">Personal Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-2 form-group">
                        <label for="first_name">First name</label>
                        <input type="text" name="first_name" id="first_name" value="{{auth()->user()->first_name ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="middle_name">Middle name</label>
                        <input type="text" name="middle_name" id="middle_name" value="{{auth()->user()->middle_name ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" name="last_name" id="last_name" value="{{auth()->user()->last_name ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="suffix">Suffix</label>
                        <input type="text" name="suffix" id="suffix" value="{{auth()->user()->suffix ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="user_name">Username</label>
                        <input type="text" name="user_name" id="user_name" value="{{auth()->user()->user_name ?? ''}}" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{auth()->user()->email ?? ''}}" class="form-control" required>
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
                        <input type="text" name="religion" id="religion" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" name="contact_number" id="contact_number" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="card-header">Address Information</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2 form-group">
                        <label for="house_number">House Number</label>
                        <input type="text" name="house_number" id="house_number" class="form-control">
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="street">Street</label>
                        <input type="text" name="street" id="street" class="form-control">
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="barangay">Barangay</label>
                        <input type="text" name="barangay" id="barangay" class="form-control">
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="province">Province</label>
                        <input type="text" name="province" id="province" class="form-control">
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" class="form-control">
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="zip_code">Zip code</label>
                        <input type="text" name="zip_code" id="zip_code" class="form-control">
                    </div>
                    <div class="col-md-6 mb-2 form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Update</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection