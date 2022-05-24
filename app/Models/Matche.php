<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    //Relation pour recuperer l equipe recevante
    public function equipe_recevante(){
        return $this->belongsTo(Equipe::class,'equipe_recevante');
    }
    //Relation pour recuperer l equipe visiteuse
    public function equipe_visiteuse(){
        return $this->belongsTo(Equipe::class,'equipe_visiteuse');
    }

    //Relation pour recuperer l'arbitre de centre
    public function arbitre_centre(){
        return $this->belongsTo(Arbitre::class,'arbitre_centre');
    }

    //Relation pour recuperer l'arbitre assistant 1
    public function arbitre_ass1(){
        return $this->belongsTo(Arbitre::class,'arbitre_ass1');
    }

    //Relation pour recuperer l'arbitre assistant 2
    public function arbitre_ass2(){
        return $this->belongsTo(Arbitre::class,'arbitre_ass2');
    }
}
