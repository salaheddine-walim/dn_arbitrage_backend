<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class EquipeController extends Controller
{
    public function equipes(){
        return \App\Models\Equipe::all();
    }
    public function show($id){
        return \App\Models\Equipe::find($id);
    }

    public function store(Request $request){
        $equipe=new \App\Models\Equipe();
        $equipe->nom=$request->nom;
        $equipe->AKA=$request->AKA;
        $equipe->ville=$request->ville;
        $equipe->terrain=$request->terrain;
        $equipe->save();
    }

    
}
