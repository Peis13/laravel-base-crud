@extends('layout.app')

@section('main_content')
    <div class="section">
        <h2>{{ $movie->titolo }}</h2>

        <ul>
            <li><b>genere</b>: {{ $movie->genere }}</li>
            <li><b>durata</b>: {{ $movie->durata }} min</li>
            <li><b>anno di pubblicazione</b>: {{ $movie->anno }}</li>
            <li><b>voto</b>: {{ $movie->voto }}</li>
            <li><b>descrizione</b>: {{ $movie->descrizione }}</li>
        </ul>

        <a href="{{ route('movies.edit', $movie->id) }}">modifica movie</a>

        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="elimina">
        </form>
    </div>
@endsection
