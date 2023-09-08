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
        <div class="container-fluid" id="entete">
        <a href="login.php" class="login">Login</a>

        <img src="{{asset('image/kane.jpg')}}" alt="" class="video_entete">
        <p class="nomsite">Application de recherche d'ouvrier facilement<p>

            <div id="formauto">
                <form name="formauto" method="post" action="">
                @csrf
                    <input id="motcle" type="text" name="motcle" placeholder=" Recherche par metier..." />
                    <input class="btfind" type="submit" name="btsubmit" value=" Recherche" />
                </form>
                </div>
         
    </div> 
  <!-- **************************************************************************************            -->

              @foreach ($metier as $metier)
              <div class="col" id="image">
                <div class="card md-15"> 
                <img src="{{asset('/metierprofil/'.$metier->image)}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body"> 
                  <p class="card-text txt-secondary">{{ $metier->domaine }}</p>    
                  <h3 class="card-title my-4"><a href="{{route('mertiermembre',$metier->id)}}" class="">{{ $metier->nom }}</h3></a>       
                  </div>
                </div>  
             </div>
             @endforeach
             <hr>
            
     
        <!-- ********************************************************************************   -->
        <div class="container bg-dark text-white rounded-pill my-4">
            <h1>
                <center><strong>Voici la liste des articles</strong> </center>
            </h1>
        </div>
           
            <div class="container bg-white ">
                <div class="row"> 
                  @foreach ($article as $article)
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                      <img src="{{asset('avatar/'. $article->avatar)}}"  class="card-img-top" height="200px" alt="">
                    <h5 class="card-title my-4"><a href="/article/{{ $article->titre }}" class="btn btn-primary">{{ $article->titre }}</h5></a>
                        <p class="card-text">{{ $article->contenu }}</p>
                        <p class="card-text">{{ $article->categorie }}</p>    
                    </div>
                    </div>
                </div> 
                @endforeach 
             </div> 
            </div>     
          
@endsection 
  