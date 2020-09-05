@extends('layout.app')

@section('page_title')
    Laravel base CRUD
@endsection

@section('main_content')
    <div class="section">
        <h1>lista movie</h1>

        <ul>
            @foreach ($movies as $movie)
                <li class="movie">
                    <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->titolo }}</a>
                    <a class="btn standard" href="{{ route('movies.edit', $movie->id) }}">modifica</a>

                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn delete" type="submit" value="elimina">
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
