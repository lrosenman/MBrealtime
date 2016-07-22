<?php
include_once('settings.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>HOUR FORECAST</title>
		
		 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.min.css" rel="stylesheet">  
<link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet prefetch" type="text/css">  
<script src="js/jquery.js"></script> 
<script src="js/jqueryui.js"></script>
<script src="js/combi.js" type="text/javascript" charset="utf-8"></script>
	
			
        <br>
       <p style="height:400px;width:700px;background-image:url(css/logos/graphlogo.png);background-position:left 45px bottom 5px;background-repeat:no-repeat !important;"><div class="outlook"><div class="with-badge"><div class="outlooktitle">   
  <span><i class="fa fa-map-marker1"></i>    <?php
echo "${stationName} \n";
?> </span>Outlook Today & <span>Tomorrow</span></div>
   <!-- day outlook --->
   <section id='dayicon' style="background-repeat:no-repeat !important;margin-left:5px; ">
  <section id='day' style="margin-left:55px;z-index:1;"></section></section>
  <!-- night outlook --->
  <section id='nticon' style="background-repeat:no-repeat !important;margin-top:20px;margin-left:5px; ">
  <section id='night' style="margin-left:55px;z-index:1;"></section></section></p>
   <section id='tomoicon' style="background-repeat:no-repeat !important;background-size:60px;margin-top:-20px;margin-left:5px; ">
  <section id='tomo' style="margin-left:55px;z-index:1;"></section></section></div></div></div></p>
  
  
  	
	</body>
</html>