@extends('layouts.app')

@section('content')
    <h1>contact page</h1>
    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée 
    à titre provisoire pour calibrer une mise en page, le texte définitif venant 
    remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. 
    Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
    <hr>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="emailAddress" class="form-label">Adresse Mail</label>
            <input type="email" class="form-control" id="emailaddres" aria-describedby="emailHelp" placeholder="test@example.com" name="email">
            <div id="emailHelp" class="from-text">votre address mail est securisé</div>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="test_example" name="subject">
        </div>
        <div class="mb-3">
            <label for="Message" class="form-label">Message</label>
            <textarea name="contenu" id="message" class="form-control" placeholder="saisir votre description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    
@endsection