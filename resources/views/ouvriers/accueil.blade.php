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
        <img src="{{asset('/image/kane.jpg')}}" alt="" class="video_entete">
        <p class="nomsite">Trouver son ouvrier facilement<p>
            <div id="formauto">
                <form name="formauto" method="post" action="">
                @csrf
                    <input id="motcle" type="text" name="motcle" placeholder=" Recherche par metier..." />
                    <input class="btfind" type="submit" name="btsubmit" value=" Recherche" />
</form>
                </div>

               
    </div> 
             
    <div class="col">
                <div class="card">
                  <img src="asset/image/recol5.jpg" class="card-img-top" height="300px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href=""></a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block">
                <div class="card">
                  <img src="asset/image/recol8.jpg" class="card-img-top" height="300px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href=""></a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block">
                <div class="card">
                  <img src="asset/image/recol10.jpg" class="card-img-top" height="300px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href=""></a></h5>
                  </div>
                </div>
              </div>
              <div class="col d-sm-none d-md-block">
                <div class="card">
                  <img src="asset/image/recol1.jpg" class="card-img-top" height="300px" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href=""></a></h5>
                  </div>
            </div>
          </div>
@endsection 
  