@extends('layouts.app')

@section("title", "Enregistrement d'un ouvrier")

@section("content")
    <div class="row">
        <h3>Enregistrement d'un ouvrier</h3>
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
<<<<<<< HEAD
        <img src="{{asset('/image/kane.jpg')}}" alt="" class="video_entete">
        <p class="nomsite">Trouver son ouvrier facilement<p>
=======
        <img src="{{asset('image/kane.jpg')}}" alt="" class="video_entete">
        <p class="nomsite">Application de recherche d'ouvrier facilement<p>
>>>>>>> sendmail
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
                    <h5 class="card-title"><a class="text-center" href="">Carreleur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15" >
                  <img src="{{asset('/image/chauffeur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" class="text-center" href="">Chauffeur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/coiffeur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="">Coiffeur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/decorateur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Decorateur</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/electricien.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Electricien</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card md-15">
                  <img src="{{asset('/image/macon.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Macon</a></h5>
                  </div>
            </div>
          </div>
          <!-- ***************************************************************************** -->
          <div class="col" id="image">
                <div class="card">
                  <img src="{{asset('/image/maquilleuse.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Maquilleuse</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/mecanicien.png')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Mecanicien</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/platrier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Platrier</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/plombier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Plombier</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/tapissier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="">Tapissier</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/traiteur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="">Traiteur</a></h5>
                  </div>
            </div>
          </div>

               <!-- ***************************************************************************** -->
               <div class="col" id="image">
                <div class="card">
                  <img src="{{asset('/image/tailleur.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Tailleur</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/cuisier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Chef_Cuisine</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/platrier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Platrier</a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/peintre.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Peintre</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/coiffureh.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="">coiffureh</a></h5>
                  </div>
            </div>
          </div>
          <div class="col d-sm-none d-md-block" id="image">
                <div class="card">
                  <img src="{{asset('/image/menuisier.jpg')}}" class="card-img-top" height="100px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="text-center" href="">Menuisier</a></h5>
                  </div>
            </div>
          </div>
@endsection 
  