<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // controllo che i campi del form siano stati inseriti correttamente ed estrapolo i parametri dalla richiesta, ovvero un array associativo ($data_request)
        $request->validate($this->getFieldValidation());
        $data_request = $request->all();

        $new_movie = new Movie();
        $new_movie->fill($data_request);

        // salvo il nuovo movie nel DB
        $is_movie_saved = $new_movie->save();

        // se il salvataggio è avvenuto con successo, prendo l'ultimo movie inserito nel DB e lo passo alla route
        if ($is_movie_saved) {
            return redirect()->route('movies.show', $new_movie);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        // controllo che i campi del form siano stati inseriti correttamente ed estrapolo i parametri dalla richiesta, ovvero un array associativo ($data_request)
        $request->validate($this->getFieldValidation());
        $data_request = $request->all();

        // update del record
        $is_movie_updated = $movie->update($data_request);

        if ($is_movie_updated) {
            return redirect()->route('movies.show', $movie);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index');
    }

    public function getFieldValidation()
    {
        return [
            'titolo' => 'required|max:255',
            'genere' => 'required|max:255',
            'durata' => 'required|integer|min:1|max:300',
            'anno' => 'required|integer|min:1900|max:2020',
            'voto' => 'required|integer|min:1|max:10',
            'descrizione' => 'required',
        ];
    }
}
