@extends("layouts.app")
@section("content")

<P style="font-size:20px; font-weight:bold">View Page</p>

<a href="{{route('home')}}" class="btn btn-primary">Back</a>

{{csrf_field()}}
<div class="form-group has-validation">
            <label for="book_title" style="font-weight:bold">Book Title </label>
            <input type="text" class="form-control" value="{{$books->book_title}}" readonly>
</div>

        <div class="form-group has-validation">
            <label for="book_author" style="font-weight:bold">Book Author </label>
            <input type="text" class="form-control" value="{{$books->book_author}}" readonly>
</div>

        <div class="form-group has-validation">
            <label for="published_year" style="font-weight:bold">Published Year </label>
            <input type="number" class="form-control" value="{{$books->published_year}}"readonly>
</div>
</br>
</br>


@endsection