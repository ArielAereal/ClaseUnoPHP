<html>
<head>
	<title>Cuevas</title>
</head>
<body>

<?php 

$numero =1;

for ($i = 2;$numero < 1000 ;$i++)
{

	$numero = $numero + $i; 

if ($numero > 1000)
{
	break;
}
	echo "Sume: $i <br>";
	echo "y van sumando: $numero <br> ";
}

echo "Se sumaron: $i numeros";

 ?>

</body>
</html>