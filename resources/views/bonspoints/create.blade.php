@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h3 class="my-3">Ajouter un Bon point : </h3>
        </div>
        <div class="card-body">

{{--            <form class="my-3" action="{{ route('bonspoints.store') }}" method="post">

                @include('categoriestaches.form')
                <button class="btn btn-primary" type="submit">@include('include.iconeValidation') Ajouter</button>
                @include('include.boutonAnnulation',['adresseRetour'=> route('categoriestaches.index') ])
            </form>--}}
        </div>
    </div>
@endsection
