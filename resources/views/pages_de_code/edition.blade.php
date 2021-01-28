@extends('layouts.app')

@section('contenu')
<div class="container">
    
    <form action="" method='POST'>
        @csrf
        <textarea name="contenu" id="" cols="30" rows="10" style="width: 100%; height: 100vh;">{{$code->contenu}}</textarea>
        <div>
            <input type="submit" value="Sauvegarder">
        </div>
    </form>
</div>
@endsection