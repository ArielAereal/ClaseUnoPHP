<html>
<head>
	<title>Cuevas</title>
</head>
<body>

<?php 

$lapicera1 = array ( "color"=> "azul", "marca" => "silvapen", "trazo" => "grueso", "precio" => 10);


$lapicera2 = array("color" => "verde","marca" => "bic", "trazo" => "fino","precio"=> 8 );

$lapicera3 = array ("color"=> "negro", "marca" => "faber", "trazo" => "grueso", "precio" => 15);

var_dump($lapicera1);
echo "<br>";

var_dump($lapicera2);
echo "<br>";
var_dump($lapicera3);
echo "<br> <br>";
foreach ($lapicera1 as $dato) {
	echo "$dato <br>";
}

foreach ($lapicera2 as $dato) {
	echo "$dato <br>";
}

foreach ($lapicera3 as $dato) {
	echo "$dato <br>";
}

//ejj 10

$vasodelapiceras = array($lapicera1,$lapicera2,$lapicera3);

var_dump($vasodelapiceras);

foreach ($vasodelapiceras as $lapicera) {
	
	echo $lapicera["color"]."<br>" ;

	// echo $lapicera ver key value ;

	
}

 ?>

</body>
</html>