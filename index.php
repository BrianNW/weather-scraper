<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Weather tracker</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<style>	
	html, body {
		height:100%;
		}	
	.container {
		background-image:url("img/background2.jpg");
		width:100%;
		height:100%;
		background-size:cover;
		background-position:center;
		padding-top:150px;
		}		
	.center {
		text-align:center;
		}		
	.white {
		color:white;
		}		
	p { 
	padding-top:15px;
	padding-bottom:15px;
	}	
	button {
		margin-top:20px;
		margin-bottom:20px;
		}		
	.alert {
			display:none;
	}
	.date-header {
		display:none;
	}
	.units.imperial {
		display:none;
	}
		
	</style>
  </head>
  <body>

         <div class="container">
			<div class="row">            
	<div class="col-md-6 col-md-offset-3 center">
				<h1 class="center ">Your weather here!</h1>
			<p class="lead center "> Enter your city below for your 3 day weather forecast!</p>
				<form>
						<div class="form-group">
							<input type="text" class="form-control" name="city" id="city" placeholder="E.g: London, New York, Tokyo">
						</div>
					<button id="findMyWeather" class="btn btn-lg btn-success " >Find my weather</button>
				</form>	<br>
		<div id="success" class="alert alert-success"> Success!</div>
		<div id="fail" class="alert alert-danger"> Could not find weather data or that city.  Please try again.</div>
		<div id="noCity" class="alert alert-danger"> Please enter a city</div>
	</div>
          </div>
		  </div>	
        	<script> 	 
	 $("#findMyWeather").click(function(event) {	 
	 
			event.preventDefault();
				
			$(".alert").hide();
				
			if  ($("#city").val()!="") {	 
				
				$.get("scraper.php?city="+$("#city").val(), function ( data) {		
				
					if (data ==""  || data.substr(10, 7) == "Warning") {	
					
						$("#fail").fadeIn();
						
					} else {			
				
							$("#success").html(data).fadeIn();			
						}				
				});			
			} else {
				
					$("#noCity").fadeIn();		
				
				}			
	 });
	 
	 </script>
             
</object>
</div>
</body>
</html>