<?php
include_once('livedata.php');?><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
</head> <div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?> </div>
<!-- start animated rain bucket for homeweather station--> 
  
  
  
   <style>
	   
#container1 {
  height: 170px;
  margin: 0 auto;
  overflow:hidden;
  position: absolute;
  top: 0px;
  width: 210px;
  margin-left:20px;
}

#container1 div { position: absolute; }

.rainvalue {
	font-size:1.1em;
	color:#66a1ba;
	margin-left:30px;
	margin-top:2%;
	font-weight:600;
	line-height:1em;
	font-family:'Helvetica',Arial, Helvetica, sans-serif
}

.rainvalue span{
	font-size:0.8em;
	
}
.raintext {
	font-size:0.8em;
	color:#fff;
	margin-left:-10px;
	margin-top:15%;
	font-weight:normal;
	line-height:12px;
	font-family:'Helvetica',Arial, Helvetica, sans-serif;
	background: rgba(102,161,186,0.5);
	height:60px;
	border-radius:4px;
	padding:4px;
	font-weight:600;
	width:75px;
}

.raintext span{
	font-size:1em;
	color:#fff;
	
	
}
.raintext1 {
	font-size:0.5em;
	color:#66a1ba;
	margin-left:0px;
	margin-top:3%;
	font-weight:600;
	line-height:10px;
	font-family:'Helvetica',Arial, Helvetica, sans-serif
}

.raintext1 span{
	color:#df826b;
	font-size:1em;
	
}




#beaker {
  border: 5px solid rgba(233, 235, 233, 1);
  border-top: 0;
  border-radius: 5px 5px 5px 5px;
  height: 120px;
  left: 50px;
  bottom: 0;
  width: 125px;
  z-index:1 !important;
  background-image:url(css/rain/marker.png);
  background-repeat:no-repeat;
  
  
}

#beaker:before,
#beaker:after {
  border: 5px solid rgba(233, 235, 233, 1);
  border-bottom: 0;
  border-radius: 5px;
  content: '';
  height: 5px;
  position: absolute;
  top: -0px;
  width: 15px; z-index:1 !important;
}

#beaker:before { left: -15px; z-index:1!important; }
#beaker:after { right: -15px; z-index:1!important; }

#raintoday {
  background-color: #66a1ba;
  border: 1px solid #66a1ba;
  border-radius: 0 0 10px 10px;
  bottom: 0;
  width: 123px;
  margin-left:51px;
  margin-bottom:5px;
 
}

#raintoday:after {
  background-color: rgba(255, 255, 255, 0.15);
  bottom: 0px;
  content: '';
  height: 200px;
  left: -40px;
  position: absolute;
  transform: rotate(30deg);
  -webkit-transform: rotate(15deg);
  width: 120px;
  
}
.maxrainfallcircle{position:absolute;background:none;border-radius:50%;height:60px;width:60px;padding:5px;padding-top:2px;float:right;
border-top:.1rem solid rgba(76, 59, 131, 0.1);border-right:.1rem solid rgba(76, 59, 131, 0.1);
border-left:.1rem solid rgba(68, 59, 155, 0.1);border-bottom:.1rem solid rgba(68, 145, 155, 0.1);
-webkit-background-size:cover!important;-moz-background-size:cover!important;-ms-background-size:cover!important;background-size:cover!important;margin-top:0px;margin-left:215px}
.maxrainfallcircle-content{float:left;line-height:1;margin-top:-.9em;padding-top:40%;text-align:center;width:100%;color:#676e73;font-family:"Helvetica", Arial;-webkit-font-smoothing:antialiased!important;font-size:0.8em}



</style>

    
    
    
 

  <body>

   <div id="container1"> <div id="beaker">
    <div class="rainvalue"><?php echo "${data_clientraw[7]} <span>${rainunit}</span>\n" ; 
	if ($data_clientraw[7] <0.1){echo '<div class=\'raintext\'>no rain has been recorded <span>today</span></div>';}
	if ($data_clientraw[7] >0.1){echo '<div class=\'raintext1\'>measured <span>today</div>';}
	?></div>    
   </div><div id="raintoday"></div></div>  
  
  
  
 <!-- simple jquery barometer donut full circle for homeweather station milliabars-->
<div class="maxrainfallcircle">
<div class="maxrainfallcircle-content"><span style='font-weight:700;'><?php echo "Rate";?><br>
<span style='color:#66a1ba;font-weight:700;font-size:11px;''>
<?php echo "${data_clientraw[10]}\n"; ?><span style='font-size:10px;'><?php echo "${rainunit}";?><br></span><span style='font-size:10px;'><span style='font-size:10px;color:#df826b;'>per/hr </span><div class='wi wi-raindrop wi-rotate-45'></div> <div class='wi wi-raindrop wi-rotate-45'></div> </span></span>


</div><div>

        <script>
        $(document).ready(function() {
 
  $('#raintoday') // fill the rain up
    .delay(0)
    .animate({
    height :'<?php print $data_clientraw[7] * 25.4;?>px'
    }, 0); 
  
  });</script>
  

  </body>
</html>