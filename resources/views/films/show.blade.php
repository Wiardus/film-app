@extends('app')
@section('content')

<a href='/films'>Terug</a>
<h1>{{ ucfirst($film->title) }}</h1>
<form id="delete-frm" class="" action="" method="POST">
    @method('delete')
    @csrf
    <button>Verwijderen</button>
</form>
<p>Rating from 1-10: {{$film ->rating}}</p>
<a href="/films/{{ $film->id }}/edit">Bewerken</a>

@endsection