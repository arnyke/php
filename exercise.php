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
	function __construct($l)
	{
		$this->latura = $l; 
	}
}
/*$obj = new Patrat(4);
var_dump($obj);*/

//-------------------------------------

/*class A
{
	public function __construct($value)
	{
		echo "Constructoru lui A\n";
	}
	public function afiseaza($text)
	{
		echo "$text", PHP_EOL;
	}
}
class B extends A
{
	public function __construct($value)
	{
		parent::__construct();
		echo "Constructor lui B\n";
	}
	public function afiseaza($text)
	{
		parent::afiseaza(strtoupper($text));
	}
}
$a = new B();
$a = afiseaza ('Hello World');*/

//-------------------------
class Dreptungi
{
	protected $latime;
	protected $lungime;
	public function __construct($latime, $lungime)
	{
		$this -> latime = $latime;
		$this -> lungime = $lungime;
	}
	public function aria()
	{
		return $this ->latime * $this ->lungime;
	}
	public function perimetru()
	{
		return 2*($this->latime + $this->lungime);
	}
}
$d = new Dreptungi(4,8);
echo $d->aria(),PHP_EOL;
echo $d->perimetru(), PHP_EOL;
