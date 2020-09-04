@extends('layout.app')

@section('main_content')
    <div class="section">
        <h2>modifica movie</h2>

        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div>
            <form action="{{ route('movies.update', $movie->id) }}" method="post">
                @csrf
                @method('PUT')

                <div>
                    <label>titolo</label>
                    <input type="text" name="titolo" value="{{ $movie->titolo }}">
                </div>

                <div>
                    <label>genere</label>
                    <input type="text" name="genere" value="{{ $movie->genere }}">
                </div>

                <div>
                    <label>durata(min)</label>
                    <input type="text" name="durata" value="{{ $movie->durata }}">
                </div>

                <div>
                    <label>anno di pubblicazione</label>
                    <input type="number" name="anno" value="{{ $movie->anno }}">
                </div>

                <div>
                    <label>voto</label>
                    <input type="number" name="voto" value="{{ $movie->voto }}">
                </div>

                <div>
                    <label>descrizione</label>
                    <textarea name="descrizione" rows="8" cols="80">{{ $movie->descrizione }}</textarea>
                </div>
                <div>
                    <input type="submit" value="salva">
                </div>
            </form>
        </div>
    </div>
@endsection
