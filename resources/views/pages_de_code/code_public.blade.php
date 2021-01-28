@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1>{{$code->titre}}</h1>
    <h4>Partagé par {{$auteur->name}}</h4>
    <textarea name="contenu" id="" cols="30" rows="10" style="width: 100%; height: 100vh;">{{$code->contenu}}</textarea>
    <p>Vous pouvez rafraîchir la page pour recharger le code intact...</p>
</div>
@endsection