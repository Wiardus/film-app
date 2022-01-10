
@extends('app')
@section('content')
    <div>
        <a href="/" >Home</a>
        <div class="row">
            <div>
                 <div>
                    <div>
                        <h1>Films of series om te kijken</h1>
                    </div>
                    <div>
                        <a href="/films/create">Film of serie toevoegen</a>
                    </div>
                </div>                
                <ol>
                    @foreach ($films as $film)
                    <li><a href="./films/{{ $film->id }}">{{ ucfirst($film->title) }}</a></li> 
                    @endforeach  
                </ol>

            </div>
            
        </div>
    </div>
@endsection