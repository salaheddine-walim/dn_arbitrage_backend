<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ArbitreController extends Controller
{
    public function arbitres(){
        return \App\Models\Arbitre::with('personne')->get();
    }
    public function show($id){
        return \App\Models\Arbitre::with('personne')->where('id',$id)->get();
    }

    public function store(Request $request){
        $p = new \App\Models\Personne();
        $p->cin=$request->cin;
        $p->nom=$request->nom;
        $p->prenom=$request->prenom;
        $p->date_naissance=$request->date_naissance;
        $p->ville=$request->ville;
        $p->telephone=$request->telephone;
        $p->save();
        $a= new \App\Models\Arbitre();
        $a->personne_id=$p->id;
        $a->ligue=$request->ligue;
        $a->specialite=$request->specialite;
        $a->save();
       return $a;
    }


}
