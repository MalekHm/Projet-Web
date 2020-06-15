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
		<title>Contact</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/malek.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen">
		<link href="../css/commande.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/menu.css" type="text/css" media="screen">
		<script src="../js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="../js/cufon-yui.js" type="text/javascript"></script>
		<script src="../js/cufon-replace.js" type="text/javascript"></script>
		<script src="../js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
		<script src="../js/FF-cash.js" type="text/javascript"></script>
		<script src="../js/script.js" type="text/javascript"></script>
		<script src="../js/jquery.equalheights.js" type="text/javascript"></script>
		<script src="../js/easyTooltip.js" type="text/javascript"></script>
	</head>
	<body id="page6">
		<div class="extra">
			<div class="main">
<!--==============================header=================================-->
				<header>
					<div class="indent">
						
						<nav>
							<ul class="menu">
								<li><a href="../php/exit.php">Home</a></li>
								<li><a href="../php/services.php">Services</a></li>
								<li><a href="produit.php">Prices</a></li>
								<li><a href="">Our Staff</a></li>
								<li><a  href="">We</a></li>
								<li class="last"><a class="active" href="contacts.php">Contacts</a></li>
							</ul>
						</nav>
					</div>
					
				</header>
<!--==============================content================================-->
				<section id="content">
					<div class="wrapper">
						<article class="col-1">
							<div class="indent-left">
								<h3 class="p1">We'd love to hear from you</h3>
								<form id="contact-form" method="post" action="../controler/ContactController.php?action=add">
									<fieldset>
										<label><span class="text-form">Full Name:</span><input type="text" name="name"/></label>
										<label><span class="text-form">E-mail:</span><input type="text" name="email" /></label>
										<label><span class="text-form">Telephone:</span><input type="text" name="tel" /></label>
										<div class="wrapper">
											<div class="text-form">Message:</div>
											<div class="extra-wrap">
												<textarea name="message"></textarea>
											</div>
										</div>
										<div class="buttons">
											<button class="button" type="reset">Clear</button>
											<button class="button" type="submit">Send</button>
										</div>
									</fieldset>
								</form>
							</div>
						</article>
						<article class="col-2">
							<h3 class="p1">Our Contact</h3>
							<h6>TUNISIA</h6>
							<dl class="img-indent-bot">
								<dt>8901 Marmora Road, Glasgow, D04</dt>
								<dd><span>Telephone:</span><strong>+216 52 458 412</strong></dd>
								<dd><span>Fax:</span><strong>70 859 632</strong></dd>
								<dd><span>Email:</span><strong>foodeiblog@hotmail.com</strong></dd>
								<img src="../images/map.jpg" >
							</dl>
						</article>
					</div>
					<div class="block"></div>
				</section>
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