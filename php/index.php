<!DOCTYPE html> 
<html lang="en">
	<head>
		<title>Accueil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/malek.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen">
		<script src="../js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="../js/cufon-yui.js" type="text/javascript"></script>
		<script src="../js/cufon-replace.js" type="text/javascript"></script>
		<script src="../js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
		<script src="../js/FF-cash.js" type="text/javascript"></script>
		<script src="../js/script.js" type="text/javascript"></script>
		<script src="../js/jquery.equalheights.js" type="text/javascript"></script>
		<script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="../js/tms-0.3.js" type="text/javascript"></script>
		<script src="../js/tms_presets.js" type="text/javascript"></script>
		<script src="../js/easyTooltip.js" type="text/javascript"></script>

	</head>
	<body id="page1">
		<div class="extra">
			<div class="main">
<!--==============================header=================================-->
				<header>
					
				
							
					
					<div class="wrapper">
						<div class="slider">
							<ul class="items">
								<li><img src="../images/food.png" alt="" /></li>
								<li><img src="../images/m.png" alt="" /></li>
								<li><img src="../images/a.png" alt="" /></li>
							</ul>
						</div>
						
						
					
				</header>
<!--==============================aside================================-->
              <aside>
				<form name="f1" method="post"  action="../php/connect.php">
					<div class="label">
						 <div class="textbox">	   
                           <i class="fa fa-user" aria-hidden="true"></i>						 
                          <input type="text" id="name" name="name" placeholder="Username" required />
						 </div></br>
	                     <div class="textbox">	  
                          <i class="fa fa-lock" aria-hidden="true"></i>
                          <input type="password" id="mdp" name="mdp" placeholder="Password" required />
						 </div></br>
					</div>
									<div class="aligncenter">
									   
									    <button class="button" type="submit">CONNECT</button>
										<a href="inscription.php"><button class="button" type="button">REGISTRATION</button></a>
									
								    </div>
							</div>
				</form>
			</aside>	

					<div class="block"></div>
				
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
		<script type="text/javascript"> Cufon.now(); </script>
		<script type="text/javascript">
			$(window).load(function() {
				$('.slider')._TMS({
					duration:800,
					easing:'easeOutQuart',
					preset:'simpleFade',
					slideshow:7000,
					banners:false,
					pauseOnHover:true,
					waitBannerAnimation:false,
					prevBu:'.prev',
					nextBu:'.next'
				});
			});
		</script>
	
	</body>
</html>