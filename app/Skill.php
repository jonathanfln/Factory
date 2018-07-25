<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function skills()
    {
        return $this->belongsToMany('App\Projet', 'skills_has_tags', 'skills_id', 'projets_id');
    }
}
