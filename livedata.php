<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include_once('settings.php');
?>
<!-- parsing indoor weather AND clientraw output for homeweather station template March 2016 with conversions--->

<?php
$file_live=file_get_contents($livedata);$meteobridge=explode(" ",$file_live);

?>
<!-- parsing weather underground output for homeweather station template sky ,moon etc--->


<?php
//parsing weather underground output for homeweather station template//
$json_string             =file_get_contents("jsondata/weather.json");
$parsed_json             =json_decode($json_string);
$weather                 = $parsed_json->{'current_observation'}->{'weather'};
$station_id              = $parsed_json->{'current_observation'}->{'station_id'};
$icon                    = $parsed_json->{'current_observation'}->{'icon'};
$town                    = $parsed_json->{'current_observation'}->{'display_location'}->{'city'};
$location                = $parsed_json->{'current_observation'}->{'display_location'}->{'full'};
$home                    = $parsed_json->{'current_observation'}->{'observation_location'}->{'city'};

?>
<?php
date_default_timezone_set($TZ);function isdayofmonth($month,$day,$year){$dim=array(31,29,31,30,31,30,31,31,30,31,30,31);if($month!=2){if(1<=$day&&$day<=$dim[$month-1])return true;else return false;}$feb=$dim[0];if(isleapyear($year)){$feb++;}if(1<=$day&&$day<=$feb){return true;}return false;}function isleapyear($year){$a=floor($year-4*floor($year/4));$b=floor($year-100*floor($year/100));$c=floor($year-400*floor($year/400));if($a==0){if($b==0&&$c!=0)return false;else return true;}return false;}function moon_posit($month=null,$day=null,$year=null){$moon=array();if(!isdayofmonth($month,$day,$year)){$moon['errors']='Invalid date';}else {$moon['errors']=null;$phase='';$YY=0;$MM=0;$K1=0;$K2=0;$K3=0;$JD=0;$IP=0.0;$DP=0.0;$NP=0.0;$RP=0.0;$YY=$year-floor((12-$month)/10);$MM=$month+9;if($MM>=12){$MM=$MM-12;}$K1=floor(365.25*($YY+4712));$K2=floor(30.6*$MM+0.5);$K3=floor(floor(($YY/100)+49)*0.75)-38;$JD=$K1+$K2+$day+59;if($JD>2299160){$JD=$JD-$K3;}$IP=normalize(($JD-2451550.1)/29.530588853);$age=$IP*29.53;
if($age<1.24566)$phase='New Moon';
else if($age<5.53699)$phase='Waxing Crescent';
else if($age<8.5)$phase='First Quarter';
else if($age<12.91963)$phase='Waxing Gibbous';
else if($age<15.61096)$phase='Full Moon';
else if($age<23.99361)$phase='Waning Gibbous';
else if($age<28.90000)$phase='Waning Crescent';
else $phase='New Moon';}$moon=$phase;$ageofmoon=round($age,0);$ageofmoon;if($ageofmoon<1){echo "<div class=\"wi   wi-moon-alt-new\"></div>";}else if($ageofmoon<5){echo " <div class=\"wi wi-moon-alt-waxing-cresent-1\"></div> ";}else if($ageofmoon<8){echo " <div class=\"wi wi-moon-alt-waxing-cresent-5\"></div>";}else if($ageofmoon<9){echo "<div class=\"wi wi-moon-alt-first-quarter\"></div>";}else if($ageofmoon<11){echo "<div class=\"wi wi-moon-alt-waxing-gibbous-1\"></div>";}else if($ageofmoon<12){echo "<div class=\"wi wi-moon-alt-waxing-gibbous-2\"></div>";}else if($ageofmoon<14){echo "<div class=\"wi wi-moon-alt-waxing-gibbous-4\"></div>";}else if($ageofmoon<17){echo "<div class=\"wi wi-moon-alt-full\"></div>";}else if($ageofmoon<20){echo "<div class=\"wi wi-moon-alt-waning-gibbous-1\"></div>";}else if($ageofmoon<22){echo "<div class=\"wi wi-moon-alt-waning-gibbous-2\"></div>";}else if($ageofmoon<23){echo "<div class=\"wi wi-moon-alt-waning-gibbous-5\"></div>";}else if($ageofmoon<24){echo "<div class=\"wi wi-moon-alt-waning-crescent-1\"></div>";}else if($ageofmoon<25){echo "<div class=\"wi wi-moon-alt-waning-crescent-2\"></div>";}else if($ageofmoon<26){echo "<div class=\"wi wi-moon-alt-waning-crescent-3\"></div>";}else if($ageofmoon<29){echo "<div class=\"wi wi-moon-alt-waning-crescent-5\"></div>";}else if($ageofmoon<33){echo " <div class=\"wi wi-moon-alt-new\"></div>";}echo " <br> 
<span style='color:#66a1ba;font-weight:normal'> Phase </span>  ${moon}  \n";}function normalize($v){$v=$v-floor($v);if($v<0){$v+1;}return $v;}$date=time();$years=date('Y',$date);$months=date('n',$date);$days=date('j',$date);define('ERR_UNDEF',-1);define('EPOCH',2444238.5);define('ELONGE',278.833540);define('ELONGP',282.596403);define('ECCENT',0.016718);define('SUNSMAX',1.495985e8);define('SUNANGSIZ',0.533128);define('MMLONG',64.975464);define('MMLONGP',349.383063);define('MLNODE',151.950429);define('MINC',5.145396);define('MECC',0.054900);define('MANGSIZ',0.5181);define('MSMAX',384401.0);define('MPARALLAX',0.9507);define('SYNMONTH',29.53058868);function sgn($arg){return (($arg<0)?-1:($arg>0?1:0));}function fixangle($arg){return ($arg-360.0*(floor($arg/360.0)));}function torad($arg){return ($arg*(pi()/180.0));}function todeg($arg){return ($arg*(180.0/pi()));}function dsin($arg){return (sin(torad($arg)));}function dcos($arg){return (cos(torad($arg)));}function jtime($timestamp){$julian=($timestamp/86400)+2440587.5;return $julian;}function jdaytosecs($jday=0){$stamp=($jday-2440587.5)*86400;return $stamp;}function jyear($td,&$yy,&$mm,&$dd){$td+=0.5;$z=floor($td);$f=$td-$z;if($z<2299161.0){$a=$z;}else {$alpha=floor(($z-1867216.25)/36524.25);$a=$z+1+$alpha-floor($alpha/4);}$b=$a+1524;$c=floor(($b-122.1)/365.25);$d=floor(365.25*$c);$e=floor(($b-$d)/30.6001);$dd=$b-$d-floor(30.6001*$e)+$f;$mm=$e<14?$e-1:$e-13;$yy=$mm>2?$c-4716:$c-4715;}function meanphase($sdate,$k){$t=($sdate-2415020.0)/36525;$t2=$t*$t;$t3=$t2*$t;$nt1=2415020.75933+SYNMONTH*$k+0.0001178*$t2-0.000000155*$t3+0.00033*dsin(166.56+132.87*$t-0.009173*$t2);return ($nt1);}function truephase($k,$phase){$apcor=0;$k+=$phase;$t=$k/1236.85;$t2=$t*$t;$t3=$t2*$t;$pt=2415020.75933+SYNMONTH*$k+0.0001178*$t2-0.000000155*$t3+0.00033*dsin(166.56+132.87*$t-0.009173*$t2);$m=359.2242+29.10535608*$k-0.0000333*$t2-0.00000347*$t3;$mprime=306.0253+385.81691806*$k+0.0107306*$t2+0.00001236*$t3;$f=21.2964+390.67050646*$k-0.0016528*$t2-0.00000239*$t3;if(($phase<0.01)||(abs($phase-0.5)<0.01)){$pt+=(0.1734-0.000393*$t)*dsin($m)+0.0021*dsin(2*$m)-0.4068*dsin($mprime)+0.0161*dsin(2*$mprime)-0.0004*dsin(3*$mprime)+0.0104*dsin(2*$f)-0.0051*dsin($m+$mprime)-0.0074*dsin($m-$mprime)+0.0004*dsin(2*$f+$m)-0.0004*dsin(2*$f-$m)-0.0006*dsin(2*$f+$mprime)+0.0010*dsin(2*$f-$mprime)+0.0005*dsin($m+2*$mprime);$apcor=1;}elseif((abs($phase-0.25)<0.01||(abs($phase-0.75)<0.01))){$pt+=(0.1721-0.0004*$t)*dsin($m)+0.0021*dsin(2*$m)-0.6280*dsin($mprime)+0.0089*dsin(2*$mprime)-0.0004*dsin(3*$mprime)+0.0079*dsin(2*$f)-0.0119*dsin($m+$mprime)-0.0047*dsin($m-$mprime)+0.0003*dsin(2*$f+$m)-0.0004*dsin(2*$f-$m)-0.0006*dsin(2*$f+$mprime)+0.0021*dsin(2*$f-$mprime)+0.0003*dsin($m+2*$mprime)+0.0004*dsin($m-2*$mprime)-0.0003*dsin(2*$m+$mprime);if($phase<0.5){$pt+=0.0028-0.0004*dcos($m)+0.0003*dcos($mprime);}else {$pt+=-0.0028+0.0004*dcos($m)-0.0003*dcos($mprime);}$apcor=1;}if(!$apcor){print"truephase() called with invalid phase selector ($phase).\n";exit(ERR_UNDEF);}return ($pt);}function phasehunt($time=-1){if(empty($time)||$time==-1){$time=time();}$sdate=jtime($time);$adate=$sdate-45;jyear($adate,$yy,$mm,$dd);$k1=floor(($yy+(($mm-1)*(1.0/12.0))-1900)*12.3685);$adate=$nt1=meanphase($adate,$k1);while(1){$adate+=SYNMONTH;$k2=$k1+1;$nt2=meanphase($adate,$k2);if(($nt1<=$sdate)&&($nt2>$sdate)){break;}$nt1=$nt2;$k1=$k2;}return array(jdaytosecs(truephase($k1,0.0)),jdaytosecs(truephase($k1,0.25)),jdaytosecs(truephase($k1,0.5)),jdaytosecs(truephase($k1,0.75)),jdaytosecs(truephase($k2,0.0)));}function phaselist($sdate,$edate){if(empty($sdate)||empty($edate)){return array();}$sdate=jtime($sdate);$edate=jtime($edate);$phases=array();$d=$k=$yy=$mm=0;jyear($sdate,$yy,$mm,$d);$k=floor(($yy+(($mm-1)*(1.0/12.0))-1900)*12.3685)-2;while(1){++$k;foreach(array(0.0,0.25,0.5,0.75) as $phase){$d=truephase($k,$phase);if($d>=$edate){return $phases;}if($d>=$sdate){if(empty($phases)){array_push($phases,floor(4*$phase));}array_push($phases,jdaytosecs($d));}}}}function kepler($m,$ecc){$EPSILON=1e-6;$m=torad($m);$e=$m;do{$delta=$e-$ecc*sin($e)-$m;$e-=$delta/(1-$ecc*cos($e));}while(abs($delta)>$EPSILON);return ($e);}function phase($time=0){if(empty($time)||$time==0){$time=time();}$pdate=jtime($time);$pphase;$mage;$dist;$angdia;$sudist;$suangdia;$Day=$pdate-EPOCH;$N=fixangle((360/365.2422)*$Day);$M=fixangle($N+ELONGE-ELONGP);$Ec=kepler($M,ECCENT);$Ec=sqrt((1+ECCENT)/(1-ECCENT))*tan($Ec/2);$Ec=2*todeg(atan($Ec));$Lambdasun=fixangle($Ec+ELONGP);$F=((1+ECCENT*cos(torad($Ec)))/(1-ECCENT*ECCENT));$SunDist=SUNSMAX/$F;$SunAng=$F*SUNANGSIZ;$ml=fixangle(13.1763966*$Day+MMLONG);$MM=fixangle($ml-0.1114041*$Day-MMLONGP);$MN=fixangle(MLNODE-0.0529539*$Day);$Ev=1.2739*sin(torad(2*($ml-$Lambdasun)-$MM));$Ae=0.1858*sin(torad($M));$A3=0.37*sin(torad($M));$MmP=$MM+$Ev-$Ae-$A3;$mEc=6.2886*sin(torad($MmP));$A4=0.214*sin(torad(2*$MmP));$lP=$ml+$Ev+$mEc-$Ae+$A4;$V=0.6583*sin(torad(2*($lP-$Lambdasun)));$lPP=$lP+$V;$NP=$MN-0.16*sin(torad($M));$y=sin(torad($lPP-$NP))*cos(torad(MINC));$x=cos(torad($lPP-$NP));$Lambdamoon=todeg(atan2($y,$x));$Lambdamoon+=$NP;$BetaM=todeg(asin(sin(torad($lPP-$NP))*sin(torad(MINC))));$MoonAge=$lPP-$Lambdasun;$MoonPhase=(1-cos(torad($MoonAge)))/2;$MoonDist=(MSMAX*(1-MECC*MECC))/(1+MECC*cos(torad($MmP+$mEc)));$MoonDFrac=$MoonDist/MSMAX;$MoonAng=MANGSIZ/$MoonDFrac;$MoonPar=MPARALLAX/$MoonDFrac;$pphase=$MoonPhase;$mage=SYNMONTH*(fixangle($MoonAge)/360.0);$dist=$MoonDist;$angdia=$MoonAng;$sudist=$SunDist;$suangdia=$SunAng;$mpfrac=fixangle($MoonAge)/360.0;return array($mpfrac,$pphase,$mage,$dist,$angdia,$sudist,$suangdia);}?>

<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</html>




<title><?php echo "${meteobridge[2]}&deg;\n";?><?php echo "${weather}\n";?><?php echo "${stationName} \n";?> HOME WEATHER STATION </title>
<meta property="og:title" content="<?php echo "${meteobridge[2]}&deg;\n"; ?> Conditions: <?php echo "${weather}   \n"; ?>">

</head>


</html>