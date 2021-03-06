<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
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

        //* VALIDATION
        $request->validate([
            'title' => 'required|string|unique:movies|max:100',
            'original_title' => 'nullable|string|unique:movies|max:100',
            'nationality' => 'nullable|string|max:20',
            'vote' => 'nullable|numeric|max:2,1',
            'date' => 'required|date',
            'overview' => 'required|string',
            'created_at' => 'date',
            'updated_at' => 'date'
        ]);

        // VERSIONE MANUALE
        /* $movie->title = $data['title'];
        $movie->overview = $data['overview']; 
        $movie->slug=$slug; */

        //VERSIONE FILL
        //(serve $fillable in Movie.php)
        $data=$request->all();
        $movie= new Movie();
        $movie->fill($data);
        $slug = Str::slug($movie->title, '-');
        $movie->save();
        return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $movie->created_at = Carbon::create($movie->created_at)->format('d/m/Y');
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
        $data = $request->all();

        $data['slug'] = Str::slug($data['title'], '-');
        $movie->update($data);

        return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::destroy($id);
        return redirect()->route('movies.index');
    }
}