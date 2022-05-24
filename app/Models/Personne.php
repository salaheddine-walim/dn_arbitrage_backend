<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    public function Arbitre(){
        return $this->hasOne(Arbitre::class);
    }

    public function Joueur(){
        return $this->hasOne(Joueur::class);
    }
}
