<?php
include 'database.php';
session_start();

 $mob=$_SESSION['mobile'];
 echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';
 echo "  Hello  " ;
 echo $mob;
?>



<!DOCTYPE html>
<html>
<head>
	<title>Timeline</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="timeline.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="#" class="navbar-brand"><i class="fa fa-envira" aria-hidden="true"></i>Kisaan Shakti</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="farmland.php">Land Optimisation</a></li>
					<li><a href="marketDatanew.php">Crop Rates</a></li>
					<li><a href="pie.php">Display Land Optimisation</a></li>
					<li><a href="https://dir.indiamart.com/impcat/agricultural-products-transportation-services.html">Transport</a></li>
					<li><a href="https://www.tineye.com/">Plant-Disease Info</a></li>
					<li><a href="schemes.php">Available Government Schemes</a></li>
					<li><a href="wet.php" id="weather">Weather<sup> NEW</sup></a></li>
					<li><a href="cold.php" id="weather">Cold storages<sup> NEW</sup></a></li>

				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="buyerLogin.html">Sign Out</a></li>
					<br>
				</ul>
			</div>
			
		</div>
	</nav>
       
    	    		 <div class="containerN">
					 <div class = "topright">
    		   <img src="http://3.bp.blogspot.com/-XiA06EZLJlk/U4Lyd0uUrLI/AAAAAAAABNc/SZjZwS50lm4/s1600/Kisan.jpg" class="img-circle" height="50px" width="50px" >
    		   
    		   <h3>KISAAN CALL CENTER</h3>
    		   <h4>1800 180 1551</h4>
    		</div>
    	</div>
                 <div class="container">
	<div class="row">
		<div class="content">
 		<div class="col-lg-12">
<h2>KISAAN SHAKTI</h2>
<h1>A Farmer friendly portal!</h1>

<hr>

</div>
</div>
</div>
</div>
  
 














                  
		
		</footer>
    





<script type="text/javascript" src="timeline.css"></script>
</body>
</html>