<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Author;
use App\Book;

class RouteController extends BaseController{

    public function authors() {
        $authors = Author::paginate(3);
        return view('authors',[
            'authors' => $authors,
            ]);
    }

    public function books($id) {
        $books = Book::select('books.id', 'books.name', 'books.book_image', 'authors_id', 'authors.name_author', 'authors.image')
        ->join('authors','books.authors_id','=','authors.id')
        ->where('authors_id',$id)
        ->get();
        return view('books',[
            'books' => $books
            ]);
    }
}