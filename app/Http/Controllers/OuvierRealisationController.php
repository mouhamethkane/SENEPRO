<?php

namespace App\Http\Controllers;

use App\Models\ouvrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OuvierRealisationController extends Controller
{
    public function listrealisation($id){
        $ouvrier=ouvrier::find($id);

        $realisation=DB::table('ouvier_realisations')
                    ->join('ouvriers','ouvriers.id','ouvier_realisations.ouvrier_id')
                    ->where('ouvriers.id',$id)
                    ->get();


        return view('realisation.liste',compact('ouvrier','realisation'));
    }

    public function create($id){
        $ouvrier=ouvrier::find($id);
        return view('realisation.create',compact('ouvrier'));
    }
}
