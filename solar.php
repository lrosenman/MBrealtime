<?php
include_once('livedata.php');?><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>  <div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?> </div>
                  <hr>
                              <span style="font-size:0px;">
<?php
echo "${meteobridge[43] }</span> \n";
if ($meteobridge[43] <= 0) {
    echo "<div class=\"uv01\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">No <color>caution</color> required </div>";
} else if ($meteobridge[43] < 1) {
    echo "<div class=\"uv01\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">No <color>caution</color> required </div>";
} else if ($meteobridge[43] < 2) {
    echo "<div class=\"uv03\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Wear <color>sunglasses</color> on bright days </div>";
} else if ($meteobridge[43] < 3) {
    echo "<div class=\"uv03\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Wear <color>sunglasses</color> on bright days </div>";
} else if ($meteobridge[43] < 4) {
    echo "<div class=\"uv35\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Stay in the shade near midday when the <color>sun</color> is strongest</div>";
} else if ($meteobridge[43] < 5) {
    echo "<div class=\"uv35\">${meteobridge[43] }<uvi>UVI</uvi><uvi>UVI</uvi></div><div class=\"uvtext\">Stay in the shade near midday when the <color>sun</color> is strongest</div>";
} else if ($meteobridge[43] < 6) {
    echo "<div class=\"uv35\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Stay in the shade near midday when the <color>sun</color> is strongest</div>";
} else if ($meteobridge[43] < 7) {
    echo "<div class=\"uv67\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Reduce time in the <color>sun</color> between 10am-4pm</div>";
} else if ($meteobridge[43] < 8) {
    echo "<div class=\"uv67\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Reduce time in the <color>sun</color> between 10am-4pm</div>";
} else if ($meteobridge[43] < 9) {
    echo "<div class=\"uv810\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Minimize <color>sun</color> exposure between 10am-4pm</div>";
} else if ($meteobridge[43] < 10) {
    echo "<div class=\"uv810\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Minimize <color>sun</color> exposure between 10am-4pm</div>";
} else if ($meteobridge[43] < 11) {
    echo "<div class=\"uv810\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Minimize <color>sun</color> exposure between 10am-4pm</div>";
} else if ($meteobridge[43] < 12) {
    echo "<div class=\"uv1112\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Try to avoid<color>sun</color> exposure between 10am-4pm</div>";
} else if ($meteobridge[43] < 13) {
    echo "<div class=\"uv1112\">${meteobridge[43] }<uvi>UVI</uvi></div><div class=\"uvtext\">Try to avoid<color>sun</color> exposure between 10am-4pm</div>";
}
?> 
 <!-- solar radiation for homeweather station-->
  <span style='font-size:0px;'>
  <?php echo "";if($meteobridge[45]>0){echo "<div class=\"solarcircle\">${meteobridge[45]}<br><span>w/m&sup2</span>";}
?>
  
  
</span>