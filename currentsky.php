<?php
include_once('livedata.php');?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
 
<div class="updatedtime"><span>Updated</span> <?php 
$date = new DateTime('now', new DateTimeZone($TZ));
 echo $date->format('H:i:s');
?>  </div>
 <div class="iconcurrent" style="font-size:0px">
<?php echo "${icon} <img src='css/icons/$icon.png' > \n";?></div>
<div class="iconh3"><?php echo "${weather}   \n";?></div></div>