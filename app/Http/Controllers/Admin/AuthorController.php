<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::paginate();
        
        return view('admin.author.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(Request $request)
    {
       $this->validate($request, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'biography' => 'required|max:2000',
            'image' => 'required|image|max:2048',
        ]);

        $author = new Author;
        $author->name = $request->name;
        $author->lastname = $request->last_name;
        $author->biography = $request->biography;
        //$author->image = $request->image;
        $imagenes = $request->file('image')->store('public/images');
        $url = Storage::url($imagenes);
        $author->image = $url;
        


        $author->save();

        return redirect()->route('author.index')->with('success', 'Author created successfully');

      

    }

    public function show($author)
    {
        return view('admin.author.show', compact('author'));
    }

    public function edit($id)
    {
        $author = Author::find($id);

        return view('admin.author.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'biography' => 'required|max:2000',
            
        ]);

        $author = Author::find($id);
        $author->name = $request->name;
        $author->lastname = $request->last_name;
        $author->biography = $request->biography;
        $author->update_at = now();

        $author->save();

        return redirect()->route('author.index')->with('success', 'Author updated successfully');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();

        return redirect()->route('author.index')->with('success', 'Author deleted successfully');
    }



}
