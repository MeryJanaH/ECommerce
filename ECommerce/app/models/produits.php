<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    protected $fillable = [
        'nom',
    ];


    public function prod_categories(){
        return $this->belongsTo('app\models\categories');
    }
}
