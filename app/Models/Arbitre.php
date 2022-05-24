<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arbitre extends Model
{
    //Relation pour recuperer les informations personnels 
    public function Personne(){
        return $this->belongsTo(Personne::class);
    }
    
    //Relation pour recuperer les matches
    public function matches(){
        return $this->hasMany(Matche::class);
    }
}
