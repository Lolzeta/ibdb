@extends('public.layout')

@section('title', 'New book')

@section('content')
<form action="/books" method="post" novalidate>

    @csrf

    @if($errors->any())
    <!-- Validation -->
    <div class="errors">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Introduce the book title" required>
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="author" name="author" placeholder="Introduce the book author" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Book Description" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save Book</button>
</form>
@endsection
