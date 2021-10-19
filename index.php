<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hipotenusa de un Triangulo Rectangulo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



<div class="container">
	  <div class="row justify-content-center pt-5">
		 <h3 class="text-center">Calcular la Hipotenusa de un Triangulo Rectangulo</h3>
	 </div>
	  <div class="row justify-content-center ">
	  		<div class="col ">
	  			<p class="pt-4">Calculando La hipotenusa de un triangulo rectangulo cuyo cateto adyacente tiene como medida 4cm y su cateto opuesto 3cm </p>

	  			<?php
	  					$adyacente= 4;
						$opuesto=3;
						$hipotenusa= null;
						$hipotenusa= sqrt(pow($adyacente,2) + pow($opuesto,2)) ;

						echo"<br>Cateto Adyacente  =  ".$adyacente. "cm";
						echo"<br>Cateto Opuesto =  ".$opuesto. "cm";
						echo"<br><b>Hipotenusa = </b> ".$hipotenusa."cm";

				?>


	  	</div>
	  	<div class="col " style="width: 40%">
	  			<img src="hipotenusa.jpg">
	  	</div>
	</div>
</div>





</body>
</html>