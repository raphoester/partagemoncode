@extends('layouts/app')
@section('contenu')
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://fanfare-makabes.fr/wp-content/uploads/2015/09/user-image.jpg" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{$profil->name}}</h4>
                                @if($connecte->id == $profil->id)
                                    <a href="\profil\modification">Modifier votre profil</a>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">  
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            {{$profil->email}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Inscrit depuis le</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            {{$profil->created_at}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nombre de pages possédées:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            
                                {{$nombres += 1}}
                            
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                
            </div>
        </div>

        <h2>Vos pages partagées: </h2>
        @foreach($pages as $page)

        <div class="card-body">
            <h5>{{$page->titre}}</h5>
            <a href="/edition/{{$page->id}}">Voir la page</a>
            <div class="text-right">
                <button type="submit" class="btn btn-danger" href="/supprimer/{id}">Supprimer</button>
                

            </div>
        </div>

        @endforeach

        
        
    </div>
</div>

@endsection('contenu')