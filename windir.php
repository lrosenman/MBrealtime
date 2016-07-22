<?php
include_once('settings.php');?>
<?php
$file_live=file_get_contents($livedata);$meteobridge=explode(" ",$file_live);
// remove decimal wind direction
function windir1($meteobridge){if(!isset($meteobridge[7])){return false;}$meteobridge[7]=(float)(1*$meteobridge[7]);return number_format((float)$meteobridge[7],0,'.','');}$meteobridge[7]=windir1($meteobridge);
?><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--minimal home weather station start parsing live raw output --->
<style>
.homeweatherstationcompass .direction.degree{transform:rotate(<?php echo $meteobridge[7];?>deg)}
</style>
 
</head>  <body><div class="updatedtimedir"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?>  </div>

<div class="averagedir"><span>Average:</span>
<?php echo "$meteobridge[51]";?>

</div>
<div class="windirectionvalue"><?php echo "${meteobridge[7]}&deg; \n";?></div>
<div class="homeweatherstationcompass"><span style="font-size:0px;">
   <?php echo "${meteobridge[7]}&deg; </span>\n"; 
  if($meteobridge[7]<1){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">Calm <br><span>Conditions</span></div>";} 
  else if($meteobridge[7]<6){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">Due <span>North</span></div>";}
  else if($meteobridge[7]<28){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">NorthNorth <br><span>East</span></div>";}
  else if($meteobridge[7]<51){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">North <span>East</span></div>";}
  else if($meteobridge[7]<68){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">EastNorth<br><span>East</span></div>";}
  else if($meteobridge[7]<95){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">Due <span>East</span></div>";}
  else if($meteobridge[7]<119){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">EastSouth<br><span>East</span></div>";}
  else if($meteobridge[7]<140){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">South <span>East</span></div>";}
  else if($meteobridge[7]<152){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">SouthSouth<br><span>East</span></div>";}
  else if($meteobridge[7]<185){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">Due<span>South</span></div>";}
  else if($meteobridge[7]<208){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">SouthSouth<br><span>West</span></div>";}
  else if($meteobridge[7]<230){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">South <span>West</span></div>";}
  else if($meteobridge[7]<254){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">WestSouth<br><span>West</span></div>";}
  else if($meteobridge[7]<275){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">Due <span>West</span></div>";}
  else if($meteobridge[7]<298){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">WestNorth<br><span>West</span></div>";}
  else if($meteobridge[7]<320){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">North <span>West</span></div>";} 
  else if($meteobridge[7]<354){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">NorthNorth<br><span> West</span></div>";}    
  else if($meteobridge[7]<361){echo "<div class=\"direction degree\"></div><div class=\"windirectionwords\">Due <span>North</span></div>";}
   ?>
<ul class='windirectionwind-container '>
  <li>.</li>  <li><span>.</span></li>  <li>.</li>  <li><span>.</span></li>  <li>.</li>  <li><span>.</span></li>  <li>&nbsp;&nbsp;North</li>  <li><span>.</span></li></ul>



