@extends('layout.master')
@section('title', 'Utilisateur')


@section('content')
    
     <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="user-tab" data-toggle="tab" href="#user-list">Liste des utilisateurs</a></li>
                        <li class="nav-item"><a class="nav-link" id="user-tab" data-toggle="tab" href="#user-add">Nouveau</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="user-list" role="tabpanel">
                        <div class="card " style="margin-bottom:60px;">
                            <div style="background-color:#fe6703;"  class="card-status card-status-left bg-succes"></div>
                            <div style="margin-bottom:-28px;" class="card-header">
                                  <div class="card-options">
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>                                    
                                </div>
                            </div>
                            <div  class="card-body">
                                <div class="table-responsive">
                                    <table  id="ejemploo" class="table table-striped table-hover table-vcenter text-nowrap mb-0 table-hover js-basic-example dataTable table_custom border-style spacing5">
                                        <thead class="thead color">
                                            <tr>
                                                <th class="w20 text-light">IMG</th>
                                                <th class="text-light w150"> NOM  &  PRENOM  &  MAIL </th>
                                                <th class="text-light w20">Role</th>
                                                <th class="text-light text-center  w20">Date</th>
                                             
                                                <th class="w100 text-center text-light">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td class="text-center">
                                                    <ul class="list-unstyled team-info sm margin-0 ">
                                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">Mass DIOUF</h6>
                                                    <span>Massdiouf90@gmail.com</span>
                                                </td>
                                                <td><span style="background-color:#fe6703;"  class="tag tag-danger">Super Admin</span></td>
                                                <td class="text-center">28/06/2021</td>
                                              
                                                <td class="text-center">
                                                   <!-- <a href=""><button type="button" class="btn btn-sm  btn-icon btn-outline-success" title="Voir plus"><i class="icon-eye"></i></button></a>  -->
                                                   <a href="{{route('hrms.modifier_utilisateur')}}"><button type="button" style="color:#004660;"  class="btn btn-sm  btn-icon " title="Modifier"><i class="icon-pencil"></i></button></a> 
                                                   <a href="#" data-toggle="modal"   data-target="#modal-delete"><button style="color:red;"  type="button" class="btn btn-sm  btn-icon" title="Supprimer" data-type="confirm"><i class="icon-trash"></i></button></a>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                     <ul class="list-unstyled team-info sm margin-0 ">
                                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">Ibrahima DIOUF</h6>
                                                    <span>Ibrahimadiouf810@gmail.com</span>
                                                </td>
                                                <td><span class="tag tag-danger">Admin</span></td>
                                                <td class="text-center">22/10/2021</td>
                                              
                                                <td class="text-center">
                                                    <!-- <a href=""><button type="button" class="btn btn-sm  btn-icon btn-outline-success" title="Voir plus"><i class="icon-eye"></i></button></a>  -->
                                                   <a href="{{route('hrms.modifier_utilisateur')}}"><button type="button" style="color:#004660;"  class="btn btn-sm  btn-icon " title="Modifier"><i class="icon-pencil"></i></button></a> 
                                                   <a href="#" data-toggle="modal"   data-target="#modal-delete"><button style="color:red;"  type="button" class="btn btn-sm  btn-icon" title="Supprimer" data-type="confirm"><i class="icon-trash"></i></button></a>  
                                                </td>
                                            </tr>
                                          
                                            <tr>
                                                <td class="text-center">
                                                     <ul class="list-unstyled team-info sm margin-0 ">
                                                        <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">Landing Goudiaby</h6>
                                                    <span>Goudiaby.landing00@gmail.com</span>
                                                </td>
                                                <td><span style="background-color:#004660; color:white;" class="tag tag-black">User Simple</span></td>
                                                <td class="text-center">28/12/2021</td>
                                                <td class="text-center">
                                                   <!-- <a href=""><button type="button" class="btn btn-sm  btn-icon btn-outline-success" title="Voir plus"><i class="icon-eye"></i></button></a>  -->
                                                  <a href="{{route('hrms.modifier_utilisateur')}}"><button type="button" style="color:#004660;"  class="btn btn-sm  btn-icon " title="Modifier"><i class="icon-pencil"></i></button></a> 
                                                   <a href="#" data-toggle="modal"   data-target="#modal-delete"><button style="color:red;"  type="button" class="btn btn-sm  btn-icon" title="Supprimer" data-type="confirm"><i class="icon-trash"></i></button></a>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                     <ul class="list-unstyled team-info sm margin-0 ">
                                                        <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">Oumy DIOP</h6>
                                                    <span>diop.oumy008@gmail.com</span>
                                                </td>
                                                <td><span class="tag tag-danger">Admin</span></td>
                                                <td class="text-center">21/09/2021</td>
                                               
                                                <td class="text-center">
                                                   <!-- <a href=""><button type="button" class="btn btn-sm  btn-icon btn-outline-success" title="Voir plus"><i class="icon-eye"></i></button></a>  -->
                                                  <a href="{{route('hrms.modifier_utilisateur')}}"><button type="button" style="color:#004660;"  class="btn btn-sm  btn-icon " title="Modifier"><i class="icon-pencil"></i></button></a> 
                                                   <a href="#" data-toggle="modal"   data-target="#modal-delete"><button style="color:red;"  type="button" class="btn btn-sm  btn-icon" title="Supprimer" data-type="confirm"><i class="icon-trash"></i></button></a>  
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-add" role="tabpanel">
                        
                        <div class="card">
                            <div class="card-body">
                                <div style="margin-left:-25px;" class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <input type="file" id="dropify-event" data-default-file="../assets/images/gallery/1.png">
                                            </div>
                                            
                                        </div>
                                    </div>
                                <div class="row clearfix">
                                    
                                    <div class="col-lg-4 col-md-6">
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-user"></i></span>
                                         </div>
                                            <input type="text" class="form-control" placeholder="Prénom">
                                         </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6">
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-user"></i></span>
                                         </div>
                                            <input type="text" class="form-control" placeholder="Nom">
                                         </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-mail"></i></span>
                                         </div>
                                          <input type="text" class="form-control" placeholder="Email">
                                         </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                         </div>
                                          <select class="form-control show-tick">
                                                <option>-- Role --</option>
                                                <option>Super Admin</option>
                                                <option>Admin</option>
                                                <option>User Simple</option>
                                            </select>
                                         </div>
                                    </div>                        
                                    <div class="col-lg-4 col-md-6">
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-lock"></i></span>
                                         </div>
                                            <input type="text" class="form-control" placeholder="Mot de passe">
                                         </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-lock"></i></span>
                                         </div>
                                            <input type="text" class="form-control" placeholder="Confirmer mot de passe">
                                         </div>
                                    </div>
                                                               

                                    <div class="col-12">
                                        <hr class="mt-4">
                                        <h6>Permissions utilisateur</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Voir PA</th>
                                                        <th>Ajouter PA</th>
                                                        <th>Modifier PA</th>
                                                        <th>Supprimer PA</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Super Admin</td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Admin</td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>User Simple</td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                     
                                                </tbody>
                                            </table>
                                        </div>
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
<!-- Modal --> 
 <div class="modal fade" id="modal-delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"> Suppression </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         <div class="modal-body">
            <h5 class="text-center"> <i class="fe fe-alert-octagon text-warning font-50"></i> </h5>
            <p class="text-center"> Voulez-vous vraiment supprimé l'utilisateur <strong> Ibrahima DIOUF </strong> ? </p>
         </div>
        <div class="modal-footer">
            <a href="#" class="btn btn-danger" style="color:white; background-color:red;"> Supprimer </a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Annuler </button>
        </div>
     </div>
  </div>
</div>
<!-- Modal --> 

@stop

@section('page-styles')
<!-- <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/dataTables.bootstrap4.min.css') }}"> -->
@stop

@section('page-script')


<script>
   var idioma = {
        "sProcessing": "En traitement...",
        "sLengthMenu": "Afficher _MENU_  utilisateurs ",
        "sZeroRecords": "Aucun résultat trouvé",
        "sEmptyTable": "Aucune donnée disponible dans ce tableau",
        "sInfo": "Affichage  de  _START_ à _END_ sur un total de  _TOTAL_ ",
        "sInfoEmpty": "Affichage  de 0 à 0 sur un total de 0 ",
        "sInfoFiltered": "(filtré sur un total de _MAX_ records)",
        "sInfoPostFix": "",
        "sSearch": "Rechercher :",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Chargement des enregistrements...",
        "oPaginate": {
            "sFirst": "Premier",
            "sLast": "Dernier",
            "sNext": "Suivant",
            "sPrevious": "Précédent"
        },
        "oAria": {
            "sSortAscending": ": Activer pour trier la colonne par ordre croissant",
            "sSortDescending": ": Activer pour trier la colonne par ordre décroissant"
        },
     
    };

        $(document).ready(function() {
        var table = $('#ejemploo').DataTable( {
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": idioma,
        "lengthMenu": [[5,10,20, -1],[5,10,50,"Tout montrer"]],
     
  
        });
        } );

    $(document).on('click', '.show-modal', function() {
        $('#show').modal('show');
        $('.modal-title').text("Détail de l'Opération");
    });
</script>

<style>

.color{
    background-color:#fe6703;
}
</style>
@stop
