<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use SoftDeletes;

    public function projets()
    {
        return $this->belongsToMany('App\Projet', 'projets_has_tags', 'tags_id', 'projets_id');
    }
}
