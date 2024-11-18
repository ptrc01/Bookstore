<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKSTORE</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <img src="{{ asset('logo.avif') }}"  width="150px" alt="logo buku">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav justify-">
                            <a href="{{ route('book.index') }}" class="nav-link">Home</a>
                            <a href="{{ route('book.add') }}" class="nav-link">Add</a>
                        </div>
                    </div>

                    <form class="d-flex" action="{{ route('book.index') }}" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search Books" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>

                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>&copy;2024 Gabrielle Bookstore</p>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
