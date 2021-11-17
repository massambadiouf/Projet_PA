@extends('layout.master')
@section('title', '')
@section('content')
    <div class="header-action marg  ">
      <a href="{{route('hrms.utilisateur')}}"> <button  type="button" style="background-color:#fe6703;color:#fff; margin-top:-70px;" class="btn   text-light" ><i class="fa fa-arrow-left mr-2"></i>retour</button></a>
    </div>
     <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav nav-tabs page-header-tab">
                       
                    </ul>
                </div>
            </div>
        </div>
    <div class="section-body">
            <div class="container-fluid">
                <div class="tab-content">   
                    <div class="tab-pane fade show active" id="user-add" role="tabpanel">
                        <div class="card">
                            <div class="card-body ">
                            <div class="mb-2">
                            <small style="background-color:#fe6703;color:#fff;" class="float-right badge badge-primary">Utilisateur-1</small></div>
                                <div style="margin-left:-10px;" class="col-lg-4 col-md-6">         
                                    <input type="file" id="dropify-event" data-default-file="../assets/images/xs/avatar2.jpg">
                                </div>
                                <div class="row clearfix">
                                    
                                    <div class="col-lg-4 col-md-6">
                                    <b><label for="">Prénom :</label></b> 
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-user"></i></span>
                                         </div>
                                            <input type="text" class="form-control" placeholder="Prénom" value="Ibrahima">
                                         </div>
                                    </div>  
                                    <div class="col-lg-4 col-md-6">
                                    <b><label for="">Nom : </label></b>
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-user"></i></span>
                                         </div>
                                            <input type="text" class="form-control" placeholder="Nom" value="DIOUF">
                                         </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                    <b><label for="">Email : </label></b>
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-mail"></i></span>
                                         </div>
                                          <input type="text" class="form-control" placeholder="Email" value="Ibrahimadiouf810@gmail.com">
                                         </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                    <b><label for="">Role : </label></b>
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                         </div>
                                          <select class="form-control show-tick">
                                                
                                                <option>Admin</option>
                                                <option>User Simple</option>
                                            </select>
                                         </div>
                                    </div>                        
                                    <div class="col-lg-4 col-md-6">
                                    <b><label for="">Mot de passe : </label></b>
                                       <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fe fe-lock"></i></span>
                                         </div>
                                            <input type="text" class="form-control" placeholder="Mot de passe">
                                         </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                    <b><label for="">Confirmer mot de passe : </label></b>
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
                <!-- </div>
           </div> -->     
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
            <a href="" class="btn btn-danger" style="color:white; background-color:#dc3545;"> Supprimer </a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Annuler </button>
        </div>
     </div>
  </div>
</div>
<!-- Modal --> 

@stop

@section('page-styles')
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
.marg{
    padding-left:35px;
    
}
</style>
@stop
