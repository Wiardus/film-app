@extends('app')

@section('content')

    <div>
        <div>
            <div>
                <a href="/films">Terug</a>
                <div>
                    <h1>Film of serie toevoegen</h1>
                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div>
                            <div>
                                <label for="title">Titel:</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Wat is de titel..." required>
                            </div>
                        </div>
                        <div>
                            <div>
                                <button>
                                    Toevoegen
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection