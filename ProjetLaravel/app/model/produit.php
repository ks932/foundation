<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    public function panier(){
        return $this->belongsToMany('App\panier');
    }
}
