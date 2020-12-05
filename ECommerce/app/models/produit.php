<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'quantite',
        'nom_prod',
        'photo',
        'description',
        'prix',
        'shipping',
        'cat_id'
    ];


    public function prod_categories(){
        return $this->belongsTo('\App\Models\Categorie');
    }

    public function getPriceAttribute($value)
    {
        $newform = "$".$value;
        return $newform;
    }

    protected $table = "produits";
}
