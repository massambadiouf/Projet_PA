@extends('layout.master')
@section('title', '')
@section('content')
    <div class="header-action marg  ">
      <a href="{{route('hrms.index')}}"> <button  type="button" style="background-color:#fe6703;color:#fff; margin-top:-70px;" class="btn   text-light" ><i class="fa fa-arrow-left mr-2"></i>retour</button></a>
    </div>
    <div  class="section-body">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade " id="Employee-list" role="tabpanel">
                </div>
             <div class="tab-pane fade show active" id="user-add" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-5">
                                <small style="background-color:#fe6703;color:#fff;" class="float-left badge badge-primary">PA-1</small></div>
                                <div class="row clearfix">
                                <div class="col-lg-6 col-md-6">
                                       <b><label for="">Semaine</label></b> 
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <select name="user" id="select-users" class="form-control custom-select">
                                        <option >S41</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                            <option value="S4">S4</option>
                                            <option value="S5">S5</option>
                                            <option value="S6">S6</option>
                                            <option value="S7">S7</option>
                                            <option value="S8">S8</option>
                                            <option value="S9">S9</option>
                                            <option value="S10">S10</option>
                                            <option value="S11">S11</option>
                                            <option value="S12" >S12</option>
                                            <option value="S13" >S13</option>
                                            <option value="S14" >S14</option>
                                            <option value="S16" >S16</option>
                                            <option value="S17" >S17</option>
                                            <option value="S18" >S18</option>
                                            <option value="S19" >S19</option>
                                            <option value="S20" >S20</option>
                                            <option value="S21" >S21</option>
                                            <option value="S22" >S22</option>
                                            <option value="S23" >S23</option>
                                            <option value="S24" >S24</option>
                                            <option value="S25" >S25</option>
                                            <option value="S26" >S26</option>
                                            <option value="S27" >S27</option>
                                            <option value="S28" >S28</option>
                                            <option value="S29" >S29</option>
                                            <option value="S30" >S30</option>
                                            <option value="S31" >S31</option>
                                            <option value="S32" >S32</option>
                                            <option value="S33" >S33</option>
                                            <option value="S34" >S34</option>
                                            <option value="S35" >S35</option>
                                            <option value="S36" >S36</option>
                                            <option value="S37" >S37</option>
                                            <option value="S38" >S38</option>
                                            <option value="S39" >S39</option>
                                            <option value="S40" >S40</option>
                                            <option value="S41" >S41</option>
                                            <option value="S42" >S42</option>
                                            <option value="S43" >S43</option>
                                            <option value="S44" >S44</option>
                                            <option value="S45" >S45</option>
                                            <option value="S46" >S46</option>
                                            <option value="S47" >S47</option>
                                            <option value="S48" >S48</option>
                                            <option value="S49" >S49</option>
                                            <option value="S50" >S50</option>
                                            <option value="S51" >S51</option>
                                            <option value="S52" >S52</option>
                                    </select>
                                </div>
                         </div>
                                   <div class="col-lg-6 col-md-6">
                                       <b><label for="">Porteur</label></b> 
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-bookmark"></i></span>
                                    </div>
                                    <select name="user" id="select-users" class="form-control custom-select">
                                            <option value="IDR">IDR</option>
                                            <option value="SAM">SAM</option>  
                                    </select>
                                </div>
                         </div>
                         <div class="col-lg-12 col-md-6">
                             <b><label for="">PA</label></b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-archive"></i></span>
                                    </div>
                                       <input type="text" class="form-control" value="Modifier les BCCH entre NATIONS_UNIES02_REMP_D1 et CAMBERENE05_D3" placeholder="PA">
                                </div>
                         </div>                           
                                    <div class="col-lg-12 col-md-6">
                             <b><label for="">Analyse</label></b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-align-justify"></i></span>
                                    </div>
                                   <textarea rows="5" class="form-control" placeholder="Analyse PA" value="Mike">QVOC : On note une pollution AS(THIAROYE10_u3(RSCP=-87dBm,EcIo=-18,9dB),KHAR_YALLA06_v2(RSCP=-88,4dBm,EcIo=-19,2dB),TERRAIN_GOLF_u3(RSCP=-88,9dBm,EcIo=-21,1dB)) MS(GD_YOFF01_REMP_u2(RSCP=-86,6dBm,EcIo=-16dB), UNITE04C_u1(RSCP=--93,5dBm,EcIo=-24dB))
                                   </textarea>
                                </div>
                         </div>
                                <div class="col-lg-3 col-md-6">
                                <b><label for="">Délai</label></b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-clock"></i></span>
                                    </div>
                                        <input value="22/10/2021" placeholder="Ex: 22/10/2021" data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
                                </div>
                         </div>
                            <div class="col-lg-12 col-md-6">
                                <b><label for="">ERQ</label></b>
                                <div class="input-group mb-3">
                                    <div class="mr-5">
                                        <img width="450px" height="215px" src="../assets/images/image_xlarge.png" data-toggle="tooltip" title="" /><br></div>
                                        <img width="450px" height="215px" src="../assets/images/map.png" data-toggle="tooltip" title="" /><br>
                                </div>
                         </div>
                          <div class="col-lg-12 col-md-6">
                                <div class="input-group mb-3">
                                       <input type="file" class="form-control" placeholder="PA">
                                </div>
                         </div>
                                    <div class="col-12">
                                        <hr class="mt-4">
                                        <button type="button" style="background-color:green ;color:white;" class="btn btn-succerss text light">Enregistrer</button>
                                        <button type="button" style="background-color:red ;color:white;" class="btn btn-danger" data-dismiss="modal">Annuler</button>
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
