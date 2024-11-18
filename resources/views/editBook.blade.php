@extends('layout')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Book Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <select class="form-select" id="author" name="author_id">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" id="genre" name="genre_id">
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $genre->id == $book->genre_id ? 'selected' : '' }}>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="publish_date" class="form-label">Publish Date</label>
            <input type="date" name="publish_date" id="publish_date" class="form-control" value="{{$book->publish_date}}" required>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Book Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
            <img src="{{ asset('storage/'.$book->photo) }}" alt="Book Image" width="85px">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{$book->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
@endsection
