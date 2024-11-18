@extends('layout')

@section('content')
    <div class="row">
        <div class="col">

            @if(request()->has('search') && request()->input('search') != '')
                <h4>Search Results for: "{{ request()->input('search') }}"</h4>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Cover</th>
                        <th>Name</th>
                        <th>Genre</th>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($books as $item)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/'.$item->photo) }}" alt="" width="85px">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->genre->name }}</td>
                            <td>
                                <a class="btn btn-outline-dark" href="{{ route('book.detail', ['book' => $item->id]) }}">Detail</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="{{ route('book.edit', ['book' => $item->id]) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('book.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $books->links() }}

        </div>
    </div>
@endsection
