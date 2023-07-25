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
        <div id="entete">
        <a href="login.php" class="login">Login</a>
        <img src="image/kane.jpg" alt="" class="video_entete">
        <p class="nomsite">Application de recherche d'ouvrier facilement<p>
            <div id="formauto">
                <form name="formauto" method="post" action="">
                @csrf
                @include('students.form')
                    <input id="motcle" type="text" name="motcle" placeholder=" Recherche par metier..." />
                    <input class="btfind" type="submit" name="btsubmit" value=" Recherche" />
            </div>
    </div>           
        
    </div>
@endsection 
  