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
    <div class="col" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/carreleur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="/carreleur">Carreleur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15" >
                  <img src="{{asset('/image/chauffeur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" class="text-center" href="/chauffeur">Chauffeur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/coiffeur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="/coiffeur">Coiffeur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/decorateur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/decorateur">Decorateur</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/electricien.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/electricien">Electricien</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/macon.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/macon">Macon</a></h5>
                  </div>
            </div>
          </div>
          <!-- ***************************************************************************** -->
          <div class="col" id="image">
                <div class="card">
                  <img src="{{asset('/image/maquilleuse.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/maquilleuse">Maquilleuse</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/mecanicien.png')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/mecanicien">Mecanicien</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/platrier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/platrier">Platrier</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/plombier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/plombier">Plombier</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/tapissier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="/tapissier">Tapissier</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/traiteur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="/traiteur">Traiteur</a></h5>
                  </div>
            </div>
          </div>

               <!-- ***************************************************************************** -->
               <div class="col" id="image">
                <div class="card">
                  <img src="{{asset('/image/tailleur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/tailleur">Tailleur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/cuisier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/cuisier">Chef_Cuisine</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/culte.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/culte">Agriculteur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/peintre.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/peintre">Peintre</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/coiffureh.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="coiffureh">coiffureh</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/menuisier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="/menuisier">Menuisier</a></h5>
                  </div>
            </div>
          </div>
        <!-- ********************************************************************************   -->
        <div class="container bg-dark text-white rounded-pill my-4">
            <h1>
                <center><strong>Voici la liste des articles</strong> </center>
            </h1>
        </div>
            @foreach ($article as $article)
            <div class="container bg-white ">
                <div class="row">
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
             </div>     
            @endforeach
@endsection 
  