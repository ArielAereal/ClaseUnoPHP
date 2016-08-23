<html>
<head>
	<title>Cuevas</title>
</head>
<body>

<?php 

//revisar que no sale bien :P 

$numeroacumulador =1;
$cantnum=1;
$i =2;


while ($numeroacumulador < 1000)
{

$numeroacumulador = $numeroacumulador + $i; 

$i++;
$cantnum++;	



	echo "Sume: $cantnum <br>"."y van sumando: $numeroacumulador <br> ";

if($numeroacumuador > 1000)
{
	break;
}


}


echo "Se sumaron: $cantnum numeros";

 ?>

</body>
</html>