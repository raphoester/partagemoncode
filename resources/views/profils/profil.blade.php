@extends('layouts/app')
@section('contenu')
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{$user->name}}</h4>
                                <a href="\profil\modification">Modifier votre profil</a>
                                
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
                            {{$user->email}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Inscrit depuis le</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            {{$user->created_at}}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection('contenu')