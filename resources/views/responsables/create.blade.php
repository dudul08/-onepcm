@extends('layouts.app')

@section('content')
    <h3 class="my-3">Ajouter un parent</h3>
    <form class="my-3" action="{{ route('responsables.store') }}" method="post">

        @include('responsables.form')
        <button class="btn btn-primary" type="submit">@include('include.iconeValidation') Ajouter </button>
        @include('include.boutonAnnulation',['adresseRetour'=> route('responsables.index') ])
    </form>

@endsection
