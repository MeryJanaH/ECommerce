<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom'
    ];

    public function products()
    {
        return $this->hasMany('\App\Models\Produit');
    }
}
