<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'cart_items';

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
