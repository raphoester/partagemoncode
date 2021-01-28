
@extends('layouts/app')

@section('contenu')
<div class="container">
<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-8 mx-auto">
        <h2 class="h3 mb-4 page-title">Modification</h2>
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                </li>
            </ul>
            <form class="form" method="post" action="/profil/modification"> 
                {{csrf_field()}}
               
                <hr class="my-4" />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Nom</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="" />
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="mail@mail.fr" />
                </div>
                
                <hr class="my-4" />
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputPassword5">New Password</label>
                            <input type="password" class="form-control" id="mdpnv" name="mdpnv" />
                        </div>
                        <div class="form-group">
                            <label for="inputPassword6">Confirm Password</label>
                            <input type="password" class="form-control" id="mdpconfi" name="mdpconfi" />
                        </div>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </form>
        </div>
    </div>
</div>

</div>

@endsection