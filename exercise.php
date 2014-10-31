<?php


// incapsulare
class NumeClasa
{
	//proprietate si metoda
	//instanta unei clase = obiect
}
//$obj = new NumeClasa();


class A
{

	function __construct()
	{
		print_r("Sunt un constructor\n");
		$this -> name = "A";
	}

	function __destruct()
	{
		print_r("Sunt distrus\n");
		$this -> name."\n";
	}
}
class B
{
	private $name = 'A';
	function __construct()
	{
		print_r("Sunt un constructor\n");
		
	}

	function __destruct()
	{
		print_r("Sunt distrus\n");

	}
}
//$obj = new A();
//$obj ->name = 'y';
//$objB = new B();
//$objB ->name = "p";
//var_dump($obj);
//echo PHP_EOL;
//var_dump($objB);
//------------------------------
class C
{
	private $name = 'Calin';
	function __construct()
	{
//		print_r("Sunt un constructor\n");
	}

	function __destruct()
	{
//		print_r("Sunt distrus\n");
	}
}
class D extends C
{
	private $age = "15";	
}
/*$objc = new c();
$obj = new D();
var_dump($obj);
var_dump($objc);*/


//-----------------------------
abstract Class FiguraGeometrica
{
	protected $latura;
	//abstract function __construct(int $orice);
	
}
class Patrat 
//extends FiguraGeometrica
{	
	function __construct(integer $l)
	{
		$this->latura = $l; 
	}
}
$obj = new Patrat(4);
var_dump($obj);

