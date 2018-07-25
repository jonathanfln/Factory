<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use SoftDeletes;
    
    public function projets()
    {
        return $this->hasMany('App\Projet', 'categories_id', 'id');
    }
}
