<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'game_genres', 'game_id', 'genre_id');
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class, 'game_platforms', 'game_id', 'platform_id');
    }

    public function gameImages()
    {
        return $this->hasMany(GameImage::class, 'game_id');
    }
}
