<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use SoftDeletes;

    public function skills()
    {
        return $this->belongsToMany('App\Projet', 'skills_has_tags', 'skills_id', 'projets_id');
    }
}
