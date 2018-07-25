<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function projets()
    {
        return $this->belongsToMany('App\Projet', 'projets_has_tags', 'tags_id', 'projets_id');
    }
}
