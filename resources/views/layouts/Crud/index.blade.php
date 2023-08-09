@extends('layouts.app')
@section('title', 'Bienvenue sur mon blog')

@section("content")
<h3>
  <center>VOICI LA LISTE DES OUVRIERS</center>
</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">adresse</th>
      <th scope="col">mail</th>
      <th scope="col">telephone</th>
      <th scope="col">Metier</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>serigne saliou</td>
      <td>Fall</td>
      <td>Touba</td>
      <td>fall@gmail.com</td>
      <td>Telephone</td>
      <td>Decorateur</td>
      <td><button type="button" class="btn btn-primary">modifier</button>
        <button type="button" class="btn btn-danger">supprimer</button>
    <tr>
      <th scope="row">2</th>
      <td>Mouhamed </td>
      <td>kane</td>
      <td>Thies</td>
      <td>kane@gmail.com</td>
      <td>7765764</td>
      <td>Chauffeur</td>
      <td><button type="button" class="btn btn-primary">modifier</button>
        <button type="button" class="btn btn-danger">supprimer</button>
    <tr>
      <th scope="row">3</th>
      <td>Masseye</td>
      <td>gning</td>
      <td>Dakar</td>
      <td>maasey@gmail.com</td>
      <td>Telephone</td>
      <td>Macon</td>
      <td><button type="button" class="btn btn-primary">modifier</button>
        <button type="button" class="btn btn-danger">supprimer</button>
    <tr>
      <th scope="row">4</th>
      <td>Pape abdou</td>
      <td>Biteye</td>
      <td>kaolack</td>
      <td>abdou@gmail.com</td>
      <td>778658465</td>
      <td>mecanicien</td>
      <td><button type="button" class="btn btn-primary">modifier</button>
        <button type="button" class="btn btn-danger">supprimer</button>
    <tr>
      <th scope="row">5</th>
      <td>Ahmadou Gueye</td>
      <td>Fall</td>
      <td>Touba</td>
      <td>Gueye@gmail.com</td>
      <td>77665847</td>
      <td>Carreleur</td>
      <td><button type="button" class="btn btn-primary">modifier</button>
        <button type="button" class="btn btn-danger">supprimer</button>
    <tr>
      <th scope="row">6</th>
      <td>Ibrahima </td>
      <td>Mbaye</td>
      <td>Touba</td>
      <td>Mbaye@gmail.com</td>
      <td>776544</td>
      <td>platrier</td>
      <td><button type="button" class="btn btn-primary">modifier</button>
        <button type="button" class="btn btn-danger">supprimer</button>
    <tr>
      <th scope="row">7</th>
      <td>Mouhamed </td>
      <td>Sy</td>
      <td>Thies</td>
      <td>sy@gmail.com</td>
      <td>77887667</td>
      <td>macon</td>
      <td><button type="button" class="btn btn-primary">modifier</button>
        <button type="button" class="btn btn-danger">supprimer</button>
    <tr>
      <th scope="row">8</th>
      <td>oumou </td>
      <td>cisse</td>
      <td>Tivaouane</td>
      <td>cisse@gmail.com</td>
      <td>7786544</td>
      <td>coiffeuse</td>
      <td><button type="button" class="btn btn-primary">modifier</button>
        <button type="button" class="btn btn-danger">supprimer</button>
      </td>
      </td>
      </td>
      </td>
      </td>
      </td>
      </td>
      </td>


    </tr>


</table>


@endsection