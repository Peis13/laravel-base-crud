<h1>lista movie</h1>

<ul>
    @foreach ($movies as $movie)
        <li>
            <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->titolo }}</a>
            -
            <a href="{{ route('movies.edit', $movie->id) }}">modifica</a>

            <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="elimina">
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('movies.create') }}">inserisci nuovo movie</a>
