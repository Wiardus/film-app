
@extends('app')
@section('content')
    <div class="container">
        <a href="/" >Home</a>
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Films of series om te kijken</h1>
                    </div>
                    <div class="col-4">
                        <a href="/films/create" class="btn btn-primary btn-sm">Film of serie toevoegen</a>
                    </div>
                </div>                
                <ol>
                    @foreach ($films as $film)
                    <li>{{ $film ->title }}</li> 
                    @endforeach  
                </ol>

            </div>
        </div>
    </div>
@endsection