<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    //

    public function GetBooks(){
        $data['books'] = Book::all();
        return view ('books',$data);
    }

    public function GetBook($id){
        $data['book'] = Book::find($id);
        $data['book']['author'] = Author::find($data['book']->Author);
        return view('book',$data);
    }



    public function CreateBook(){
        $data['authors'] = Author::all();
        return view ('bookadd',$data);
    }

    public function StoreBook(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'Name' => 'required|string',
            'ISBN' => 'required|integer|min:13',
            'Author' => 'required|integer',
        ]);
        
        //create new book and store to database from validated data
        $new_book = new Book();
        $new_book->Name = $validatedData['Name'];
        $new_book->ISBN = $validatedData['ISBN'];
        $new_book->Author = $validatedData['Author'];
        $new_book->save();

        // Redirect to index with a success message
        return redirect('/')->with('message', 'Book added successfully!');
    }
}
