<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function projets()
    {
        return $this->hasMany('App\Projet', 'clients_id', 'id');
    }

    public function testimonials()
    {
        return $this->hasMany('App\Testimonial', 'clients_id', 'id');
    }
}
