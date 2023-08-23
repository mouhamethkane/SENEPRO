@extends("layouts.app")

@section("title", "La liste des étudiants")

@section("content")
    <div class="row">
        <div class="col">
        <h3>La liste des ouvriers</h3>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>prenom</th>
                    <th>nom</th>
                    <th>adresse</th>
                    <th>telephone</th>
                    <th>image</th>
                    <th>Ations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listouvrier as $ouvrier)
                    <tr>
                        <td>{{ $ouvrier->prenom }}</td>
                        <td>{{ $ouvrier->nom }}</td>
                        <td>{{ $ouvrier->adresse }}</td>
                        <td>{{ $ouvrier->telephone }}</td>
                        <td><img src="/ouvrierprofil/{{ $ouvrier->img }}" width="64" height="64"></td>
                        <td style="display: flex">
          
                            <a class="btn btn-warning btn-sm" style="margin-right: 5px" 
                            type="submit" class="btn btn-sm btn-danger"
                            href="{{ route('crud.update', $ouvrier->id) }}">
                            
                                Modifier
                            </a>
                           
                              
                                <a
                                     class="btn btn-sm btn-danger"
                                    href="{{ route('crud.delete', $ouvrier->id) }}">
                                    Supprimer
                                 </a>
                         
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection