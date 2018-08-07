<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function skills()
    {
        return $this->belongsToMany('App\Projet', 'projets_has_skills', 'skills_id', 'projets_id');
    }
}
