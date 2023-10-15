<?php

// CarController.php


namespace App\Http\Controllers;

use App\Models\Metier;
use App\Models\ouvrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Renderer\NoMatchingRendererException;

class ouvrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $metier=Metier::all();
        return view('layouts.crud.ajouter', compact('metier'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajouter(Request $request)
    {

        $validat =  $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
           'img'=>'required',
           'metier'=>'required'
        ]);
        $ouvrier = new ouvrier();
        $ouvrier->nom = $request->nom;
        $ouvrier->prenom = $request->prenom;
        $ouvrier->adresse = $request->adresse;
        $ouvrier->telephone = $request->Telephone;
        $ouvrier->metiers_id = $request->metier;
       
        $image = $request->file('img');
       // dd($image);
            $destinationPath = 'ouvrierprofil/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $ouvrier->img = $profileImage;
        
        $ouvrier->save();

        //dd($ouvrier);
       

        
        return redirect('/');

   
          
          
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function listouvrier()
    {

        $listouvrier = ouvrier::all();
        return view('layouts.Crud.index', compact('listouvrier'));


         
    }

   
        


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $ouvrier = ouvrier::find($id);
       
        $ouvrier->delete();

        return redirect('/')->with('success', 'ouvrier supprimer avec succes');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
        public function edit(Request $request)
        {
            $ouvrier=ouvrier::find($request->id);

           
            
            $validat =  $request->validate([
                'prenom' => 'required',                                                                                 
                'nom' => 'required',
                'telephone' => 'required',
               
            ]);
            
            $ouvrier->nom = $request->nom;
            $ouvrier->prenom = $request->prenom;
            $ouvrier->adresse = $request->adresse;
            $ouvrier->telephone = $request->telephone;
            $image = $request->file('img');
            //dd($request->file("img"));
           

            if ($request->hasFile('img')==null) {
                $ouvrier->img = $ouvrier->img;
            }
            else{
                $destinationPath = 'ouvrierprofil/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $ouvrier->img = $profileImage;
            }
        
                $ouvrier->save();
                
            
return back()->with('success','ouvrier modifie avec succes');
        }  
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update( $id)
    {
       $ouvrier=ouvrier::find($id);
      return view("layouts.Crud.modifier", compact("ouvrier"));
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Storage::delete($ouvrier->id);
        //$ouvrier->delete();
        return back()->with('success', 'ouvrier supprimé !');
    }
    
    public function lismembre($id)
    {
        $ouvriers = DB::table('ouvriers')
                ->join('metiers', 'metiers.id', '=', 'ouvriers.metiers_id')
                ->where('metiers_id', '=', $id)
                ->get();
               // dd($ouvriers);
                return view('ouvriers.coiffureh', compact('ouvriers'));        
    }

    // public function show($id)
    // {
    //     $ouvriers = DB::table('ouvriers')
    //             ->join('metiers', 'metiers.id', '=', 'ouvriers.metiers_id')
    //             ->where('metiers_id', '=', $id)
    //             ->get();
    //             return view('ouvriers.show', compact('ouvriers'));         
    // }

    public function show($id)
{
    $ouvrier = ouvrier::find($id);

    return view('ouvriers.show', compact('ouvrier'));
}


}


