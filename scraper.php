<?php
	
	#used to get city name#
	$city=$_GET['city'];
	
	#replaces one bit of string to another#
	$city=str_replace(" ", "", $city);

	$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest#forecast-part-0");
	
	
	preg_match(' /3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?) </s', $contents, $matches);

	echo $matches[1];
	
?> 

