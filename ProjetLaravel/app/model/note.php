<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    public function produit(){
        return $this->hasMany('App\model\produit');
    }
}
