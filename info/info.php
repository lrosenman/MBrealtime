<?php
include_once('../settings.php');?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Home Weather Station Info</title>
    


    
    <link rel="stylesheet" href="css/reset.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
<div class="wrapper">
    </div>

<div class="wrapper cards">
  <div class="container">
    <div class="card">
      <div class="front"><h2>Home Weather Station Info
      </h2>
      </div>
      <div class="back">
        <div class="content">
          <h3 class="cardTitle"><?php echo "${stationName} \n";?></h3>
          <p>Weather station is located at <?php echo "${stationName} \n";?> , elevated at aproxiamately <?php echo "${elevation} \n"; ?> .<br> The hardware is a 
           (<?php echo "${hardware} \n";?>) using wireless remote sensors ,data is updated aproxiamately every 16-20 seconds. Forecast data is provided by Weather underground and is updated every 60 minutes. </p>
          
        </div>
      </div>
    </div>
  </div>
  
   <div class="container">
    <div class="card">
      <div class="front"><h2>Get in Touch!</h2></div>
      <div class="back">
        <div class="content">
          <h3 class="cardTitle">Send Email!</h3>
          <p><a href='mailto:<?php print "${email} \n";?>' ><?php print "${email} \n"; ?></a></p>
           <h3 class="cardTitle">Follow @Twitter</h3><p>
           <a target="_blank" href="http://www.twitter.com/<?php print "${twitter} \n"; ?>"><?php echo "${twitter} \n"; ?></a></h3>
          </p>
          <h3 class="cardTitle">Template Information</h3>
          <p><a  target="_blank" href='http://www.idesign34.com/homepws/ws1001.html' ><?php echo "idesign34.com";?></a></p>
          </p>
          <h3 class="cardTitle">Credits</h3>
          <p><a  target="_blank" href='http://www.obsid.org/2009/02/calculate-moon-phase-data-with-php-iii.html' ><?php echo "Moonphase by Stephen A. Zarkos ";?></a>
         <br><a  target="_blank" href='http://www.emsc-csem.org/#2' ><?php echo "EMSC Earthquake Data";?></a>,<a  target="_blank" href='http://noelboss.github.io/featherlight/' ><?php echo "Featherlight.js";?></a>,
          <br><a  target="_blank" href='http://bernii.github.io/gauge.js/' ><?php echo "Gauge.js";?></a>,
          <a  target="_blank" href='http://handlebarsjs.com' ><?php echo "Handlebars.js";?></a>,
          <a  target="_blank" href='http://julian.com/research/velocity/' ><?php echo "Velocity.js";?></a>
          <img src="colorchart.png" width="250">
           </p>
         
        </div>
      </div>
    </div>
  </div>
</div>
    <script src='../js/jquery.js'></script>      
        <script>
		$('.card').click(function(){
  $(this).toggleClass('flipped');
});</script>

    
    
    
  </body>
</html>
