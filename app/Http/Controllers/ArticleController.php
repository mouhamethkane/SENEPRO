<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


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
        $article->save();
        return redirect()->route('accueil');
        
        return redirect('/article')->with('status', 'Votre article à été bien enregistré.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $article->update();

        return redirect('/article')->with('status', 'Votre article à été bien modifié.');
    }

    public function accueil()
    {
        $article = Article::all();
        return view('ouvriers.accueil',compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
