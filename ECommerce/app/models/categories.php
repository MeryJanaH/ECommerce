<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
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

    public function products()
    {
        return $this->hasMany('app\models\produits');
    }
}
