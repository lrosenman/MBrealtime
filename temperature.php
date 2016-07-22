<?php
include_once('livedata.php');?><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head> <div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?> </div>

<div class="average"><span></span>
<?php echo "";
if ($meteobridge[25]<0) {echo "- $meteobridge[25]"; }
	else if ($meteobridge[25]>0) {
   echo "+ $meteobridge[25]";
}


?>

</div>






<!-- start animated temperature for homeweather station--> 
                <div class="tempcontainer"><div class="circleOut">
  <?php echo "".$meteobridge[2]."&deg;</span> \n";if ($meteobridge[2]>60){echo "<div class=\"veryhot\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<2){echo "<div class=\"freezing\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<5){echo "<div class=\"cold\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<10){echo "<div class=\"colder\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<12){echo "<div class=\"cooler\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<15){echo "<div class=\"mild\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<20){echo "<div class=\"milder\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<23){echo "<div class=\"gettingcooler\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<25){echo "<div class=\"warm\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<27){echo "<div class=\"warmer\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<30){echo "<div class=\"hot\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<35){echo "<div class=\"hotter\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<38){echo "<div class=\"hotter\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<40){echo "<div class=\"veryhot\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}else if($meteobridge[2]<50){echo "<div class=\"extremehot\"></div>
<div class=\"temptext\">${meteobridge[2]}<suptemp>&deg;</suptemp></div>";}?>


</div><!-- end animated temperature-->  
<div class="max"><?php echo "${meteobridge[26]}&deg;\n"; ?><span style="color:#ccc;line-height:0.7em;font-size:16px;vertical-align:middle;font-weight:100;"> |</span> <?php
echo "${meteobridge[47]}&deg;\n"; ?></div>

<div class="temptrend"><span style="font-size:0px;">
<?php echo "${meteobridge[2]} </span>  \n";
if ($meteobridge[2]<=0.25) {
    echo "<span style='color:#fff;'>Temp <i class='wi wi-wind towards-225-deg'></i> Falling";
}
elseif ($meteobridge[2]<=-0.75) {
   echo "<span style='color:#fff;'>Temp <i class='wi wi-wind towards-225-deg'></i> Falling";
}
elseif ($meteobridge[2]<=-1.25) {
    echo "<span style='color:#fff;'>Temp <i class='wi wi-wind towards-225-deg'></i> Falling";
}
elseif ($meteobridge[2]>=0.25) {
    echo "<span style='color:#fff;'>Temp <i class='wi wi-wind towards-45-deg'></i> Rising ";
}
elseif ($meteobridge[2]>=0.75) {
     echo "<span style='color:#fff;'>Temp <i class='wi wi-wind towards-45-deg'></i> Rising ";
}
elseif ($meteobridge[2]>=1.25) {
    echo "<span style='color:#fff;'>Temp <i class='wi wi-wind towards-45-deg'></i> Rising ";
}
else echo "<span style='color:#fff;'>Temp <i class='wi wi-wind towards-90-deg'></i> Steady</span>";?>

</span></div>
</div>  </div>
<div class="heatcircle">
<div class="heatcircle-content"><?php echo "";
if ($meteobridge[41] >27) {
    echo "HeatIndex <br><span style='font-weight:700;color:#ee7159;'>${meteobridge[27]}&deg; \n";
	echo "${templateunit}</span>";
}
else if($meteobridge[24] <10) {
    echo "Windchill <br><span style='font-weight:700;color:#5395b5;'>${meteobridge[24]}&deg; \n";
	echo "${templateunit}</span>";
}

else {
    echo "Temp Factors <br><span style='font-weight:700;color:#ee7159;'>No Cautions</span> \n";
}?></span>
<div class="heatcircle-content">Humidity <br><span style="font-weight:700;color:#51b1a5;"><?php echo "${meteobridge[3]}%\n"; ?></span>
<div class="heatcircle-content">Dewpoint <br><span style="font-weight:700;color:#66a1ba;"><?php echo "${meteobridge[4]}&deg; \n"; ?><?php echo "${templateunit} \n";?></span>
</div></div></div></div></div>