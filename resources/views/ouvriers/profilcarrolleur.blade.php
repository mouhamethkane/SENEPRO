@extends('layouts.app')

@section("title", "Enregistrement d'un ouvrier")

@section("content")
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach    
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif 
        <section class="bg-warning"><br>
        <div class="container bg-dark text-white">
            <h3>
                <div class="row">
                    <div class="col bg-white rounded-circle text-dark">
                        <center>PAPE ABDOU BITEYE</center>
                        <h5 class="text-center">CARROLLEUR</h5>
                        <h5 class="text-center">TELEPHONE:+221 77 876 54 32</h5>
                    </div>
                </div>
         <div class="row">
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt molestias, 
                    dolores sapiente impedit voluptatibus tempore inventore vero 
                    ratione totam omnis quo earum in, nobis amet, minus soluta consequuntur voluptates?</p>
            </div>
                    <div class="col-6">
                        <center><img src="{{asset('/image/carreleur8.jpg')}}" class="rounded-circle bg-dark" width="50%" height="70%"></center>

                    </div>
            </div>
            
         </div>
            </h3>
        </div><br><br>
        <div class="container bg-dark text-white rounded-pill">
            <h1>
                <center><strong>Voici les realisations de Pape Abdou Biteye</strong> </center>
            </h1>
        </div>
            <div class="container bg-white">
                <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c1.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                        <h5 class="card-title">Cuisine</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c2.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                        <h5 class="card-title">Salon</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c3.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Chambre</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                </div>
    <!-- ***********************************************************************************      -->
    <div class="container bg-white">
                <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c4.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Appartement</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c5.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Cuisine</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c6.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Batiment</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                </div> 
            <div class="container">
            <h1 class="text-center">Les commentaires</h1>
            @foreach($comments as $comment)
                <hr>
        
                <hr class="col-sm-5">
                <h5>{{$comment->nom}}</h5>
                <h5>{{$comment->prenom}}</h5>
                <h5>{{$comment->content}}</h5>
                <h6>date et heure</h6>
                @endforeach
                <hr>
                <h1 class="text-center">Commentaire</h1>
                <hr>

    <form action="/comments" method="POST">
        @csrf
      
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control border border-secondary" id="nom"  placeholder="Donner votre nom" name="nom" required>
            
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control border border-secondary" id="prenom" placeholder="Donner votre prenom" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Commentaire</label>
            <textarea name="content" id="content" cols="10" rows="10" class="form-control border border-secondary" placeholder="saisir votre description" required></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-secondary">Commenter</button>
    </form>
 
@endsection 
  