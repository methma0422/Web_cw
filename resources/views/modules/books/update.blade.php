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
            <h2 class="card-title">Update Book Details</h2>
            <form action="{{url('/books/update')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$book->id}}">
                <div class="form-group mb-3">
                    <label for="bookTitle">Book Title</label>
                    <input type="text" name="title" value="{{$book->title}}" class="form-control" id="bookTitle" placeholder="Enter book title">
                </div>
                <div class="form-group mb-3">
                    <label for="bookAuthor">Author</label>
                    <input type="text" name="author" value="{{$book->author}}" class="form-control" id="bookAuthor" placeholder="Enter the author">
                </div>
                <div class="form-group mb-3">
                    <label for="bookISBN">ISBN</label>
                    <input type="text" name="isbn" value="{{$book->isbn}}" class="form-control" id="bookISBN" placeholder="Enter the ISBN">
                </div>
                <div class="form-group mb-3">
                    <label for="bookPrice">Price</label>
                    <input type="number" name="price" value="{{$book->price}}" class="form-control" id="bookPrice" placeholder="Enter the price">
                </div>
                <div class="form-group mb-3">
                    <label for="bookQuantity">Quantity</label>
                    <input type="number" name="quantity" value="{{$book->quantity}}" class="form-control" id="bookQuantity" placeholder="Enter the quantity">
                </div>
                <div class="form-group mb-3">
                    <label for="bookBranch">Branch</label>
                    <select name="branch_id" class="form-control" id="bookBranch">
                        <option value="">-- Select Branch --</option>
                        @foreach($branches as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
