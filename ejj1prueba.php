<html>
<head>
	<title>Cuevas</title>
</head>
<body>
<h1>Hola Mundo!</h1>

<?php


$vueltas = 10;
$cuentap = 0;
$cuentai = 0;
$i;

$c1 = 0;

$c2 = 0;

$c3 = 0;

$c4 = 0;

$c5 = 0;

$c6 = 0;

$c7 = 0;

$c8 = 0;

$c9 = 0;

$c10 = 0;



for($i = 0; $i<$vueltas;$i++)
{
$numeroR = rand(1,10);

if ($numeroR%2 == 0)
{

	$cuentap++;
} else
{ 
$cuentai++;
}

switch ($numeroR) {
	case '1':
		$c1++;
		break;
	case '2':
		$c2++;
		break;
	case '3':
		$c3++;
		break;
	case '4':
			$c4++;			
			break;
	case '5':
	$c5++;
		break;			
	case '6':
	$c6++;
			break;	
	case '7':
	if ($c7 == 5*$vueltas/100)
	{

	continue;
	} else
	{
			$c7++			;
		}
				break;		
	case '8':
	$c8++;
					break;			
	case '9':
			$c9++;
									break;				
	case '10':
	$c10++;
										break;								
	
}

}

$r1 = 0;

$r1 = $c1*100/$vueltas;

echo "Pares: $cuentap <br> ";

echo "Impares: $cuentai <br>";

echo "Unos $r1 % <br>";

echo "Doses $c2 <br>";


echo "Treses $c3 <br>";

echo "Cuatros: $c4 <br>";


echo "Cincos: $c5 <br>";

echo "Seises: $c6 <br>";


echo "Sietes: $c7 <br>";

echo "Ochos: $c8 <br>";

echo "Nueves: $c9 <br>";

echo "Dieces: $c10 <br>";



?>

</body>
</html>
