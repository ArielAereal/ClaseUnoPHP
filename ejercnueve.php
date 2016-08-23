<html>
<head>
	<title>Cuevas</title>
</head>
<body>

<?php 

$lapicera1 = array ( "color"=> "azul", "marca" => "silvapen", "trazo" => "grueso", "precio" => 10);


$lapicera2 = array("color" => "verde","marca" => "bic", "trazo" => "fino","precio"=> 8 );

$lapicera3 = array ("color"=> "negro", "marca" => "faber", "trazo" => "grueso", "precio" => 15);

foreach ($lapicera1 as $dato) {
	echo "$dato <br>";
}

foreach ($lapicera2 as $dato) {
	echo "$dato <br>";
}

foreach ($lapicera3 as $dato) {
	echo "$dato <br>";
}

 ?>

</body>
</html>