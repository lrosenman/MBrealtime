jQuery(document).ready(function(s){function a(a){if(0===typeof a.length)s("forecast");else for(var e=0;e<a.length;e++){var n=a[e];s("#wuforecasts").append("<div id='wuforecast'><h2 id='weekday'>"+n.date.weekday_short+"  "+n.date.day+"</h2><img id='icon' src='../css/icons/"+n.icon+".png'></img><br ><div class='kmh' style='margin-left:1%;'><span style='font-size:11px;'> "+n.conditions+"</span><br><span style='color:#444;margin-left:17%;'> "+n.high.celsius+"°</span> | <span style='color:#66a1ba;'> "+n.low.celsius+"° <div class='rain'> <span style='color:#777;font-size:11px;font-weight:900;margin-left:17%;'> "+n.pop+"% <span style='color:#66a1ba;font-size:11px;font-weight:900;'> precip</span><div class='kmh'><span style='color:#777;font-size:11px;font-weight:900;margin-left:17%;'> "+n.snow_allday.cm+" <span style='color:#66a1ba;font-size:11px;font-weight:900;'> cm <div class='wi wi-snowflake-cold'></div><div class='wi wi-snowflake-cold'></div>")}}function e(s){return _.reject(s,function(s){})}function n(){s.ajax({url:"../jsondata/forecast10day.json",dataType:"json",success:function(s){var n=s.forecast.simpleforecast.forecastday,o=e(n);a(o)}})}n()});