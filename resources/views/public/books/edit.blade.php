@extends('public.layout')

@section('title', 'New book')

@section('content')
<form action="/books/{{ $book->id }}" method="post" novalidate>

    @csrf
    @method('patch')

    @include('public.books.partials.form')



    <button type="submit" class="btn btn-primary">Edit Book</button>
    </form>
  @endsection
