<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;



class CommentController extends Controller
{
    public function comments(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'content' => 'required',
        ]);
        $comment = new Comment();
        $comment->nom = $request->nom;
        $comment->prenom = $request->prenom;
        $comment->content = $request->content;

        $comment->save();

        return redirect('/profilcarrolleur')->with('status', 'votre commentaire à été bien enregistré.');
    }
    public function profilcarrolleur()
    {
        $comments = Comment::all();

        return view('profilcarrolleur', compact('comments'));
    }

}
