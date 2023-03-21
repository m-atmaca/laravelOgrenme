<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function kitapFonk(){
        $books = Book::get();
        return view('books.index',compact('books'));
    }

    public function kitapEkleFonk(){
        return view('books.Ekle');
    }

    public function store(Request $request){
        $book= new Book();
        $book->isim =$request->isim;
        $book->fiyat =$request->fiyat;
        $book->save();



        return redirect()->back();
    }




}
