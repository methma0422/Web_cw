<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Services\BookService;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    private BookService $service;
    public function __construct(BookService $service){
        $this->service = $service;
    }
    public function index(){
        $books=$this->service->getAll();
        return view('modules.books.index',compact('books'));
    }
    public function create(){
        $branches=Branch::all();
        return view('modules.books.create',compact('branches'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255|string',
            'author' => 'required|max:255|string',
            'isbn' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'branch_id' => 'required|exists:branches,id',
        ]);
        $this->service->create($validated);
        return redirect(url('/books'))->with('success','Book created successfully');
    }
    public function show($id){
        $book=$this->service->findById($id);
        $branches=Branch::all();
        return view('modules.books.update',compact('book','branches'));

    }
    public function update(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255|string',
            'author' => 'required|max:255|string',
            'isbn' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'branch_id' => 'required|exists:branches,id',
        ]);
        $this->service->update($validated);
        return redirect(url('/books'))->with('success','Book updated successfully');
    }
    public function destroy($id){
        $this->service->delete($id);
        return redirect(url('/books'))->with('success','Book deleted successfully');
    }
}
