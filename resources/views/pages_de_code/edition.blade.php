@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1>{{$code->titre}}</h1>
    @if($code->prive == 0)
    @php
        $url = env('APP_URL').'/'.$code->id;
    @endphp
    <h5>URL d'accès publique : <a href="{{$url}}">{{$url}}</a></h5>
    @endif
    <form action="" method='POST'>
        @csrf
        <textarea name="contenu" id="" cols="30" rows="10" style="width: 100%; height: 100vh;">{{$code->contenu}}</textarea>
        <div>
            <input type="submit" value="Sauvegarder">
        </div>
    </form>
</div>
@endsection