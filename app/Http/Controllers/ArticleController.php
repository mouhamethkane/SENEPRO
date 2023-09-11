<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Metier;
use App\Models\Article;
use App\Models\ouvrier;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;





class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     */
    public function index()
    {
        $article = Article::all();
       return view('/article', [
        'article' => $article
       ]);
    }
    public function consulte()
    {
         //afficher la liste des articlles
         $articles = Article::all();
        
         return view('/consulte', compact('articles'));
    }
    public function edit($id)
    {
        //afficher les champs d'un article dans un formulaire

        $article = Article::find($id);
        return view('/edit', compact('article'));
    }
    /**s
     * Store a newly created resource in storage.
     * 
     * 
     */
    public function store(Request $request)

    {
        //traitement de l'ajout d'un article

        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            
        ]);
        $article = new Article();
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->categorie = $request->categorie;




        // Handle file Upload
        if($request->hasFile('avatar')){

            //Storage::delete('/public/avatars/'.$user->avatar);

            // Get filename with the extension
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $request->file('avatar')->move('avatar',$fileNameToStore);
            //dd($article) = $request->avatar();
            $article->avatar=$fileNameToStore;
            //dd($article);
            $article->save();

            return redirect('/consulte')->with('status', 'Votre article à été bien enregistré.');
 
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('ouvriers.show', [
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Modifier un article

        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            
        ]);
        $article = Article::find($id);
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->categorie = $request->categorie;



        // Handle file Upload
        if($request->hasFile('avatar')){

            //Storage::delete('/public/avatars/'.$user->avatar);

            // Get filename with the extension
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $request->file('avatar')->move('avatar',$fileNameToStore);
            //dd($article) = $request->avatar();
            $article->avatar=$fileNameToStore;
            //dd($article);
            $article->update();

            return redirect('/consulte')->with('status', 'Votre article à été bien Modifié.');
 
        }
    }

    public function accueil()
    {
        $article = Article::paginate(3);
        $metier = Metier::all();
        return view('ouvriers.accueil',compact('article','metier'));
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/consulte')->with('status', 'Votre article à été bien supprimé.');
    }

    public function lismembre($id){
        $ouvriersWithRoleId = Metier::whereHas('ouvriers', function ($query) use ($id){
            $query->where('id', $id);
        })->get();

        // dd($ouvriersWithRoleId);
        return $id;
    }

}
   
