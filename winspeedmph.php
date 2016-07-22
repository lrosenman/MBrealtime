<?php
include_once('livedata.php');?><head>
<!---conversion for home weather station brian underdown december 2015--->
<?php
$file_live=file_get_contents($livedata);$meteobridge=explode(" ",$file_live);
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 
</head> 
<div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?> </div>
<div class="windicons">
  <!-- wind speed icons for homeweather station-->

 
<?php
echo "${meteobridge[5]}</windgust> \n";if($meteobridge[5]<1){echo "<img src='css/windspeed/Wind Speed Less 1.png' width='25px'></img>";}else if($meteobridge[5]<2){echo "<img src='css/windspeed/windspeed2.png' width='25px'></img>";}else if($meteobridge[5]<7){echo "<img src='css/windspeed/Wind Speed 3-7 Filled.png' width='25px'></img>";}else if($meteobridge[5]<12){echo "<img src='css/windspeed/Wind Speed 8-12 Filled.png' width='25px'></img>";}else if($meteobridge[5]<17){echo "<img src='css/windspeed/Wind Speed 13-17 Filled.png' width='25px'></img>";}else if($meteobridge[5]<22){echo "<img src='css/windspeed/Wind Speed 18-22 Filled.png' width='25px'></img>";}else if($meteobridge[5]<27){echo "<img src='css/windspeed/Wind Speed 23-27 Filled.png' width='25px'></img>";}else if($meteobridge[5]<32){echo "<img src='css/windspeed/Wind Speed 28-32 Filled.png' width='25px'></img>";}else if($meteobridge[5]<37){echo "<img src='css/windspeed/Wind Speed 33-37 Filled.png' width='25px'></img>";}else if($meteobridge[5]<42){echo "<img src='css/windspeed/Wind Speed 38-42 Filled.png' width='25px'></img>";}else if($meteobridge[5]<47){echo "<img src='css/windspeed/Wind Speed 43-47 Filled.png' width='25px'></img>";}else if($meteobridge[5]<52){echo "<img src='css/windspeed/Wind Speed 48-52 Filled.png' width='25px'></img>";}else if($meteobridge[5]<57){echo "<img src='css/windspeed/Wind Speed 53-57 Filled.png' width='25px'></img>";}else if($meteobridge[5]<62){echo "<img src='css/windspeed/Wind Speed 58-62 Filled.png' width='25px'></img>";}else if($meteobridge[5]<102){echo "<img src='css/windspeed/Wind Speed 98-102 Filled.png' width='25px'></img>";}else if($meteobridge[5]<107){echo "<img src='css/windspeed/Wind Speed 103-107 Filled.png' width='25px'></img>";}?></div> <!-- end wind speed icons -->
<h2 style="padding-bottom:5px;line-height:1em;height:50px;">

<?php
echo "${meteobridge[5]} \n"; ?><span style="color:#df826b;font-size:0.4em;"><?php echo "${windunits} \n"; ?></span> <span style="color:#a0a5a9;">
<?php echo "${meteobridge[32]}</windgust> \n"; ?></span></h2>


</body>