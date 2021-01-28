@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1>Créer une nouvelle page de code</h1>
    <form class='form' action="" method='POST'>
        @csrf
        <div>
            <h3>Donnez-lui simplement un titre </h3>
        </div>
        <input type="text" required name='titre'>
        <input type="submit">

    </form>
</div>
@endsection