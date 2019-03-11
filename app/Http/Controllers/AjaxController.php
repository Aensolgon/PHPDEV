<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use Mail;

class AjaxController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();
        $username = $request->user_name;
        $useremail = $request->user_email;
        $author = $request->author;
        $namebook = $request->name_book;
        $b = Book::select('name')->where('id', $namebook)->get();
        foreach ($b as $item) {
            $book = $item;
        }

        Mail::send('emails.welcom', ['name' => $username, 'email' => $useremail, 'author' => $author, 'book'=>$book], function ($message) use($username, $useremail, $author, $book){
            $message->to($useremail)->subject('Book Shop');
        });
    }
}
