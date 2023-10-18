<?php

namespace App\Http\Controllers;

use App\Models\Metier;
use App\Models\ouvrier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metiers = metier::all();
        return view('metiers.index', compact('metiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('metiers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nom' => 'required',
            'domaine' => 'required',
           'image'=>'required'
        ]);
        $metiers = new Metier();
        $metiers->nommetier = $request->nom;
        $metiers->domaine = $request->domaine;
        $image = $request->file('image');
       // dd($image);
            $destinationPath = 'metierprofil/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $metiers->image = $profileImage;



        $metiers->save();
        return redirect('/metiers.index')->with('success', 'metier Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(metier $metier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {


            $metiers = Metier::findOrFail($id);

            return view('metiers.edit', compact('metiers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nom' => 'required',
            'domaine' => 'required',
           'image'=>'required'
        ]);
        $metiers = Metier::findOrFail($id);
        $metiers->nommetier = $request->nom;
        $metiers->domaine = $request->domaine;
        $image = $request->file('image');

        if ($request->hasFile('image')==null) {
            $metiers->image = $metiers->image;
        }
        else{
            $destinationPath = 'metierprofil/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $metiers->image = $profileImage;
        }


        $metiers->save();
        return redirect('/metiers.index')->with('success', 'metier modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $metiers = Metier::findOrFail($id);
        $metiers->delete();

        return redirect('/metiers.index')->with('success', 'metier Supprime avec succès');
    }

    public function coiffeur($id)
    {
        $ouvriers = ouvrier::find($id);

        // dd($ouvriers);
    }
}

