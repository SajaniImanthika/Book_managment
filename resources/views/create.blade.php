@extends("layouts.app")
@section("content")
        <P style="font-size:20px; font-weight:bold">Create Page</p>

        <form action="{{route('book.store')}}" class="was-validated" method="POST" novalidate>
            @csrf
        <div class="form-group has-validation">
            <label for="book_title" style="font-weight:bold">Book Title </label>
            <input type="text" name="book_title" id="book_title" class="form-control" required>
</div>

        <div class="form-group has-validation">
            <label for="book_author" style="font-weight:bold">Book Author </label>
            <input type="text" name="book_author" id="book_author" class="form-control" required>
</div>

        <div class="form-group has-validation">
            <label for="published_year" style="font-weight:bold">Published Year </label>
            <input type="number" name="published_year" id="published_year" class="form-control" required>
</div>
</br>
</br>
        <button type="submit" class="btn btn-info">Add </button>

</form>

@endsection