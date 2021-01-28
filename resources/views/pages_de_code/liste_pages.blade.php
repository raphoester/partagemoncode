@extends('layouts/app')

@section('contenu')
<div class="container">
    <div><h1>Liste de vos pages de code</h1></div>
    <a href="/creerPage">Nouvelle page de code</a>
    @foreach($pages as $page)
    <div>
        <h3></h3>
    </div>
    @endforeach
</div>
@endsection