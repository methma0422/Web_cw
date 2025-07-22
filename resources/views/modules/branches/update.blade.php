@extends('layouts.admin-master')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Whoops!</strong>There are some issues with your inputs.
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Update Branch Details</h2>
            <form action="{{url('/branches/update')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$branch->id}}">
                <div class="form-group mb-3">
                    <label for="branchName">Branch Name</label>
                    <input type="text" name="name" value="{{$branch->name}}" class="form-control" id="branchName" placeholder="Enter branch name">
                </div>
                <div class="form-group mb-3">
                    <label for="branchProvince">Province</label>
                    <input type="text" name="province" value="{{$branch->province}}" class="form-control" id="branchProvince" placeholder="Enter the province">
                </div>
                <div class="form-group mb-3">
                    <label for="branchDistrict">ISBN</label>
                    <input type="text" name="district" value="{{$branch->district}}" class="form-control" id="branchDistrict" placeholder="Enter the district">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
