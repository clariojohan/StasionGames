<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Game;
use App\Models\Publisher;
use App\Models\GameGenre;
use App\Models\Genre;
use App\Models\GamePlatform;
use App\Models\Platform;
use App\Models\GameImage;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::with(['publisher', 'genres', 'gameImages', 'platforms'])->get();
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
        $platforms = Platform::all();
        return view('games.create', [
            'publishers' => $publishers,
            'genres' => $genres,
            'platforms' => $platforms
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
        $data = $request->except(['genre_id', 'platform_id', 'images']);
        $genres = $request->genre_id;
        $platforms = $request->platform_id;
        $images = $request->file('images');

        $game = Game::create($data);

        foreach ($genres as $genre) {
            GameGenre::create([
                'genre_id' => $genre,
                'game_id' => $game->id
            ]);
        }

        foreach ($platforms as $platform) {
            GamePlatform::create([
                'platform_id' => $platform,
                'game_id' => $game->id
            ]);
        }

        foreach ($images as $image) {
            $filename = Storage::putFile('images', $image);
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
        $game = Game::find($id)->load(['publisher', 'genres', 'gameImages', 'platforms']);
        return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publishers = Publisher::all();
        $genres = Genre::all();
        $platforms = Platform::all();
        $game = Game::find($id)->load(['publisher', 'genres', 'gameImages', 'platforms']);
        return view('games.edit', [
            'game' => $game,
            'publishers' => $publishers,
            'genres' => $genres,
            'platforms' => $platforms
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        // $game = Game::find($id)->load(['publisher', 'genres', 'gameImages', 'platforms']);
        // dd($game);
        $data = $request->except(['genre_id', 'platform_id', 'images']);
        $genres = $request->genre_id;
        $platforms = $request->platform_id;
        $images = $request->file('images');

        foreach ($game->gameImages as $image) {
            Storage::delete($image->path);
        }

        GameImage::where('game_id', $game->id)->delete();
        GameGenre::where('game_id', $game->id)->delete();
        GamePlatform::where('game_id', $game->id)->delete();

        foreach ($images as $image) {
            $filename = Storage::putFile('images', $image);
            GameImage::create([
                'path' => $filename,
                'game_id' => $game->id
            ]);
        }

        foreach ($genres as $genre) {
            GameGenre::create([
                'genre_id' => $genre,
                'game_id' => $game->id
            ]);
        }

        foreach ($platforms as $platform) {
            GamePlatform::create([
                'platform_id' => $platform,
                'game_id' => $game->id
            ]);
        }

        $game->update($data);

        return redirect('/games/' . $game->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        foreach ($game->gameImages as $image) {
            Storage::delete($image->path);
        }

        GameImage::where('game_id', $game->id)->delete();
        GameGenre::where('game_id', $game->id)->delete();
        GamePlatform::where('game_id', $game->id)->delete();
        Game::destroy($game->id);
        return redirect('/games');
    }
}
