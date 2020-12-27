<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartStore extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'prod_id',
        'quantite',
        'totalSinglePrice'
    ];
}
