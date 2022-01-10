@extends('app')
@section('content')

<h1>{{ ucfirst($film->title) }}</h1>
<form id="delete-frm" class="" action="" method="POST">
    @method('delete')
    @csrf
    <button>Verwijderen</button>
</form>

@endsection