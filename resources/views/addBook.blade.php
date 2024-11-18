@extends('layout')

@section('content')
<h4>Add Book</h4>
<form action="{{ route('book.add') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Book Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="author_id">Author</label>
        <select name="author_id" id="author_id" class="form-control" required>
            <option value="" disabled selected>Select Author</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="genre_id">Genre</label>
        <select name="genre_id" id="genre_id" class="form-control" required>
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="publish_date">Publish Date</label>
        <input type="date" name="publish_date" id="publish_date" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="photo">Cover Photo</label>
        <input type="file" name="photo" id="photo" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Add Book</button>
</form>
@endsection
