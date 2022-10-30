@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h2 class="mb-0">User List</h2>
            <div class="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="enter username search" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">search</button>
                </div>
            </div>
            <a href="{{ route('users.create') }}" class="btn btn-info"><i class="bi bi-plus-circle-fill"></i> Add New</a>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center text-bg-secondary bg-gradient">
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date of birth</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Marital</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->fname }}</td>
                            <td>{{ $user->lname }}</td>
                            <td class="text-capitalize">{{ $user->gender }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ date('d-M-Y', strtotime($user->dob)) }}</td>
                            <td>{{ $user->phone }}</td>
                            <td class="text-capitalize">{{ $user->marital_status }}</td>
                            <td>No</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-danger">Empty Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
@endsection
