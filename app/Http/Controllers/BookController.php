<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Author;


class BookController extends Controller
{
    public function bookList(Request $request, $genre_id = 0)
    {
        $search = $request->input('search');

        if ($genre_id == 0) {
            if ($search) {
                $books = Book::where('name', 'like', '%' . $search . '%')
                ->orWhereHas('Author', function($q) use ($search){
                    $q->where('name', 'like', "%$search%");
                })
                ->orWhereHas('Genre', function($q) use ($search){
                    $q->where('name', 'like', "%$search%");
                })
                ->paginate(3);
            } else {
                $books = Book::paginate(3);
            }
        } else {
            $books = Book::where('genre_id', $genre_id)->paginate(3);

        }

        $genres = Genre::all();

        $datas = [
            'books' => $books,
            'genres' => $genres,
        ];

        return view('bookList', $datas);
    }

    public function bookDetail(Book $book){
        $genres = Genre::all();
        $datas =[
            'book' =>$book,
            'genres' =>$genres
        ];
        return view('bookDetail', $datas);
    }

    public function addBook()
    {
        $genres = Genre::all();
        $authors = Author::all();

        $datas =[
            'genres' => $genres,
            'authors' => $authors
        ];
        return view('addBook', $datas);
    }

    public function storeBook(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
            'publish_date' => 'required|date',
            'photo' => 'required|image|mimes:jpg,png,jpeg',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {

            $photo = $request->file('photo');

            $photoPath = $photo->storeAs('images/books', $photo->getClientOriginalName(), 'public');

            $validated['photo'] = $photoPath;
        }

        Book::create($validated);
        return redirect()->route('book.index');
    }

    public function editBook(Book $book)
    {
        $genres = Genre::all();
        $authors = Author::all();

        $datas =[
            'book'=>$book,
            'genres' => $genres,
            'authors' => $authors
        ];
        return view('editBook', $datas);
    }

    public function updateBook(Request $request, Book $book)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
            'publish_date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');

            $photoPath = $photo->storeAs('images/books', $photo->getClientOriginalName(), 'public');

            $validated['photo'] = $photoPath;
        }

        $book->update($validated);
        return redirect()->route('book.index');
    }

    public function deleteBook(Book $book)
    {
        if ($book->photo && \Storage::disk('public')->exists($book->photo)) {
            \Storage::disk('public')->delete($book->photo);
        }

        $book->delete();
        return redirect()->route('book.index');
    }



}
