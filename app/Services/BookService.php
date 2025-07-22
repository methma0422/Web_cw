<?php

namespace App\Services;

use App\Models\Book;

class BookService
{
    public function create(array $data){
        $book_data=[
            'title'=>$data['title'],
            'author'=>$data['author'],
            'isbn'=>$data['isbn'],
            'price'=>$data['price'],
            'quantity'=>$data['quantity'],
            'branch_id'=>$data['branch_id'],
        ];
        Book::create($book_data);
    }
    public function getAll(){
        return Book::with('branch')->get();
    }
    public function findById($id){
        $book=Book::find($id);
        return $book;
    }
    public function update(array $data){
        $id=$data['id'];
        $book=Book::find($id);
        $book->title=$data['title'];
        $book->author=$data['author'];
        $book->isbn=$data['isbn'];
        $book->price=$data['price'];
        $book->quantity=$data['quantity'];
        $book->branch_id=$data['branch_id'];
        $book->save();
    }
    public function delete($id){
        $book=Book::find($id);
        $book->delete();
    }
}
