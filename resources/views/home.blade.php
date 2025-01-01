@extends("layouts.app")
@section("content")
        <P style="font-size:20px; font-weight:bold">Home Page</p>
        <a href="{{route('create')}}" class="btn btn-primary">Create</a>
</br>
</br>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Published Year</th>
                    <th>Action</th>                                    
</tr>
</thead>
@foreach($books as $book)
<tbody>
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->book_title}}</td>
        <td>{{$book->book_author}}</td>
        <td>{{$book->published_year}}</td>
        <td>
            <a href="{{route('book.show',$book->id)}}" class="btn btn-success">View </a>
            <a href="{{route('book.edit',$book->id)}}" class="btn btn-warning">Edit </a>
            <form action="{{route('book.destroy',$book->id)}}" method="POST" style="display:inline">
                @csrf 
                @method("DELETE")
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
</tbody>
@endforeach
@endsection
