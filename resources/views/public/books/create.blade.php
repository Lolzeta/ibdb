@extends('public.layout')

@section('title', 'New book')

@section('content')
<form action="/books" method="post" novalidate>

    @csrf

    @include('public.books.partials.form')


    <button type="submit" class="btn btn-primary">Save Book</button>
</form>
@endsection
