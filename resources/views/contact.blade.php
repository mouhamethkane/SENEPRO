@extends('layouts.app')

@section('content')
    <h1>CONTACTEZ-NOUS</h1>
    <h3 class="text-center text-dark my-4">Bienvenue sur le site sénépro vous pouvez nous contactes maintenant</h3>
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
        <button type="submit" class="btn btn-lg btn-secondary">Envoyer</button>
    </form>
    
@endsection