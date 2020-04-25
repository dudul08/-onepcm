@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h2>Liste des Enfants</h2>
        </div>
        <div class="card-body">
            <a class="btn btn-primary my-3"
               href="{{ route('enfants.create') }}">@include('include.iconeAjoutEnfantResponsable') Ajouter un
                enfant </a>

            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Age</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($enfant as $enfant)
                    <tr>
                        <th scope="row">{{ $enfant->id }}</th>
                        <td>{{ $enfant->prenom }}</td>
                        <td>{{ $enfant->name }}</td>
                        <td>{{ $enfant->getGenreLibelle() }}</td>
                        <td>{{ $enfant->age() }}</td>
                        <td>
                            <a class="btn btn-secondary mb-1" href="{{ route('enfants.edit',$enfant->id) }}"><i
                                    class="ri-pencil-line"></i> </a>
                            <a class="btn btn-danger mb-1" href="{{ route('enfants.confirmation',$enfant->id) }}"><i
                                    class="ri-delete-bin-7-line"></i> </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
