<?php
include_once('../settings.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>HOUR FORECAST</title>
		
		 <link rel="stylesheet" type="text/css" href="forecast.css">
			<link href="../font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet prefetch" type="text/css">		
			<div class="titleforecast"><i class="fa fa-map-marker1"></i> <?php
echo "${stationName} \n";
?><span style="color:#f27260">Todays</span> Hourly Forecast </div>
        <br>
        <?php
		
$weather = file_get_contents('../jsondata/hourly.json');
$decoded = json_decode($weather, true);
$count = 0;
foreach ($decoded['hourly_forecast'] as $value)
{
    $count++;
    
    $hour = $value['FCTTIME']['civil'];
    $temp = $value['temp']['metric'];
    $condition = $value['condition']; 
	$icon = $value['icon'];  
	$pop = $value['pop'];   
    
    echo " <div id='wuforecasthour'> \r\n";
	echo "<span style='font-size:0px;float:right;'>${icon}<img src='../css/icons/$icon.png' width='50'></span>\n";
    echo ''.$hour.' <span style="color:#59a6c2;font-weight:600;"> ';
	echo ''.$temp.'°c </span><span style="font-size:11px;"><br> ';
	echo ''.$condition.' <span style="color:#59a6c2;font-weight:600;font-size:10px;"><br>precip'; 
	echo ' '.$pop. '%</div>'; 
	if ($count > 14)
        break;
}?>
					
	</body>
</html>