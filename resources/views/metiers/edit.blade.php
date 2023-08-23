@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    modifier  un metier
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('metiers.update', $metiers->id) }}" methode="POST" class="form-group" enctype="multipart/form-data">
.         @csrf

          <div class="form-group">
              <label for="nom">nom du metier:</label>
              <input type="text" class="form-control" name="nom" value="{{ $metiers->nom }}">
          </div>

          <div class="form-group">
              <label for="domaine">domaine :</label>
              <input type="text" class="form-control" name="domaine" value="{{ $metiers->domaine }}">
          </div>
          <div class="form-group">
              <label for="image">image :</label>
              <input type="file" class="form-control" name="image" value="{{ $metiers->image }}">
          </div>
          <button type="submit" class="btn btn-primary">modifier</button>
      </form>
  </div>
</div>
@endsection
