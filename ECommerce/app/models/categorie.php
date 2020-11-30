<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = [
        'nom'
    ];

    public function products()
    {
        return $this->hasMany('app\models\produit');
    }
}
