<?php
session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
		header("location: ../php/index.php");
}

if(($_SESSION['role']==2))
{
	header("location: ../php/services.php");
}

?>
<?php 
require_once '../dao/ClientDao.php';
require_once '../dao/ProduitDao.php';
require_once '../dao/CommandeDao.php';
require_once '../model/ConnexionBD.class.php';
?>
<?php 
if (isset($_POST['chercher1']))
{
$valuesearch=$_POST['chercher'];
$query="select * from client where mailc like '%".$valuesearch."%'";
$search_resultat=filter($query);
}
else {
$search_resultat=ClientDao::GetAllClient();
}
function filter($query){
  $connect= new ConnexionBD();
  $rech=$connect->query($query);
  return $rech->fetchall();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title> PageAdmin </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/chercher.css">
  </head>

  <body class="nav-md">
   
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <div class="clearfix"></div>
            <div class="row">
          
                 <div class="col-md-12 col-sm-6 col-xs-12">
                 
                 <div class="x_panel">         
                    <div class="x_title">
                    <h1>Tous les Produits</h1>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>REFERANCE</th>
                          <th>QUANTITE</th>
                          <th>NOM PRODUIT</th>
                          <th>PRIX</th>
                          <th>ACTIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  foreach (ProduitDao::GetAllProduit() as  $value) {
                         ?>
                         <tr>
                          <td><?php echo $value[0]; ?></td>
                          <td><?php echo $value[1]; ?></td>
                          <td><?php echo $value[2]; ?></td>
                          <td><?php echo $value[3]; ?> DT</td>
                           <td> <a href="../controler/ProduitController.php?action=formupdate&refproduit=<?php echo $value[0];?>" class="btn btn-primary xs-btn">modifier</a>
                          <a class="btn btn-danger xs-btn" href="../controler/ProduitController.php?action=delete&refproduit=<?php echo $value[0];?>">supprimer</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>     
                   <a href="../controler/ProduitController.php?action=formadd"><button type="button" class="btn btn-success">Ajouter Produit</button></a>      
                  </div>
                  <a href="../php/exit.php"  class="btn btn-success" style="margin-left: 40%;" >DECONNEXION</a>
                </div>
                  </div>
                </div>
            </div>
          </div>
        
      
      </div>
    </div>
    
    

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>