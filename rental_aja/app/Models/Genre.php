<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_genres', 'genre_id', 'game_id');
    }
}
