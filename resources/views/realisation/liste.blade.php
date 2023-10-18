@extends("layouts.app")

@section("title", "La liste des realisation")

@section("content")
    <div class="row">
        <div class="col mt-5">

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <h3>Les realisation de {{ $ouvrier->nom }} </h3>
        <a href="{{ route('realisation.create', $ouvrier->id) }}" class="btn btn-primary mb-2">Ajouter Réalisation</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>description</th>
                    <th>image</th>
                    <th>Ations</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
