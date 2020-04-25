@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
                        <h3 class="my-3">Ajouter un enfant</h3>
        </div>
        <div class="card-body">

            <form class="my-3" action="{{ route('enfants.store') }}" method="post">

                @include('enfants.form')
                <button class="btn btn-primary" type="submit">@include('include.iconeValidation') Ajouter</button>
                @include('include.boutonAnnulation',['adresseRetour'=> route('enfants.index')])
            </form>
        </div>
    </div>
@endsection
