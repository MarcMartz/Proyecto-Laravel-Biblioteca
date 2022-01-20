<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\category;
use App\Models\author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = book::paginate();
        
        return view('admin.book.index', compact('books'));
    }

    public function create()
    {
        $authors = author::all();
        $categories = category::all();
        return view('admin.book.create', compact('authors'), compact('categories'));
    }

    public function store(Request $request)
    {
        /*
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:2000',
            
            
        ]);
        */

        $book = new book;
        $book->title = $request->title;
        $book->isbn = $request->isbn;
        $book->publisher = $request->publisher;
        $book->year = $request->year;
        $book->description = $request->description;
        $imagenes = $request->file('image')->store('public/imagesBook');
        $url = Storage::url($imagenes);
        $book->image = $url;
        $book->category_id = $request->category_id;
        
        
       
        $book->save();
       
        $status = "1";

        $book->status()->attach($status);

        return redirect()->route('book.index')->with('success', 'Book created successfully');

      
    }

    public function show($book)
    {
        return view('admin.book.show', compact('book'));
    }

    public function edit($id)
    {
        $book = book::find($id);

        return view('admin.book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|unique:books|max:255',
            'description' => 'required|max:2000',
            'image' => 'required|image|max:2048',
            'author_id' => 'required',
            'category_id' => 'required',
        ]);

        $book = book::find($id);
        $book->title = $request->title;
        $book->description = $request->description;
        //$book->image = $request->image;
        $imagenes = $request->file('image')->store('public/images');
        $url = Storage::url($imagenes);
        $book->image = $url;
        $book->author_id = $request->author_id;
        $book->category_id = $request->category_id;
        
        $book->save();

        return redirect()->route('book.index')->with('success', 'Book updated successfully');

      
    }

    public function destroy($id)
    {
        $book = book::find($id);
        $book->delete();

        return redirect()->route('book.index')->with('success', 'Book deleted successfully');
    }

}
