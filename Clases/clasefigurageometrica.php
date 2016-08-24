<?php 

public class FiguraGeometrica
{
	protected $_color;
	protected $_superficie;
	protected $_perimetro;


function getColor ()
{
	return $this->_color;
}

	function __construct()
	 {
		$this->_color = "algo";
	    $this->_superficie = 13.60;
	    $this->_perimetro = 15;

	 } 

	//function FiguraGeometrica()
	//{

	//}

function setColor ($color)
{
	$this->_color = $color;
}


 public function ToString ()
 {

 }

public abstract function Dibujar();

protected abstract function CalcularDatos ();



}

 ?>