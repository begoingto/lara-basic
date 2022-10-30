@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h2 class="mb-0">Create User form</h2>
            <a href="{{ route('users.index') }}" class="btn btn-warning"><i class="bi bi-arrow-return-left"></i> Back</a>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{route('users.store')}}" method="POST" autocomplete="off">
                @csrf
                <div class="col-md-4">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter firstname" autofocus>
                </div>
                <div class="col-md-4">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter lastname">
                </div>
                <div class="col-md-4">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select">
                        <option selected disabled>Choose gender...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" autocomplete="off">
                </div>
                <div class="col-md-4">
                    <label for="dob" class="form-label">Date Of Birth</label>
                    <input type="date" name="dob" class="form-control" id="dob">
                </div>
                <div class="col-md-4">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Marital Status</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="marital_status" id="single"
                            value="single" checked>
                        <label class="form-check-label" for="single">Single</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="marital_status" id="married"
                            value="married">
                        <label class="form-check-label" for="married">Married</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea name="bio" id="bio" class="form-control" placeholder="Enter bio"></textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-outline-success px-4 text-uppercase"><i class="bi bi-check-all"></i>
                        Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
