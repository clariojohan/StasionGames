<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_platforms', 'platform_id', 'game_id');
    }
}
