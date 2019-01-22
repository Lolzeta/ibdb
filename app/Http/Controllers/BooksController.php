<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
          'title'       =>    'required|min:3',
          'author'      =>    'required|min:3',
          'description' =>    'required'
        ], [
          'title.required'          =>   'El titulo es necesario',
          'title.min'               =>   'El titulo debe de tener minimo tres caracteres',
          'author.required'         =>   'El autor es necesario',
          'author.min'              =>   'El autor debe tener minimo tres caracteres',
          'description.required'    =>   'La descripcion es necesaria'
        ]);
      Book::create([
        'title' => request('title'),
        'slug' => str_slug(request('title'),'-'),
        'author' => request('author'),
        'description' => request('description')
      ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();

        return view('public.books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //$book = Book::findOrFail($id);

        return view('public.books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Book $book)
    {
        //$book = Book::findOrFail($id);
        request()->validate([
          'title'       =>    'required|min:3',
          'author'      =>    'required|min:3',
          'description' =>    'required'
        ], [
          'title.required'          =>   'El titulo es necesario',
          'title.min'               =>   'El titulo debe de tener minimo tres caracteres',
          'author.required'         =>   'El autor es necesario',
          'author.min'              =>   'El autor debe tener minimo tres caracteres',
          'description.required'    =>   'La descripcion es necesaria'
        ]);
        $book->update([
        'title' => request('title'),
        'slug' => str_slug(request('title'),'-'),
        'author' => request('author'),
        'description' => request('description')
        ]);

        return redirect('/books/'.$book->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //$book = Book::findOrFail($id)->delete();
        $book->delete();

        return redirect('/');
    }
}
