<?php
include_once('livedata.php');?><head>
<!---conversion for home weather station brian underdown december 2015--->
<?php
$file_live=file_get_contents($livedata);$meteobridge=explode(" ",$file_live);

// output data to elements in dashboard
$meteobridge = explode(" ", $file_live);

 // outdoor convert knots to kmh 
   function knotstomph ($meteobridge)
{
  if (!isset($meteobridge[5])) {
    return false;
  }
  $meteobridge[5] = (float)(1.852 * $meteobridge[5]);
  return number_format((float)$meteobridge[5],1,'.','');
}
$meteobridge[5] = knotstomph ($meteobridge);

// outdoor convert max knots to kmh 
   function maxknotstomph ($meteobridge)
{
  if (!isset($meteobridge[30])) {
    return false;
  }
  $meteobridge[30] = (float)(1.852 * $meteobridge[30]);
  return round($meteobridge[30]);
}
$meteobridge[30] = maxknotstomph ($meteobridge);

// outdoor convert gusts knots to kmh 
   function gustknotstomph ($meteobridge)
{
  if (!isset($meteobridge[32])) {
    return false;
  }
  $meteobridge[32] = (float)(1.852 * $meteobridge[32]);
  return number_format((float)$meteobridge[32],1,'.','');
}
$meteobridge[32] = gustknotstomph ($meteobridge);

// outdoor convert avg knots to kmh 
   function avgknotstomph ($meteobridge)
{
  if (!isset($meteobridge[158])) {
    return false;
  }
  $meteobridge[158] = (float)(1.852 * $meteobridge[158]);
  return round($meteobridge[158]);
}
$meteobridge[158] = avgknotstomph ($meteobridge);
?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

   
</head> 
<div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?> </div>
<windicons>
  <!-- wind speed icons for homeweather station-->

 
<?php
echo "${meteobridge[5]}</windgust> \n";if($meteobridge[5]<1){echo "<img src='css/windspeed/Wind Speed Less 1.png' width='25px'></img>";}else if($meteobridge[5]<2){echo "<img src='css/windspeed/windspeed2.png' width='25px'></img>";}else if($meteobridge[5]<7){echo "<img src='css/windspeed/Wind Speed 3-7 Filled.png' width='25px'></img>";}else if($meteobridge[5]<12){echo "<img src='css/windspeed/Wind Speed 8-12 Filled.png' width='25px'></img>";}else if($meteobridge[5]<17){echo "<img src='css/windspeed/Wind Speed 13-17 Filled.png' width='25px'></img>";}else if($meteobridge[5]<22){echo "<img src='css/windspeed/Wind Speed 18-22 Filled.png' width='25px'></img>";}else if($meteobridge[5]<27){echo "<img src='css/windspeed/Wind Speed 23-27 Filled.png' width='25px'></img>";}else if($meteobridge[5]<32){echo "<img src='css/windspeed/Wind Speed 28-32 Filled.png' width='25px'></img>";}else if($meteobridge[5]<37){echo "<img src='css/windspeed/Wind Speed 33-37 Filled.png' width='25px'></img>";}else if($meteobridge[5]<42){echo "<img src='css/windspeed/Wind Speed 38-42 Filled.png' width='25px'></img>";}else if($meteobridge[5]<47){echo "<img src='css/windspeed/Wind Speed 43-47 Filled.png' width='25px'></img>";}else if($meteobridge[5]<52){echo "<img src='css/windspeed/Wind Speed 48-52 Filled.png' width='25px'></img>";}else if($meteobridge[5]<57){echo "<img src='css/windspeed/Wind Speed 53-57 Filled.png' width='25px'></img>";}else if($meteobridge[5]<62){echo "<img src='css/windspeed/Wind Speed 58-62 Filled.png' width='25px'></img>";}else if($meteobridge[5]<102){echo "<img src='css/windspeed/Wind Speed 98-102 Filled.png' width='25px'></img>";}else if($meteobridge[5]<107){echo "<img src='css/windspeed/Wind Speed 103-107 Filled.png' width='25px'></img>";}?></windicons> <!-- end wind speed icons -->
<h2 style="padding-bottom:5px;line-height:1em;height:50px;">

<?php
echo "${meteobridge[5]} \n"; ?><verticalline></verticalline> <span style="color:#a0a5a9;">
<?php echo "${meteobridge[5]}</windgust> \n"; ?></span></h2>

<!-- avg wind for homeweather station-->
<div style="margin-top:-5px;margin-left:10px;position:absolute;">
<div class="GaugeMeter" id="maxwind" data-percent="<?php print "${meteobridge[30]}";?>" data-size="70" data-theme="LightBlue-Red" data-back="RGBa(0,0,0,.1)" data-animate_gauge_colors="1" data-animate_text_colors="1" data-width="10" data-label="MaxWind" data-label="Gust <p><?php print "${windunits}";?>" data-label_color="#66a1ba"  data-stripe="1.5"></div></div>
 <!--max wind for homeweather station-->
<div style="margin-top:-5px;margin-left:200px;position:absolute;">
<div class="GaugeMeter" id="maxgusts" data-percent="<?php print "${meteobridge[32]}";?>" data-append="" data-size="70" data-theme="LightBlue-Red" data-back="RGBa(0,0,0,.1)" data-animate_gauge_colors="1" data-animate_text_colors="1"  data-width="10" data-label="Gust <p><?php print "${windunits}";?>" data-label_color="#66a1ba"  data-stripe="1.5"></div></div>
<!-- end avg/max-->
<script language=JavaScript>

$(".GaugeMeter").gaugeMeter();
</script>
