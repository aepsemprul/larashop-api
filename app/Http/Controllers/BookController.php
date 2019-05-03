<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Resources\Book as BookResource;
use App\Http\Resources\Books as BookCollectionResource;

class BookController extends Controller
{
    public function index(){
        $books = new BookCollectionResource(Book::paginate());
        return $books;
    }

    public function cetak($judul)
    {
        return $judul;
    }

    public function view($id)
    {
        //$book = DB::select('select * from books where id = ?', [ $id ]);
        $book = new BookResource(Book::find($id));
        return $book;
    }
}
