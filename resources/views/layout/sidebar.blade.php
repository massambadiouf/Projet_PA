<div id="left-sidebar" class="sidebar ">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <h5 class="brand-name" style="font-size:180%;" style="font-family:Roboto;">Gestion PA <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-25" style="color:#fe6703;" data-toggle="tooltip" data-placement="left" title=""></i></a></h5>
    <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul class="metismenu">
            <li class="g_heading">Hr</li>
            <li class="{{ Request::segment(2) === 'index' ? 'active' : null }}"><a href="{{route('hrms.index')}}"><i class="fe fe-slack" ></i><span>Liste des PA</span></a></li>
            <li class="{{ Request::segment(2) === 'utilisateur' ? 'active' : null }}"><a href="{{route('hrms.utilisateur')}}"><i class="fe fe-user" ></i><span>Utilisateur</span></a></li>
            <li class="{{ Request::segment(2) === 'index' ? 'activen' : null }}"><a href="{{route('authentication.login')}}"><i class="fe fe-log-out" aria-hidden="true"></i><span>Quitter</span></a></li>
           <span class="cent mr-5"><img src="{{URL::to('assets/images/ori_3804685_jxcl53g8zrm4em9po59shf59tkf0ggorh72crex8_monogram-pa-logo-design.png')}}" alt="person"
                        width="120px" height="120px" /></span> 
         
        </ul>
    </nav>        
</div>
<style>
.cent{
    margin-top:90px;
}
</style>