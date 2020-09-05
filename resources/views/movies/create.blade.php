@extends('layout.app')

@section('main_content')
    <div class="section">
        <h2>inserisci nuovo movie</h2>

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
            <form action="{{ route('movies.store') }}" method="post">
                @csrf
                @method('POST')

                <div>
                    <label>titolo</label>
                    <input type="text" name="titolo" value="{{ old('titolo') }}">
                </div>

                <div>
                    <label>genere</label>
                    <input type="text" name="genere" value="{{ old('genere') }}">
                </div>

                <div>
                    <label>durata(min)</label>
                    <input type="text" name="durata" value="{{ old('durata') }}">
                </div>

                <div>
                    <label>anno di pubblicazione</label>
                    <input type="number" name="anno" value="{{ old('anno') }}">
                </div>

                <div>
                    <label>voto</label>
                    <input type="number" name="voto" value="{{ old('voto') }}">
                </div>

                <div>
                    <label>descrizione</label>
                    <textarea name="descrizione" rows="8" cols="80">{{ old('titolo') }}</textarea>
                </div>
                <div>
                    <input class="btn standard" type="submit" value="salva">
                </div>
            </form>
        </div>
    </div>
@endsection
