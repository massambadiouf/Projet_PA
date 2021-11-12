@extends('layout.authentication')
@section('title', 'Register')


@section('content')
<div class="card">
    <div class="text-center header-brand code mb-1">
       <img src="{{URL::to('assets/images/ori_3804685_jxcl53g8zrm4em9po59shf59tkf0ggorh72crex8_monogram-pa-logo-design.png')}}" alt="person"
                        width="100px" height="100px" />
    </div>
    <div class="card-body">
        <!-- <div class="card-title">Création compte</div> -->
        <div class="form-group">
            <label class="form-label">Prénom & Nom</label>
            <input type="text" class="form-control" placeholder="Entrer votre nom complet">
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Entrer votre mail">
        </div>
        <div class="form-group">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" placeholder="Entrer votre mot de passe">
        </div>
          <div class="form-group">
            <label class="form-label">Confirmer le Mot de passe</label>
            <input type="password" class="form-control" placeholder="Entrer votre mot de passe">
        </div>
        <div class="form-footer">
            <button type="submit" style="background-color:#fe6703;" class="btn btn-primary btn-block">Créer compte</button>
        </div>
    </div>
    <div class="text-center text-muted">
        Vous avez un compte? <a href="{{route('authentication.login')}}">Se connecter</a>
    </div>
</div>
@stop
<style>
.code{
    margin-bottom:-80px;
}

</style>