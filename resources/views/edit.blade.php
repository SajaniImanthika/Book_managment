@extends("layouts.app")
@section("content")

<P style="font-size:20px; font-weight:bold">Edit Page</p>
<form action="{{route('book.update',$books->id)}}" method="POST">
       @csrf 
       @method("PUT")
<div class="form-group has-validation">
            <label for="book_title" style="font-weight:bold">Book Title </label>
            <input type="text" name="book_title" id="book_title" class="form-control" value="{{$books->book_title}}" required>
</div>

        <div class="form-group has-validation">
            <label for="book_author" style="font-weight:bold">Book Author </label>
            <input type="text" name="book_author" id="book_author" class="form-control" value="{{$books->book_author}}" required>
</div>

        <div class="form-group has-validation">
            <label for="published_year" style="font-weight:bold">Published Year </label>
            <input type="number" name="published_year" id="published_year" class="form-control" value="{{$books->published_year}}"required>
</div>
</br>
</br>
<button type="submit" class="btn btn-primary">update </button>
<a href="{{route('home')}}" class="btn btn-primary">Cancel</a>
</form>

@endsection