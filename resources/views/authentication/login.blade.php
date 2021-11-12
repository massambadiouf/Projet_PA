@extends('layout.authentication')
@section('title', 'Login')
@section('content')
  
<div class="card">

  
    <div class="card-body" >
    
<div class="loi">
    <div class="owl">
  <div class="hand"></div>
  <div class="hand hand-r"></div>
  <div class="arms">
    <div class="arm"></div>
    <div class="arm arm-r"></div>
  </div>
</div>
<div class="card-title mt-4">Connexion</div>
<div class="form">
 
  <div class="control">
<div class="form-group">
          <label for="email" class="fa fa-envelope"></label>
            <input type="email" class="form-control" placeholder="Entrer votre mail">
        </div>
</div>
<div class="control">
<div class="form-group">
          <label for="password" class="fa fa-lock"></label>
            <input id="password" class="form-control" placeholder="Entrer votre mot de passe" type="password">
        </div>
</div>

</div>
   
 <div class="form-footer">
        <a href="{{route('hrms.index')}}">    <button type="submit" style="background-color:#fe6703; color:#472d20; font-bold; font-size:17px;" class="btn btn-primary btn-block">Se connecter</button></a>
  </div>
   <!-- <div class="text-center text-muted">
        Vous avez un compte? <a href="{{route('authentication.register')}}">Se connecter</a>
    </div> -->
    </div>
    </div>
</div>
@stop
<style>
.loi{
   margin-top:-140px;
}
.text-center{
    margin-bottom:-80px;
}
/* .owl {
  margin: auto;
  width: 211px;
  height: 108px;
  background-image: url("assets/images/owl-login.png");
  position: relative;
}
.owl .hand {
  width: 34px;
  height: 34px;
  border-radius: 40px;
  background-color: #472d20;
  transform: scaleY(0.6);
  position: absolute;
  left: 14px;
  bottom: -8px;
  transition: 0.3s ease-out;
}
.owl .hand.password {
  transform: translateX(42px) translateY(-15px) scale(0.7);
}
.owl .hand.hand-r {
  left: 170px;
}
.owl .hand.hand-r.password {
  transform: translateX(-42px) translateY(-15px) scale(0.7);
}
.owl .arms {
  position: absolute;
  top: 58px;
  height: 41px;
  width: 100%;
  overflow: hidden;
}
.owl .arms .arm {
  width: 40px;
  height: 65px;
   background-image: url("assets/images/owl-login-arm.png");
  position: absolute;
  left: 20px;
  top: 40px;
  transition: 0.3s ease-out;
}
.owl .arms .arm.password {
  transform: translateX(40px) translateY(-40px);
}
.owl .arms .arm.arm-r {
  left: 158px;
  transform: scaleX(-1);
}
.owl .arms .arm.arm-r.password {
  transform: translateX(-40px) translateY(-40px) scaleX(-1);
}
.form {
  margin: auto;
  margin-top: -9px;
  background-color: transparent;
  width: 175px;
}
.form .control {
  margin-bottom: 10px;
  position: relative;
  left: -59px;
}
.form .control label {
  position: absolute;
  font-size: 16px;
  top: 11px;
  left: 9px;
  color: rgba(0,0,0,0.3);
}
.form .control input {
  padding: 9px 6px 9px 30px;
  border-radius: 4px;
  border: 1px solid #ccc;
  font-size: 14px;
} */
.owl {
  margin: auto;
  width: 201px;
  height: 108px;
  background-image: url("assets/images/owl-login.png");
  position: relative;
}
.owl .hand {
  width: 34px;
  height: 34px;
  border-radius: 40px;
  background-color: #472d20;
  transform: scaleY(0.6);
  position: absolute;
  left: 14px;
  bottom: -8px;
  transition: 0.3s ease-out;
}
.owl .hand.password {
  transform: translateX(42px) translateY(-15px) scale(0.7);
}
.owl .hand.hand-r {
  left: 170px;
}
.owl .hand.hand-r.password {
  transform: translateX(-42px) translateY(-15px) scale(0.7);
}
.owl .arms {
  position: absolute;
  top: 58px;
  height: 41px;
  width: 100%;
  overflow: hidden;
}
.owl .arms .arm {
  width: 40px;
  height: 65px;
  background-image: url("assets/images/owl-login-arm.png");
  position: absolute;
  left: 20px;
  top: 40px;
  transition: 0.3s ease-out;
}
.owl .arms .arm.password {
  transform: translateX(40px) translateY(-40px);
}
.owl .arms .arm.arm-r {
  left: 158px;
  transform: scaleX(-1);
}
.owl .arms .arm.arm-r.password {
  transform: translateX(-40px) translateY(-40px) scaleX(-1);
}
.form {
  margin: auto;
  margin-top: -9px;
  padding-top: 30px;
  background-color: transparent;
  width: 285px;
}
.form .control {
  margin-bottom: 10px;
  position: relative;
}
.form .control label {
  position: absolute;
  font-size: 16px;
  top: 11px;
  left: 9px;
  color: rgba(0,0,0,0.3);
}
.form .control input {
  padding: 9px 6px 9px 30px;
  border-radius: 4px;
  border: 1px solid #ccc;
  font-size: 14px;
}
</style>
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script>

$('input[type="password"]').on('focus', () => {
  $('*').addClass('password');
}).on('focusout', () => {
  $('*').removeClass('password');
});

</script>

