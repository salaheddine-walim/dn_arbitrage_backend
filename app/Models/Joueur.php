<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    //Relation pour recuperer les informations personnels 
    public function Personne(){
        return $this->belongsTo(Personne::class);
    }
}
