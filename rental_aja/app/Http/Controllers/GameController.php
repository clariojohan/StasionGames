<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Publisher;
use App\Models\GameGenre;
use App\Models\Genre;
use App\Models\GameImage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::with(['publisher', 'genres', 'gameImages'])->get();
        return view('games.index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publishers = Publisher::all();
        $genres = Genre::all();
        return view('games.create', [
            'publishers' => $publishers,
            'genres' => $genres
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['genre_id', 'images']);
        $genres = $request->genre_id;
        $images = $request->file('images');

        $game = Game::create($data);

        foreach ($genres as $genre) {
            GameGenre::create([
                'genre_id' => $genre,
                'game_id' => $game->id
            ]);
        }

        foreach ($images as $image) {
            $file = $image;
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/game'), $filename);
            GameImage::create([
                'path' => $filename,
                'game_id' => $game->id
            ]);
        }

        return redirect('/games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
