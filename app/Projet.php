<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use SoftDeletes;

    public function categorie()
    {
        return $this->belongsTo('App\Categorie', 'categories_id', 'id');
    }

    public function client()
    {
        return $this->hasMany('App\Client', 'clients_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'projets_has_tags', 'projets_id', 'tags_id');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'projets_has_skills', 'projets_id', 'skills_id');
    }
}
