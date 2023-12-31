<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class authorController extends Controller
{

    public function GetAuthors()
    {
        $data['authors'] = Author::all();
        return view('authors', $data);
    }

    public function GetAuthor($id)
    {
        $data['author'] = Author::find($id);
        $data['author']['books'] = count(Book::where('Author',$id)->get());
        return view('author', $data);
    }

    public function CreateAuthor()
    {
        return view('authoradd');
    }


    public function StoreAuthor(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'Name' => 'required|string',
            'Age' => 'required|integer|min:2',
            'Country' => 'required|string',
        ]);

        //create new author and store to database from validated data
        $author = new Author();
        $author->name = $validatedData['Name'];
        $author->age = $validatedData['Age'];
        $author->country = $validatedData['Country'];
        $author->save();

        // Redirect to index with a success message
        return redirect('/')->with('message', 'Author added successfully!');
    }

    public function EditAUthor($id){
        $data['auth'] = Author::find($id);
        if(!$data['auth']){
            
            return response()->json(['error' => 'Author not available right now'], 503);
        }
        return view('editauthor',$data);
    }

    public function UpdateAuthor(Request $request , $id){
        {

        $Author = Author::find($id);

        if (!$Author) {
            return response()->json(['error' => 'Author not found'], 404);
        }


        $validatedData = $request->validate([
            'Name' => 'required|string',
            'Age' => 'required|integer|min:2',
            'Country' => 'required|string',

        ]);

        $Author->update($validatedData);


        return redirect('/authors')->with(['message' => 'Author updated successfully']);
    }
}
    //
}
