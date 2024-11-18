<div class="row">
    <div class="col-4">
        <img src="{{ asset('storage/'.$book->author->photo) }}" width="85%">
    </div>

    <div class="col-8">
        <h5>Name</h5>
        <p>{{$book->author->name}}</p>
    </div>
</div>
