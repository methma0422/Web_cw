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
            <h2 class="card-title">Manage Books</h2>
            <a href="{{url('/books/create')}}" class="btn btn-success mb-3">Add New Books</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->isbn}}</td>
                        <td>{{$book->price}}</td>
                        <td>{{$book->quantity}}</td>
                        <td>
                            <a href="{{'/books/'.$book->id}}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{'/books/delete/'.$book->id}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
