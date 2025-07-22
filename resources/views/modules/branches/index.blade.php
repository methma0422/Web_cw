@extends('layouts.admin-master')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Manage Branches</h2>
            <a href="{{url('/branches/create')}}" class="btn btn-success mb-3">Add New Branches</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Branch Name</th>
                    <th>Province</th>
                    <th>District</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($branches as $branch)
                    <tr>
                        <td>{{$branch->name}}</td>
                        <td>{{$branch->province}}</td>
                        <td>{{$branch->district}}</td>
                        <td>
                            <a href="{{'/branches/'.$branch->id}}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{'/branches/delete/'.$branch->id}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
