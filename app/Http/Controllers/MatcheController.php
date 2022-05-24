<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatcheController extends Controller
{
    public function matches(){
        //return \App\Models\Matche::with(['arbitre_centre','arbitre_ass1','arbitre_ass2','equipe_recevante','equipe_visiteuse'])->get();
        return \App\Models\Matche::get();
    }

    public function show($id){
        return \App\Models\Matche::find($id);
    }

    public function store(Request $request){
        $matche = new \App\Models\Matche();
        $matche->equipe_recevante=$request->equipe_recevante;
        $matche->equipe_visiteuse=$request->equipe_visiteuse;
        $matche->arbitre_centre=$request->arbitre_centre;
        $matche->arbitre_ass1=$request->arbitre_ass1;
        $matche->arbitre_ass2=$request->arbitre_ass2;
        $matche->date=$request->date;
        $matche->save();
    }
}
