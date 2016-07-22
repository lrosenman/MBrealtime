<?php
include_once('livedata.php');?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?> </div>
<div class="average"><span></span>


<?php echo "";
if ($meteobridge[18]<0) {echo "- $meteobridge[18]"; }
	else if ($meteobridge[18]>0) {
   echo "+ $meteobridge[18]";
}


?>



</div>

  <body>
         <div id="circularGaugeContainer" style="height:160px;"></div>
         <div class="barometertrend">
 <span style='font-size:0px;'>
<?php echo "${meteobridge[18]} </span>\n";
if ($meteobridge[18]<0) {
   echo "<falling>falling</falling><span style='color:#607d8b;'>
	<i class='wi wi-wind towards-225-deg'></i>
	steadily</span>";
}
elseif ($meteobridge[18]>0) {
     echo "<rising>rising</rising><span style='color:#607d8b;'>
	<i class='wi wi-wind towards-45-deg'></i>
	steadily</span>";
}

else echo "<span style='color:#607d8b;'>trend
	<i class='wi wi-wind towards-90-deg'></i></span>
	<steady>steady</steady>";

?></div> 
 <div class="h2mbvalue"><?php echo "${meteobridge[10]} <supunit>${pressureunit}</supunit>\n";?>
 </body>
<script>
$("#circularGaugeContainer").dxCircularGauge({
  rangeContainer: { 
   width: 8,
    offset: -2,
    ranges: [
	  //{ startValue: 960, endValue: 965, color: 'rgba(233, 235, 241, 1)'},
      { startValue: 960, endValue: <?php print "${meteobridge[10]}\n";?>, color: 'rgba(223,130,107,0.9)'},
	  { startValue: <?php print "${meteobridge[10]}\n";?>, endValue: 1050, color: 'rgba(0,0,0,0.5)'},
	  //{ startValue: 1045, endValue: 1050, color: 'rgba(233, 235, 241, 1)'}
    ]
  },
  
  scale: {
    startValue: 960,  endValue: 1050,
    majorTick: { tickInterval: 10, visible: true, color: 'rgba(255,255,0,0.1)'},
	minorTick: {color: 'rgba(102,161,168,0.4)',visible: true,minorTickInterval: 5,},
	label: {
	format: '',
	font:{size:10},
	
    }
  },
  
  valueIndicator: {
	    type: 'TriangleNeedle',
        color:'#999',
		secondColor:'#df826b',
		width:5,
		offset:-10,
		//secondFraction:15		
    },
	
	
	
	
  value: <?php print "${meteobridge[10]}"?>,
  subvalues: <?php print "${meteobridge[34]}"?>,
    subvalueIndicator: {
        type: 'triangleMarker',
        color: 'rgba(255,255,255,0.5)',		
		space:0,length:14,width:10,offset:2,
    },
	  
});

</script>



</html>
