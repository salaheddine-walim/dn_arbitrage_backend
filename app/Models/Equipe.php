<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    // Relation pour recuperer les matches
    public function matches(){
        return $this->hasMany(Matche::class);
    }
}
