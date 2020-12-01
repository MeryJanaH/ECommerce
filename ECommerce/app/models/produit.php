<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
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
        return $this->belongsTo('\App\models\categorie');
    }

    public function getPriceAttribute($value)
    {
        $newform = "$".$value;
        return $newform;
    }

    protected $table = "produits";
}
