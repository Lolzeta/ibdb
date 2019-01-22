<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Carga de la página de inicio.<
     */
    public function index()
    {
      $books = \App\Book::all();

      //return view('public.index', ['books' => $libros]);
      //return view('public.index', compact('books'));
      return view('public.pages.index')->withBooks($books);
    }

    public function contact()
    {
      return view('public.pages.contact');
    }

    public function about()
    {
      return view('public.pages.about');
    }
}
