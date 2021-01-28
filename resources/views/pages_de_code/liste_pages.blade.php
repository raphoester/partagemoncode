@extends('layouts/app')

@section('contenu')
<div class="container">
    <div>
        <h1>Liste de vos pages de code</h1>
    </div>
    <a href="/creerPage">Nouvelle page de code</a>
    @foreach($pages as $page)
    <div>
        <h3><a href="/edition/{{$page->id}}">{{$page->titre}} @if($page->prive)🔒@endif</a></h3>

    </div>
    @endforeach
</div>
@endsection