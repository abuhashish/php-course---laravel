<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(){

        $books=Book::paginate(2);
       // dd($books);
       return view('books/index',[
           'allbooks'=> $books
       ]);
    }
    public function last3(){

        $books=Book::select('id','name','created_at')->orderBy('id','DESC')->take(3)->get();

       return view('books/last3',[
           'books'=> $books
       ]);
    }
    public function show($id){
        $book=Book::findOrFail($id);
        return view('books/show',[
            'book'=>$book
        ]);

    }
    public function search($keyword){
        $books=Book::where('name','like',"%$keyword%")->get();
        return view('books/search',[
            'books'=>$books
        ]);
    }
    public function create(){
        $cats=Cat::select('id','name')->get();
        return view('books/create',[
            'cats'=>$cats
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'desc'=>'required|string|min:20',
            'img'=>'required|image|max:2048',
            'cat_id'=>'required|exists:cats,id'

        ]);
     $path=   Storage::putFile("books",$request->file('img'));
       Book::create([
           'name'=>$request->name,
           'desc'=>$request->desc,
           'img'=>$path,
           'cat_id'=>$request->cat_id,

      ]);
      return redirect(url('books'));
    }

public function edit($id){
    $book=Book::findOrFail($id);

    return view('books/edit',[
        'book'=>$book
    ]);
}
public function update($id,Request $request ){
    $request->validate([
        'name'=>'required|string|max:255',
        'desc'=>'required|string|min:20'
    ]);
    $book=Book::findOrFail($id);
    $book->update([
        'name'=>$request->name,
        'desc'=>$request->desc
    ]);
    return redirect(url('books'));
}
public function delete($id){
    $book=Book::findOrFail($id);
    Storage::delete($book->img);
    $book->delete();
    return redirect(url('books'));
}
}
