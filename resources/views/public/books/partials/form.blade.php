<div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control {{$errors->has('title')?"is-invalid":""}}" id="title" name="title" placeholder="Introduce the book title" required value='{{isset($book)?$book->title:old('title')}}'>
        @if($errors->has('title'))
        <div class="invalid-feedback">
          {{$errors->first('title')}}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control {{$errors->has('author')?"is-invalid":""}}" id="author" name="author" placeholder="Introduce the book author" required value='{{isset($book)?$book->author:old('author')}}'>
        @if($errors->has('author'))
        <div class="invalid-feedback">
          {{$errors->first('author')}}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control {{$errors->has('description')?"is-invalid":""}}" id="description" name="description" rows="3" placeholder="Book Description" required>{{isset($book)?$book->description:old('description')}}</textarea>
        @if($errors->has('description'))
        <div class="invalid-feedback">
          {{$errors->first('description')}}
        </div>
        @endif
    </div>
