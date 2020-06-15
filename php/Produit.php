<?php
require_once "../dao/ProduitDao.php"
?>
<?php
session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
		header("location: ../php/index.php");
}

if(($_SESSION['role']==1))
{
	header("location: ../php/PageAdmin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Produit</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/malek.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/table.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/menu.css" type="text/css" media="screen">
		<link href="../css/commande.css" rel="stylesheet">
		<link href="../css/designe.css" rel="stylesheet">
		<script src="../js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="../js/cufon-yui.js" type="text/javascript"></script>
		<script src="../js/cufon-replace.js" type="text/javascript"></script>
		<script src="../js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
		<script src="../js/FF-cash.js" type="text/javascript"></script>
		<script src="../js/script.js" type="text/javascript"></script>
		<script src="../js/jquery.equalheights.js" type="text/javascript"></script>
		<script src="../js/easyTooltip.js" type="text/javascript"></script>
		<script defer src="../js/script2.js"></script>

	</head>
	<body id="page4">
		<div class="extra">
			<div class="main">
<!--==============================header=================================-->
				<header>
					<div class="indent">
						
						<nav>
							<ul class="menu">
								<li><a href="../php/exit.php">Home</a></li>
								<li><a href="">Services</a></li>								
								<li><a class="active" href="../php/Produit.php">prices</a></li>
								<li><a href="">Our Staff</a></li>
								<li><a href="">We</a></li>
								<li class="last"><a href="../php/contacts.php">Contacts</a></li>
							</ul>
						</nav>
					</div>

				</header>
<!--==============================content================================-->
				<section id="content">
					<div class="indent-left">
						<h3 class="p1">Our prices :</h3>	
                <table>
                      <thead>
                        <tr>
                          <th>REFERANCE</th>
						  <th>QUANTITY</th>
                          <th>PRODUCT NAME</th>
                          <th>PRICE</th>
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
                        </tr>
                        <?php } ?>
                      </tbody>
                </table> 
			    <div class="block"></div>
                </div>
				</section>
				<button data-modal-target="#modal" class="button" style="margin-left: 45%;">ORDER</button>
				<div class="modal" id="modal">
   
   <div class="modal-body">
	 <div id="booking" class="">
	   <div class="section-center">
		   <div class="container">
			   <div class="row">
				   <div class="booking-form">
					   <div class="form-header">
						   <h3> Make your order</h3>
					   </div>
					   <form action="../controler/CommandeController.php?action=add" method="post">
						  
						   <div class="row">
							   <div class="col-md-6">
								   <div class="form-group">
									   <input class="form-control" type="date" name="date" required>
									   <span class="form-label">Date</span>
								   </div>
							   </div>
							   
						   </div>
						   
						   <div class="row">
							   <div class="col-md-6">
								   <div class="form-group">
									   <input class="form-control" type="text" placeholder="Enter your name" name="email" required>
									   
								   </div>
							   </div>
							   <div class="col-md-6">
								   <div class="form-group">
									   <input class="form-control" type="text" placeholder="Enter Product Reference" name ="produit" required>
								   </div>
							   </div>
							   
						   </div>
						   <div class="form-btn">
							   <button class="submit-btn" type="submit">SEND</button>
							   
						   </div>
					   </form>
				   </div>
			   </div>
		   </div>
	   </div>
   </div>
   </div>
 </div>
 <div id="overlay"></div>
					<div class="block"></div>	
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="main">
				<div class="footer-bg">
					<p class="prev-indent-bot">Copyright 2020 &copy; All Right Reserved</p>
					<ul class="list-services">
						<li><a class="tooltips" title="facebook" href="#"></a></li>
						<li class="item-1"><a class="tooltips" title="twitter" href="#"></a></li>
						<li class="item-2"><a class="tooltips" title="linkedin" href="#"></a></li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>