<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = [
        'nom'
    ];

    public function products()
    {
        return $this->hasMany('\App\models\produit');
    }
}
