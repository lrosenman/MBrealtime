<?php ob_start("ob_gzhandler");?>
<?php include_once('livedata.php');?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php echo "${stationName} \n";?> Current Weather & Forecast via Home Weather Station  ">
<meta property=og:type content="website">
<meta name="revisit-after" content="7 days">
<meta name="distribution" content="web">
<meta property="og:url" content="">
<meta property="og:site_name" content=" <?php echo "${stationName} \n";?> Weather & Forecast via Home Weather Station "> 
<meta property="og:description" content="<?php echo "${stationName} \n";?> Home weather station ">
<meta property="og:image" content="img/pws.jpg">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name=author content="brian underdown" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<meta name="robots" content="INDEX, NO FOLLOW"/>
<!-- css files --->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.min.css?version=3.2" rel="stylesheet">   
<link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js"></script>
<script type="text/javascript"src='js/gauge.js'></script> 
<script>
$(document).ready(function(){getweathertemp();});
$(document).ready(function(){getweatherwindir();});
$(document).ready(function(){getweatherwindspeed();});
$(document).ready(function(){getweatherbarometer1();});
$(document).ready(function(){getweatherrain();});
$(document).ready(function(){getweathersolar();});
$(document).ready(function() {$("#currentsky").load("currentsky.php");var refreshId = setInterval(function() {$("#currentsky").load('currentsky.php');},360000);});
$(document).ready(function() {$("#indoor").load("indoor.php");var refreshId = setInterval(function() {$("#indoor").load('indoor.php');},20500);});
function getweathertemp(){$("#temperature").load('temperature.php');setTimeout(function(){getweathertemp();},16500); }
function getweatherwindir(){$("#dir").load('windir.php');setTimeout(function(){getweatherwindir();},16000);}
function getweatherwindspeed(){$("#speed").load('winspeedmph.php');setTimeout(function(){getweatherwindspeed();},16000); }
function getweatherbarometer1(){$("#barometer").load('barometer.php');setTimeout(function(){getweatherbarometer1();},16500);}
function getweatherrain(){$("#rainrate").load('rainrate.php');setTimeout(function(){getweatherrain();},16500);}
function getweathersolar(){$("#solar").load('solar.php');setTimeout(function(){getweathersolar();},16500); }
</script>

 <!--- IDESIGN34 CLIENTRAW HOME WEATHER STATION TEMPLATE //
// DO NOT MODIFY ANYTHING BELOW. API KEY AND STATION DATA SOURCES ARE NOT ENTERED OR MODIFIED ON THIS PAGE //
// CREATED AND ORIGINALLY DESIGNED AUGUST 2015 , THANK YOU WEATHER UNDERGROUND FOR THE JSON FILES //
// THANK YOU TO WEATHER DISPLAY CREATORS IT IS THE SOURCE OF YOUR DATA WITH CLIENTRAW SO BUY THERE SOFTWARE ITS WORTH IT//
// DESIGNED AND CREATED BY BRIAN UNDERDOWN AUGUST 2015 updated March 2016 // --->

<title><?php echo "${meteobridge[4]}&deg;\n";?><?php echo "${weather}\n";?><?php echo "${stationName} \n";?> HOME WEATHER STATION </title>
<meta property="og:title" content="<?php echo "${meteobridge[4]}&deg;\n"; ?> Conditions: <?php echo "${weather}   \n"; ?> <?php echo "${stationName} \n";?> HOME WEATHER STATION <?php echo "${station_id} \n"; ?>">
</head>  
  <body>
<br />
<!-- header bar--> 
<div class="container"> 
<div class="rowheader">
  <div class="box temperature icon-temp">
     <div class="weathertitle">Temperature Indoor</div>
    <div id="indoor"></div><!-- end indoor temperature for homeweather station-->    
    <div class="title"><?php echo "${indoorunit}"?></div>    
  </div>
  <div class="box humiditylocal icon-humidity">
  <div class="weathertitle">Humidity Indoor</div>
  <div class="tempcontainer1"><div class="circleOut" style="margin-left:-20px;">
  <span style="font-size:0px;">  
  <?php echo "Indoor \n"?>
<?php echo " ${meteobridge[23]}&deg;</span> \n";if($indoorhumidity>0){echo "<div class=\"\"></div><div class=\"temptext1\"> ${meteobridge[23]}<suptemp1>%</suptemp1></div>";}
else if($meteobridge[23]<100){echo "<div class=\"\"></div><div class=\"temptext1\"> ${meteobridge[23]}<suptemp1>%</suptemp1></div>";}

?>
</div></div></span><!-- end animated temperature for homeweather station-->    
    <div class="title">Percent</div>
    
  </div> 
  
  <div class="box timelocal icon-time">
  <div class="weathertitle">HOME<span>WEATHER</span>STATION</div>
    <div class="clock-container">
     <!-- homeweather local time  -->   
  <ul>
    <li><span></span></li>
    </ul></div>
     <!-- h0meweather end local time  -->   
   <div class="title"><i class="fa fa-map-marker1"></i> <?php echo "${stationlocation} \n";?></div>
    
  </div>
  
  </div>
</div>

 
 <div class="container-fluid"> 
 
 
      <!-- FIRST ROW  -->     
      <div class="row">
      <!-- temperature for homeweather station-->
        <div class="col-sm-4 "><div class="weatherdash"><weathertitle>Temperature &deg;<?php echo "${templateunit} \n";?></weathertitle><hr>
                
        <div id="temperature"></div>    </div>   
<div class="chart">
<a href="yearly/yeartemp.php" data-featherlight="iframe" ><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('Y');?></span> </a>  
<a href="yearly/monthtemp.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('F');?></span> </a>  
<a href="yearly/temptoday.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('l');?></span> </a>    </div>   
        </div>

      <!-- forecast for homeweather station-->
       <div class="col-sm-4 ">
              <div class="weatherdash" style="background-image:url(css/homepageicons/fail.png);background-repeat:no-repeat;background-position:center;">
                  <weathertitle><i class="fa fa-map-marker"></i>
<?php echo "${stationlocation} \n";?> Forecast</weathertitle>
<div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?>  </div>
                  <hr>                
                   
                <section id=wuforecasts>                  
                </section>
            </div>
         <div class="chart">   
           <a href="graphs/forecast10.php" data-featherlight="iframe" ><i class="fa fa-dot-circle-o fa-1x"></i><span style="color:#66a1ba;"> Forecast Ahead</span> </a>  
            </div>
            </div>
<!-- sky conditions for homeweather station-->
       <div class="col-sm-4 ">
              <div class="weatherdash" >
                  <weathertitle>Current Conditions</weathertitle>
                 <hr>
<!-- current sky icon--> 
 <div id="current">
 <div id="currentsky">Looking</div></div>

<!-- sunrise/set for homeweather station--> 
<?php
 // sunrise/set simple script
date_default_timezone_set($TZ);
$result = date_sun_info( time(), $lat, $lon );
?> 
<div class="sun"> Sunrise <br>
<span style="color:#4e5a69;font-weight:600;">
&nbsp;&nbsp;<?php echo  date('H:i',$result['sunrise'] ),"\n";?><img src="css/sun/sunrise.png"><br></span>
Sunset <br><span style="color:#4e5a69;font-weight:600;">
&nbsp;&nbsp;<?php echo date('H:i',$result['sunset'] ),"\n";?> &nbsp;&nbsp;<img src="css/sun/sunset.png"></span>
</div><br></sun>
<!-- MOON  phase for homeweather station--> 
<div class="luminance">
<?php  $date="";$time="";$tzone="$TZ";do_phase($date,$time,$tzone);function do_phase($date,$time,$tzone){$moondata=phase(strtotime($date.' '.$time.' '.$tzone));$MoonIllum=$moondata[1];$MoonIllum=round($MoonIllum,2);$MoonIllum*=100;if($MoonIllum==0){$phase="New Moon";}if($MoonIllum==100){$phase="Full Moon";}print"$MoonIllum%\n";}?><?php echo $moon = moon_posit($months, $days, $years);?>
 <br>
</div>
</div><div class="chart"> 
 <!-- HOURLY & Outlook for homeweather station-->  
<a href="graphs/hour.php" data-featherlight="iframe"><i class="fa fa-dot-circle-o fa-1x"></i><span style="color:#66a1ba;"> Hourly Forecast</span> </a>  
<a href="outlook.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-dot-circle-o fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('l');?> Outlook</span> </a>  
 </div>     
      </div><!-- /row -->
       <!-- SECOND ROW  -->  
      <div class="row">

      <!-- wind speed for homeweather station-->
        <div class="col-sm-4">
              <div class="weatherdash">
                  <weathertitle>WIND SPEED </weathertitle>
                  <hr />
                
               
<?php
echo "Speed"; ?>  <span style="font-weight:100;line-height:1em;height:1em;">|</span> <span style="color:#a0a5a9">
<?php echo "Gusts"; ?></span>

<div id="speed"></div>


</div>
 <div class="chart">
<a href="yearly/windyear.php" data-featherlight="iframe" ><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('Y');?></span> </a>  
<a href="yearly/windmonth.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('F');?></span> </a>  
<a href="yearly/windtoday.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('l');?></span> </a>  
   </div>     
                
        </div>

      <!-- barometer -->
       <div class="col-sm-4 ">
              <div class="weatherdash">
                  <weathertitle>BAROMETER</weathertitle>
                               
 <div id="barometer"></div></div> <div class="chart">
<a href="yearly/yearbarometer.php" data-featherlight="iframe" ><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('Y');?></span> </a>  
<a href="yearly/monthbarometer.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"><?php echo date('F');?></span> </a>  
<a href="yearly/barometertoday.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('l');?></span> </a>  
   </div>  </div>
      <!-- wind -->
      <!-- wind DIRECTION-->
       <div class="col-sm-4 ">
              <div class="weatherdash">
                  <weathertitle>WIND DIRECTION</weathertitle>
       <div style="padding-bottom:5px;">  </div>         
 
<div id="dir" style="margin-left:72px;"></section>
                
                
                </div>
         </div><div class="chart">
<i class="fa fa-dot-circle-o fa-1x"></i> <span style="color:#df826b;">360&deg; <span style="color:#66a1ba;">Wind Direction</span></span>

 
   </div>   
</div>
          <!-- 3RD GRID ROW  -->       
      <!-- RAINFALL -->
        <div class="col-sm-4 ">
              <div class="weatherdash">
                  <weathertitle>RAINFALL TODAY</weathertitle>
                  <hr />
                         
<div id="rainrate"></div></div>  
       <!---- end hourly rain rate circle--->  
        <div class="chart">
<a href="yearly/yearrain.php" data-featherlight="iframe" ><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('Y');?></span> </a>  
<a href="yearly/monthrain.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('F');?></span> </a>  
<a href="yearly/rainfalltoday.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> <?php echo date('l');?></span> </a>  

   </div> </div>
   
      <!-- UV INDEX/SOLAR for homeweather station-->
       <div class="col-sm-4 ">
              <div class="weatherdash">
                  <weathertitle>CURRENT  <span style="font-weight:100;">| </span><span style="color:#df826b">SOLAR DATA</span></weathertitle>
                  <div id="solar"></div>
  </div>
  <div class="chart">
<i class="fa fa-dot-circle-o fa-1x"></i><a href="uvinfo/uvinfo.html" data-featherlight="iframe"> <span style="color:#df826b">WHO <span style="color:#66a1ba;">UV Info</span></span> &nbsp;
 <a href="yearly/solartoday.php" data-featherlight="iframe" style="margin-left:20px;"><i class="fa fa-line-chart fa-1x"></i><span style="color:#66a1ba;"> Solar <?php 
echo date('l');
?></span> </a> 
   </div> </div>
   <!-- earthquake for homeweather station-->
       <div class="col-sm-4 ">
              <div class="weatherdash">
                  <weathertitle>EARTHQUAKE DATA</weathertitle>
                  <br>
<div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?> </div>
<div id="deprem" style="display:none;"></div>
<!-- earthquake scripts homeweather station --->
<script id="deprem-template" type="text/x-handlebars-template">
		<div class="deprem">				
					{{#each features}}	
					<div class="magnitude">					
					<span class ="mag"><span class ="content">					
					{{properties.mag}}<br><div class="magtext">magnitude</div></span>						
					<div class="place" style="overflow:hidden;margin-bottom:1024px;font-size:10px;font-family:'Helvetica', Arial;line-height:12px;font-weight:600;"><i class="fa fa-map-marker "></i>
					{{properties.flynn_region}}<br>
					<span style="color:#df826b;font-weight:600;font-size:11px;font-family:'Helvetica', Arial;line-height:15px;">
					{{datetime properties.time}}<br>	
					<i class="fa fa-map-marker "></i> <span style="font-size:11px;font-family:'Helvetica', Arial;color:#777;line-height:15px;">Lat:
					{{properties.lat}}&deg;- Lon:{{properties.lon}}&deg;		
					</span>
					</div>
					{{/each}}
				  	</div>
	</script>
<br><div class="emsc">
Earthquake Data provided by <a href="http://www.emsc-csem.org/Earthquake/info.php" title="data provided by EMSC" target="_blank"><span>EMSC</span></a></div></div>
    <div class="chart">
    
<a href="earthquake/earthquake.html" data-featherlight="iframe"  ><i class="fa fa-dot-circle-o fa-1x"></i><span style="color:#66a1ba;"> <?php echo "World Wide";?></span> Significant   <span style="color:#df826b;">Earthquakes</span>  </a> 
</div></div>

<div class="container">
    <!-- start footer for homeweather station--->
  <div class="col-sm-12">  
<div class="weatherdashfooter">
<span style="float:left;"> 
	 <a href="info/info.php" data-featherlight="iframe" ><i class="fa fa-dot-circle-o fa-1x"></i><span style="color:#66a1ba;font-size:11px;"> Station/<span style="color:#df826b;">Contact</span> Info</span> </a></span>       		
<span style="color:#66a1ba;margin-left:0px;font-weight:600;font-size:11px;"><i class="fa fa-map-marker fa-1x"> </i> <span style="color:#df826b;"> Location : </span> <span style="color:#66a1ba;font-weight:600;"> <?php echo "${lat} \n"; ?></span><span style="color:#df826b;font-family:helvetica;font-weight:600;"> <?php echo "${lon} \n"; ?></span> <i class="fa fa-dot-circle-o fa-1x"> </i><span style="color:#66a1ba;font-weight:600;"> ASL : <span style="color:#df826b;font-weight:600;">
<?php echo "${elevation} \n"; ?></span></span>
<div style="margin-left:-15px;font-weight:600;font-size:11px;"><i class="fa fa-dot-circle-o fa-1x"> </i><span style="color:#66a1ba;font-size:11px;"> Version: <span style="color:#df826b;font-size:11px;">
<?php echo "${version} \n"; ?></span></span><i class="fa fa-dot-circle-o fa-1x"> </i><span style="color:#66a1ba;font-size:11px;"> Hardware: <span style="color:#df826b;font-size:11px;"> 
<?php echo "${hardware} \n"; ?> 

</span></span>   </div>
<!-- Weather Twitter --> 
<span style="float:right;"> 
    <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo "${stationName} \n";?> Temp:<?php echo "${meteobridge[2]}°c\n"; ?>, Sky:<?php echo "${weather}\n"; ?>,Wind:<?php echo "${meteobridge[5]} kmh\n";?>  &url=http://bit.ly/istanbul161" style=" margin: 0 auto;
   width: 200px;
   padding: 10px 5px 10px 10px;
   background: #5395b5;
   font-family: Helvetica,sans-serif;
   text-align: center;
   font-size: 1em;
   color: #fff !important;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
   border-radius: 4px;
  ">share via<i class="fa fa-twitter" style="color:#fff;"></i></a></span>   

<div style="margin-left:200px !important;"><a href="http://www.idesign34.com/homepws/homeweather.html" target="_blank" alt="idesign34 homeweather station"><img src='data:image/png;base64,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' /></a>&nbsp;&nbsp; <span style="color:#ccc;line-height:1.3em;font-size:20px;vertical-align:middle;font-weight:100;"> |
<a href="http://highcharts.com" target="_blank" alt="highcharts.com"><img src='data:image/png;base64,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' /></a>&nbsp;&nbsp; <span style="color:#ccc;line-height:1.3em;font-size:20px;vertical-align:middle;font-weight:100;"> |</span> &nbsp;&nbsp; <a href="http://www.wunderground.com/?apiref=6731f419f08aaebc" target="_blank" alt="weatherunderground.com"><img src='data:image/png;base64,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' /></a> 
</div></div></span></div>


<script type="text/javascript"src='js/gauge.js' ></script> <script type="text/javascript"src='js/jqueryui.js'></script><script type="text/javascript"src='js/handlebars.js'></script>
<script type="text/javascript"src='js/combi.js' charset="utf-8"></script><script type="text/javascript"src='graphs/3dayweather.js'  charset="utf-8"></script>
<script>(function(){$(".box").velocity("transition.slideDownIn",{stagger:0,drag:false,duration:0,complete:function(){return $(".value").each(function(index,item){var val,value;value=$(item).data("value");val=parseInt(value,0);return $({someValue:0}).animate({someValue:val},{duration:0,easing:'swing',step:function(){return $(item).text(Math.round(this.someValue));}});});}});}).call(this);	   
$("#deprem").velocity({scale:1},{duration:800,display:"none"}),$("#deprem").velocity("fadeIn",{duration:7e3}),$("#current").velocity("fadeIn",{duration:7e3});
/*utc clock*/
!function(t,n,o){function e(){var t=new i;t.startClock()}function i(){this.time=""}o(function(){e()}),i.prototype={startClock:function(){var t=this;setInterval(this.updateClock.bind(this,t),500)},updateClock:function(t){var n=t.getTime();this.updateClockView(n)},updateClockView:function(t){for(var n=o(".clock-container>ul>li>span"),e=0;5>e;e++)n.eq(e).html(t[e])},getTime:function(){var t=new Date,n=t.getUTCHours(),o=t.getUTCMinutes(),e=t.getUTCSeconds(),i=this.convertHourByTimeZone(n);o=this.fixLayout(o),e=this.fixLayout(e);for(var r=[],u=0;5>u;u++){var c=i[u]+":"+o+":"+e;r.push(c)}return r},convertHourByTimeZone:function(t){for(var n=[<?php echo $UTC; ?>],o=[],e=0;5>e;e++){var i=t+n[e];i>=24?i-=24:0>i&&(i=24+i),o.push(i)}return o},fixLayout:function(t){return 10>t&&(t="0"+t),t}}}(window,document,window.jQuery);
</script>
</body>
</html>