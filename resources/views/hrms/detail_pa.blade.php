@extends('layout.master')
@section('title', '')


@section('content')
    <div class="header-action marg ">
      <a href="{{route('hrms.index')}}"> <button  type="button" style="background-color:#fe6703;color:#fff; margin-top:-70px;" class="btn   text-light" ><i class="fa fa-arrow-left mr-2"></i>retour</button></a>
    </div>
    <div  class="section-body">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade " id="Employee-list" role="tabpanel">
                </div>
                <div class="tab-pane fade show active" id="Employee-view" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                 <div class="card-header">
                                <h3 class="card-title">ERQ</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                                <div class="card-body">
                                    <div class="media mb-2">
                                        <img width="300px" height="215px" src="../assets/images/image_xlarge.png" data-toggle="tooltip" title="" /><br>
                                    </div>
                                        <img width="300px" height="215px" src="../assets/images/map.png" data-toggle="tooltip" title="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="new_timeline mt-3">
                                        <li>
                                            <div class="bullet pink"></div>
                                            <div class="desc">
                                                <h3>Numéro PA</h3>
                                                <h4>1</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bullet pink"></div>
                                            <div class="desc">
                                                <h3>Semaine PA</h3>
                                                <h4>S11</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bullet green"></div>
                                            <div class="desc">
                                                <h3>PA</h3>
                                                <h4>Modifier les BCCH entre NATIONS_UNIES02_REMP_D1 et CAMBERENE05_D3</h4>   
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bullet green"></div>
                                            <div class="desc">
                                                <h3>Analyse PA</h3>
                                                <h4>QVOC : On note une pollution AS(THIAROYE10_u3(RSCP=-87dBm,EcIo=-18,9dB),KHAR_YALLA06_v2(RSCP=-88,4dBm,EcIo=-19,2dB),TERRAIN_GOLF_u3(RSCP=-88,9dBm,EcIo=-21,1dB)) MS(GD_YOFF01_REMP_u2(RSCP=-86,6dBm,EcIo=-16dB), UNITE04C_u1(RSCP=--93,5dBm,EcIo=-24dB))</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bullet orange"></div>
                                            <div class="desc">
                                                <h3>Porteur</h3>
                                                <h4>IDR</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bullet green"></div>
                                            <div class="desc">
                                                <h3>Délai</h3>
                                                <h4><span style="background-color:#fe6703;color:#fff;" class="tag tag-info  ml-0 mr-0">02/12/2021</span></h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@stop

@section('popup')
 

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/dataTables.bootstrap4.min.css') }}">
@stop

@section('page-script')

<style>
 .test{
 padding:-40px;

}
.color{
    background-color:#f58e18;
}
.marg{
    padding-left:35px;
    
}

</style>
@stop
