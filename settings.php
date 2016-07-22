<?php
### HOME WEATHER STATION TEMPLATE SETUP please set up and check thoroughly all 
### settings incorrect settings will show incorrect data (updated Sunday 6TH March 2016) ####

$TZ= 'Europe/London'; // important set your time zone America/New_York for example go here to find your http://php.net/manual/en/timezones.php
$TZconf = 'Europe/London';  // Your timezone for charts data 
$UTC = '1';  // NUMBER of hours betweeen your location and UTC new york -4 london 0 istanbul 3 
$api= 'xxxxxxxxxxxxx'; // important Weather Underground api key developer key '1234567890'
$stationName = 'London'; // name for station
$stationlocation = 'London'; // add your relative location city,town,village,district, or region 
$WUID = 'ISTANBUL161'; // YOUR Weather Underground station ID this is used for charts
$id   = 'ISTANBUL161'; // YOUR Weather Underground station ID this is used for forecast
$lat  = '33.570076'; // you can use google maps to determine your lat critical for moon phase,sunrise/set
$lon  = '-112.307907'; // you can use google maps to determine your lon critical for moon phase,sunrise/set
$elevation   = '1060ft'; //add your elevation  ft or metres
$dataSource = 'wunderground'; // 'wunderground' = weather underground server only change if oyu are using an additional source for chart data; 
$metric = true; // true for metric units, false for imperial/non metric units
$unitsLnk= 'metric'; // metric or english for non metric
$windmu = 'km/h'; // 'm/s' or 'km/h or mph' for units selection
$windunits = 'KMH'; // set template output for wind units displayed use capitals MPH,KMH,M/S,KTS
$indoorunit ='Celsius'; // template temperatures units Celsius or Fahrenheit
$templateunit = 'C'; // set template output for temp units displayed use capitals F or C
$rainunit = 'mm'; // set template output for rain units displayed  in or mm
$pressureunit = 'mb'; // set template output for pressure units displayed  in or mb
$livedata           = 'MBrealtime.txt'; // path to raw data
$hardware           = 'ADD YOUR HARDWARE'; // hardware type i.e Davis VP2,Ambient,Accurite,etc// 
$version            = 'MeteoBridge'; // template version and type of source Clientraw,MeteoBridge,Cumulus or other
$email              = 'something@dot.com'; // contact email for form
$twitter            = '@username'; // twitter username used on form if available

//no need to edit anything below unless you get really big spikes in your WU recorded data that need adjusting///
$wdMonthLim = 12;
$wdYearLim = 12;
$wugTheme = "default";
$ddFormat = 0;
$hourFormat = 0; 
$wugWidth = "640";
$wugHeight = "380";
$defaultWUGlang = "en";
$langSwitch = false;
$showSolar = true;
$wugWinW = "900";
$wugWinH = "350";
$cookieExp = 0.1;
$calcMbaroAvg = true;
$calcSolar = false;
$calcWindDir = false;
$removeSpikes = true;
$dsp = array("temp" => 10, "baro" => 1.8, "rain_rate" => 150, "rain_total" => 35, "humi" => 8);
$mysp = array("temp" => 10, "baro" => 10, "humi" => 70);
$IcacheWUfiles = false;
$WUcacheDirI = "auto";
$Iprecache = false;
$pause = 120;
$maxPre = 2;
//$refreshForced = ;
//$autoRefreshT = "";
$creditsEnabled = "false";
$creditsURL = "";
$credits = "";
//$jQueryFile = "";
$loadJQuery = true;
$incTabsStyle = false;
//$testOn = ;
$updateCheck = false;
$SendName = false;
$heightCorr = "20";
$standAlone = true;
//$includeMode = ;
$spline_graphs = true;
$fopenOff = false;
//$jsPath = "";
$cookieEnabled = false;
$sendAgent = false;
$no_mb = false;
$db_i_temp = false;
$db_suv = false;
$CustomFontTheme = false;
$colorpickerFontVal = "#000000";
$CustomBgTheme = 'transparent';
$colorpickerBgVal = "#ffffff";
$baroMinMax = false;
$templateinfo    = 'http://www.idesign34.com/homepws/homeweather.html'; // template information page


/// END VERSION OF SETTINGS MODIFIED TO WORK WITH HOMEWEATHERSTATION TEMPLATE ///
?>