<?php
include_once('livedata.php');?><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head> <div class="tempcontainer1"><div class="circleOut">
  <span style="font-size:0px;">  
  <?php echo "Indoor \n"?>
<?php echo " ${meteobridge[22]}&deg;</span> \n";if($meteobridge[22]>0){echo "<div class=\"\"></div><div class=\"temptext1\"> ${meteobridge[22]}<suptemp1>&deg;</suptemp1></div>";}
else if($meteobridge[22]<50){echo "<div class=\"\"></div><div class=\"temptext1\"> ${meteobridge[22]}<suptemp1>&deg;</suptemp1></div>";}

?>
</div></div>