@extends('layouts.app')

@section('contenu')
<div class="container">
    <h1>Créer une nouvelle page de code</h1>
    <form class='form' action="" method='POST'>
        @csrf
        <div>
            <h3>Donnez-lui simplement un titre </h3>
        </div>
        <div>
            <input type="text" required name='titre'>
        </div>
        <div>
            <div>
                <h4>Privée ? <input type="checkbox" name='prive'></h5>
            </div>
            <div>
                <input type="submit" value="Créer">
            </div>
        </div>
        

    </form>
</div>
@endsection