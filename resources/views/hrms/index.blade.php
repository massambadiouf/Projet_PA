@extends('layout.master')
@section('title', '')
@section('content')
 <div class="section-body">
            <div class="container-fluid">  
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav hidden nav-tabs page-header-tab">
                         <div class="header-action ml-3">
                        <!-- <button type="button" class="btn bg-blue text-light" data-toggle="modal" data-target="#exampleModal"><i class="icon-printer mr-2"></i>Imprimer</button>
                        <button type="button" class="btn bg-green text-light ml-2" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-file-excel-o mr-2"></i>Excel</button>
                        <button type="button" style="background-color:red" class="btn btn-danger text-light ml-2" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-file-pdf-o mr-2"></i>PDF</button> -->
                    </div>
                    </ul>
                    <div class="header-action mb-1">
                        <button style="background-color:green ;color:white;" type="button" class="btn bg-greebn text-light" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Nouveau PA</button>
                    </div>
                </div>
            </div>
        </div>

    <div  class="section-body">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Employee-list" role="tabpanel">
                      <!--Datatable-->
                      <div id="back" class="card">
                          <div style="background-color:#fe6703;" class="card-status bg-succes"></div>
                      <div class="mt-1 mb-3 p-3 button-container  ">
                            <h6 class="mb-2">Liste des PA</h6>
                            <div id="divTableDataHolder" class="table-responsive">
                                <table id="ejemplo" class="table table-vcenter table-striped table_custom spacing5 border-style mb-0table-bordered">
                                    <thead class="color">
                                        <tr>
                                        <th class="text-light">Semaine</th>
                                            <th class="text-light">N° PA</th>
                                            <th class="text-light w180">ANALYSE</th>
                                            <th class="text-light w50">PA</th>
                                            <th class="text-light">PORTEUR</th>
                                            <th hidden class="text-light">ERQ</th>
                                           
                                            <th class="text-light text-center">DELAI</th>
                                            <th class="text-light text-center w150">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><span>S41</span></td>
                                            <td class="text-center"><span>1</span></td><br><br>
                                            <td>Dégradation qualité sur beaucoup de cellules qui couvrent cette zone. Position: Latitude: 14.699; Longitude: -17.444</td>
                                            <td class="W80"><span>Modifier les BCCH entre NATIONS_UNIES02_REMP_D1 et CAMBERENE05_D3</span></td>
                                            <td class="text-center">IDR</td>
                                          <td hidden><img src="{{URL::to('assets/images/ori_3804685_jxcl53g8zrm4em9po59shf59tkf0ggorh72crex8_monogram-pa-logo-design.png')}}" alt="person"
                                          width="120px" height="120px" /></td> 
                                            <td><span style="background-color:#fe6703;color:#fff;" class="tag tag-info  ml-0 mr-0">22/10/2021</span></td>
                                            <td class="text-center">
                                               <a href="{{route('hrms.detail_pa')}}"><button type="button" class="btn btn-sm  btn-icon btn-outline-success" title="Voir plus"><i class="icon-eye"></i></button></a> 
                                              <a href="{{route('hrms.modifier_pa')}}"><button type="button"  class="btn btn-sm  btn-icon btn-outline-info" title="Modifier"><i class="icon-pencil"></i></button></a> 
                                               <a href="#" data-toggle="modal"   data-target="#modal-delete"><button  type="button" class="btn btn-sm  btn-icon btn-outline-danger" title="Supprimer" data-type="confirm"><i class="icon-trash"></i></button></a>  
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="text-center"><span>S41</span></td>
                                            <td class="text-center"><span>2</span></td>
                                            <td><span>THIAROYE06_h6  :   overshoote  dans la zone ocassionant de  la pollution avec une dégradation de la qualité  allant jusqu’à – 23 dB.</span></td>
                                            <td class="W80"><span>Prendre en charge la pollution(Lat:14.775;Long:-17.417)</span></td>
                                            <td class="text-center">IDR</td>
                                          <td hidden><img src="{{URL::to('assets/images/ori_3804685_jxcl53g8zrm4em9po59shf59tkf0ggorh72crex8_monogram-pa-logo-design.png')}}" alt="person"
                                          width="120px" height="120px" /></td> 
                                            <td><span style="background-color:#fe6703;color:#fff;" class="tag tag-info  ml-0 mr-0">02/12/2021</span></td>
                                            <td class="text-center">
                                               <a href="{{route('hrms.detail_pa')}}"><button type="button" class="btn btn-sm  btn-icon btn-outline-success" title="Voir plus"><i class="icon-eye"></i></button></a> 
                                              <a href="{{route('hrms.modifier_pa')}}"><button type="button"  class="btn btn-sm  btn-icon btn-outline-info" title="Modifier"><i class="icon-pencil"></i></button></a> 
                                               <a href="#" data-toggle="modal"   data-target="#modal-delete"><button  type="button" class="btn btn-sm  btn-icon btn-outline-danger" title="Supprimer" data-type="confirm"><i class="icon-trash"></i></button></a>  
                                            </td>
                                        </tr>           
                                           <tr>
                                            <td class="text-center"><span>S41</span></td>
                                            <td class="text-center"><span>3</span></td>
                                            <td><span>GDW02_REMP_h4 :   Qvoc CRC impacté par une qualité 3g catastrophique au point de mesure.  Toues les cellules en Active set  presenetent des valeurs </span></td>
                                            <td class="W80"><span>Prendre en charge la pollution dans la zone de couverture de GDW02_REMP_h4 . Position: Latitude: 14.775 ; Longitude: -17.379</span></td>
                                            <td class="text-center">IDR</td>
                                           <td hidden><img src="{{URL::to('assets/images/ori_3804685_jxcl53g8zrm4em9po59shf59tkf0ggorh72crex8_monogram-pa-logo-design.png')}}" alt="person"
                                          width="120px" height="120px" /></td> 
                                            <td><span style="background-color:#fe6703;color:#fff;" class="tag tag-info  ml-0 mr-0">02/12/2021</span></td>
                                            <td class="text-center">
                                               <a href="{{route('hrms.detail_pa')}}"><button type="button" class="btn btn-sm  btn-icon btn-outline-success" title="Voir plus"><i class="icon-eye"></i></button></a> 
                                              <a href="{{route('hrms.modifier_pa')}}"><button type="button"  class="btn btn-sm  btn-icon btn-outline-info" title="Modifier"><i class="icon-pencil"></i></button></a> 
                                               <a href="#" data-toggle="modal"   data-target="#modal-delete"><button  type="button" class="btn btn-sm  btn-icon btn-outline-danger" title="Supprimer" data-type="confirm"><i class="icon-trash"></i></button></a>  
                                            </td>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        <!--/Datatable-->
                </div>
    </div>
@stop

@section('popup')
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

                                                        <p class="text-center"> Voulez-vous vraiment supprimé le PA <strong> N° 1 </strong> ? </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="" class="btn btn-danger" style="color:white; background-color:#dc3545;"> Supprimer </a>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Annuler </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
   <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout PA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                         <div class="col-lg-6 col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <select name="user" id="select-users" class="form-control custom-select">
                                        <option >-- Semaine --</option>
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
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-bookmark"></i></span>
                                    </div>
                                    <select class="custom-select">
                                            <option >-- Porteur --</option>
                                            <option value="IDR">IDR</option>
                                            <option value="SAM">SAM</option>  
                                    </select>    
                                </div>
                         </div>
                     
                          <div class="col-lg-12 col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-archive"></i></span>
                                    </div>
                                       <input type="text" class="form-control" placeholder="PA">
                                </div>
                         </div>
                     
                        <div class="col-lg-12 col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-align-justify"></i></span>
                                    </div>
                                   <textarea rows="5" class="form-control" placeholder="Analyse PA" value="Mike"></textarea>
                                </div>
                         </div>
                        <div class="col-lg-12 col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-upload"></i></span>
                                    </div>
                                       <input accept="image/*" type="file" class="form-control" placeholder="PA">     
                                </div>
                         </div>
                        <div class="col-lg-6 col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-clock"></i></span>
                                    </div>
                                        <input placeholder="Ex: 22/10/2021" data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
                                </div>
                         </div>
                  
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" style="background-color:red ;color:white;" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    <button type="button" style="background-color:green ;color:white;" class="btn btn-succerss text light">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}">
@stop

@section('page-script')
 <!-- library js -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script> -->
<script>
   var idioma = {
        "sProcessing": "En traitement...",
        "sLengthMenu": "Afficher _MENU_  les enregistrements ",
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
        "buttons": {
            "copyTitle": 'Informations copiées',
            "copyKeys": 'Utilisez votre clavier ou menu pour sélectionner la commande de copie',
            "copySuccess": {
                "_": '%d lignes copiées dans le presse-papiers',
                "1": '1 ligne copiée dans le presse-papiers'
            },

            "pageLength": {
                "_": "Afficher %d lignes",
                "-1": "Tout montrer"
            }
        }
    };

        $(document).ready(function() {
        var table = $('#ejemplo').DataTable( {
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": idioma,
        "lengthMenu": [[5,10,20, -1],[5,10,50,"Tout montrer"]],
        dom: 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',
        buttons: {
        dom: {
        container:{
        tag:'div',
        className:'flexcontent'
        },
        buttonLiner: {
        tag: null
        }
        },
        buttons: [
                // {
                //     extend:    'copyHtml5',
                //     text:      '<i class="fa fa-clipboard"></i>Copiar',
                //     title:'Titulo de tabla copiada',
                //     titleAttr: 'Copiar',
                //     className: 'btn btn-app export barras',
                //     exportOptions: {
                //         columns: [ 0, 1 ]
                //     }
                // },

                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fa fa-file-pdf-o"></i> PDF',
                    title:'Gestion PA',
                    titleAttr: 'PDF',
                    className: 'btn btn-app export pdf',
                    exportOptions: {
                        "columns": ':visible',
                        columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                    },
                    customize:function(doc) {
              
                        doc.styles.title = {
                            color: '#ff6600',
                            fontSize: '30',
                            alignment: 'center'
                        }
                        doc.styles['td:nth-child(2)'] = { 
                            width: '100px',
                            'max-width': '100px'
                        },
                        doc.styles.tableHeader = {
                            fillColor:'#ff6600',
                            color:'white',
                            alignment:'center'
                        },
                        doc.content[1].margin = [0, 0, 0, 0 ]
                      
                      
                    }
                },

                {
                    extend:    'excelHtml5',
                    text:      '<i class="fa fa-file-excel-o"></i> Excel',
                    title:'Gestion PA',
                    titleAttr: 'Excel',
                    className: 'btn btn-app export excel',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6],
                        // columns: ':visible',
                    },
                    //custom button for cashflow excel generation
    
        extend: 'excel', filename: 'Fichier PA à joindr', sheetName: 'cashflow1',
        customize: function( xlsx ) {  
            var sSh = xlsx.xl['styles.xml'];
            var n1 = '<numFmt formatCode="##0.0000%" numFmtId="300"/>';
            var s1 = '<xf numFmtId="300" fontId="0" fillId="0" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyNumberFormat="1"/>';
            var s2 = '<xf numFmtId="0" fontId="2" fillId="2" borderId="0" applyFont="1" applyFill="1" applyBorder="1" xfId="0" applyAlignment="1">'+
            '<alignment horizontal="center"/></xf>' ;
            sSh.childNodes[0].childNodes[0].innerHTML = sSh.childNodes[0].childNodes[0].innerHTML + n1;
            sSh.childNodes[0].childNodes[5].innerHTML = sSh.childNodes[0].childNodes[5].innerHTML + s1 +s2;
             
            var sheet = xlsx.xl.worksheets['sheet1.xml'];
              var col = $('col', sheet);
              
              var row = $('row', sSh);
              var row1 = $('row', sheet);
                  row.attr('ht', '190').attr('customHeight', "1").attr('s','53');
                  $(row1[0]).attr('ht', '0').attr('customHeight', "1"); 
                  $(row1[1]).attr('ht', '90').attr('customHeight', "1"); 
                           $(col[0]).attr('width', 9).attr('s','53');
                           $(col[1]).attr('width', 9).attr('s','53');
                           $(col[2]).attr('width', 60).attr('s','37');
                           $(col[3]).attr('width', 30);
                           $(col[4]).attr('width', 10);
                           $(col[5]).attr('width', 70);
            $('row c[r^="A"]', sheet).attr( 's', '51' );
//                $('row c[r^="G"]', sheet).attr( 's', '60' );  //% 1 dec. place
            $('row c[r^="B"]', sheet).attr( 's', '51' );  //% 4 decimal places, as added above
           
            $('row c[r^="C"]', sheet).attr( 's', '55');
            $('row c[r^="D"]', sheet).attr( 's', '55' );
            $('row c[r^="E"]', sheet).attr( 's', '51' );
            $('row c[r^="F"]', sheet).attr( 's', '51' );
            $('row c[r^="G"]', sheet).attr( 's', '51' );
//                $('row c', sheet).attr( 's', '25' ); //for all rows
            $('row:eq(0) c', sheet).attr( 's','37');  //grey background bold and centered, as added above
            $('row:eq(1) c', sheet).attr( 's', '37' );  //grey background bold
                        // $('row c[r^="B2"]', sheet).attr( 's', '52' );

        },
        
                },
                // {
                //     extend:    'csvHtml5',
                //     text:      '<i class="fa fa-file-text-o"></i>CSV',
                //     title:'Titulo de tabla en CSV',
                //     titleAttr: 'CSV',
                //     className: 'btn btn-app export csv',
                //     exportOptions: {
                //         columns: [ 0, 1 ]
                //     }
                // },
                {
                    extend:    'print',
                    text:      '<i class="fa fa-print"></i>Imprimer',
                    title:'Titulo de tabla en impresion',
                    titleAttr: 'Imprimer',
                    className: 'btn btn-app export imprimir',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                    },
                
                },
                {
                    extend:    'pageLength',
                    titleAttr: 'Registros a mostrar',
                    className: 'selectTable'
                }
            ]
        }
        });
        } );

    $(document).on('click', '.show-modal', function() {
        $('#show').modal('show');
        $('.modal-title').text("Détail de l'Opération");
    });
</script>

<style>
 .test{
 padding:-40px;

}
.color{
    background-color:#fe6703;
}
#back{
  background-image: url("../assets/images/log.png");
  background-repeat: no-repeat;
  background-position: center;
  background-blend-mode: overlay;
  /* opacity:0.6; */
 
  
  /* -webkit-filter:blur(8px); */

}
.external {
    color: #a9afbb;
}

      :after, :before {
            box-sizing: border-box;
        }
        a {
            color: #337ab7;
            text-decoration: none;
        }
        i{
        margin-bottom:4px;
        }
        .btn {
            display: inline-block;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .btn-app {
            color: white;
            box-shadow: none;
            border-radius: 3px;
            position: relative;
            padding: 10px 15px;
            margin: 0;
            min-width: 60px;
            max-width: 80px;
            text-align: center;
            border: 1px solid #ddd;
            background-color: #f4f4f4;
            font-size: 12px;
            transition: all .2s;
            background-color: steelblue !important;
        }
        .btn-app > .fa, .btn-app > .glyphicon, .btn-app > .ion {
            font-size: 30px;
            display: block;
        }
        .btn-app:hover {
            border-color: #aaa;
            transform: scale(1.1);
        }
        .pdf {
        background-color: #dc2f2f !important;
        }
        .excel {
            background-color: #3ca23c !important;
        }
        .csv {
            background-color: #e86c3a !important;
        }
        .imprimir {
            background-color: #4682b4 !important;
        }
   
        /*
        Esto es opcional pero sirve para que todos los botones de exportacion se distribuyan de manera equitativa usando flexbox
        .flexcontent {
            display: flex;
            justify-content: space-around;
        }
        */
        .selectTable{
        height:40px;
        float:right;
        }

        div.dataTables_wrapper div.dataTables_filter {
            text-align: left;
            margin-top: 15px;
            color: #000;
        }

        .btn-secondary {
            color: #fff;
            background-color: #ff6600;
            border-color: #ff6600;
        }
        .btn-secondary:hover {
            color: #fff;
            background-color: #315f86;
            border-color: #545b62;
        }
        .titulo-tabla{
        color:#606263;
        text-align:center;
        margin-top:15px;
        margin-bottom:15px;
        font-weight:bold;
        }
        .inline{
        display:inline-block;
        padding:0;
        }
</style>
@stop
