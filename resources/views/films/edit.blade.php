@extends('app')
@section('content')

<a href="./films/{{ $film->id }}/show">Terug</a>

<form action="" method="POST">
     @csrf 
     @method('PUT')
    <label for="title">Titel:</label>
    <input type="text" id="title" class="form-control" name="title"
            placeholder="Wat is de titel..." value="{{ $film->title}}" required>
    <input type="number" min="1" max="10" value="{{ $film->rating}}" name="rating" />
    <button>Bewerk</button>

</form>

@endsection