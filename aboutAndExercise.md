### Tipuri

```
$int = 1;  ---->  Z={..-2,-1,0,1,2};
$string = "string"  ---->  (texte);  $string = "" !== null;
$boolean = 'true'| 'folse';   ----> 1|0;
$array = array();
$object = new stdClass();
$float = 1.34;
$resources   ----->  o conexiune la baza de date;
null = null;
			
```
### Operators
```
Operatori  aritmetici
Operatori logici
Operatori de asignare
Comparison Operators (Operatori de egalitate)
Incrementing/Decrementing Operators
Operatori de concatenare
```


### 1)Operatori  aritmetici

```
-$a 		Negation 	Opposite of $a.
$a + $b 	Addition 	Sum of $a and $b.
$a - $b 	Subtraction 	Difference of $a and $b.
$a * $b 	Multiplication 	Product of $a and $b.
$a / $b 	Division 	Quotient of $a and $b.
$a % $b 	Modulus 	Remainder of $a divided by $b.
$a ** $b 	Exponentiation 	Result of raising $a to the $b'th power. Introduced in PHP 5.6.
```
### 2)Operatori logici
```
$a and $b 	And 	TRUE if both $a and $b are TRUE.
$a or $b 	Or 		TRUE if either $a or $b is TRUE.
$a xor $b 	Xor 	TRUE if either $a or $b is TRUE, but not both.
! $a 		Not 	TRUE if $a is not TRUE.
$a && $b 	And 	TRUE if both $a and $b are TRUE.
$a || $b 	Or 		TRUE if either $a or $b is TRUE.
```

### 3) Comparison Operators (Operatori de egalitate)
```
$a == $b 	Equal 			TRUE if $a is equal to $b after type juggling.
$a === $b 	Identical 		TRUE if $a is equal to $b, and they are of the same type.
$a != $b 	Not equal 		TRUE if $a is not equal to $b after type juggling.
$a <> $b 	Not equal 		TRUE if $a is not equal to $b after type juggling.
$a !== $b 	Not identical 	TRUE if $a is not equal to $b, or they are not of the same type.
$a < $b 	Less than 		TRUE if $a is strictly less than $b.
$a > $b 	Greater than 	TRUE if $a is strictly greater than $b.
$a <= $b 	Less than or equal to 		TRUE if $a is less than or equal to $b.
$a >= $b 	Greater than or equal to 	TRUE if $a is greater than or equal to $b.
```
### 4) Incrementing/Decrementing Operators
```
++$a 	Pre-increment 		Increments $a by one, then returns $a.
$a++ 	Post-increment 		Returns $a, then increments $a by one.
--$a 	Pre-decrement 		Decrements $a by one, then returns $a.
$a-- 	Post-decrement 		Returns $a, then decrements $a by one.
``` 
### 5) Operatori de concatenare
```
$a = "te";
$b = "xt";
$c = $a .$b;
echo $c;
```

### 6) Operatori de asignare 
```
.=
```

### Function
```
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Example function.\n";
    return $retval;
}
poate sa ia -  arrays to functions
-  function parameters by reference
-  default parameters in functions
-  non-scalar types as default values
-  usage of default function arguments
-  Correct usage of default function arguments
-  to access variable arguments
-  to provide arguments
-  hinted variable arguments

function suma ($a,$b)
{
$suma = $a + $b;
return $suma;
}
echo suma (1,5);
```
### Constante magice 
```
echo __FILE__		-> ne afiseaza numele fisierului curent
echo __DIR__		-> ne afiseaza directoru unde ne aflam
echo __LINE__		-> ne afiseaza linia apelata
echo __CLASS__		-> ne afiseaza clasa apelata
echo __NAMESPACE__	-> ne afiseaza namespaceu curent
echo __FUNCTION__	-> ne afiseaza numele functiei curente
```
###Structuri de control - conditii
```
-if
-else
-elseif/else if
-Alternative syntax for control structures
-while
-do-while
-for
-foreach
-break
-continue
-switch
-declare
-return
-require
-include
```
### 1)if 2) else 3) elseif/else
``` 
if (conditie)
{
executa ceva;
}elseif{
executa altceva;
}else{
executa ce vrei tu;
}
```
### Switch  -
ii asemanator ca si if()
```

if ($i == 0) {
    echo "i equals 0";
} elseif ($i == 1) {
    echo "i equals 1";
} elseif ($i == 2) {
    echo "i equals 2";
}

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}
```
### while()
verifica  dupaia executa
```
while(conditie)
{
	executa _statemantu
}
echo PHP_EOL;
```
### do while
prima data executa dupaia verifica conditia
```
do
{
	executa_statemantu	
}
while($conditia)
	echo PHP_EOL;
______

$i = 0;
do {
    echo $i;
} while ($i > 0);
```
###for()
```
for (expr1; expr2; expr3)
    statement

/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
```
expre1  - se executa neconditionat;
expre2 	- se executa inainte dupaia verifica
expre3 	- se executa dupa block

### foreach
functioneaza doar cu array si obiecte
foreach expresie -> valoare
				 -> sau keia is o valoare
```
foreach (array_expression as $value)
    statement

foreach (array_expression as $key => $value)
    statement

foreach($array as $element):
  #do something
endforeach;

$arr = array(1,2,3,4,5,6,7,8,9);

foreach($arr as $key=>$value)
{
    unset($arr[$key + 1]);
    echo $value . PHP_EOL;
} 
```
###breack
opreste executia curenta a unui for, foreach, do while, while sau swich;
```
echo "hello";
if (true) break;
echo " world"; 
```
### Continue
ii un fel de skip
```
for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        continue
    print "$i\n";
}
```
### include
include statement includes and evaluates the specified file
```
$a = include 'return.php';

echo $a;
```
### require
```
ii identic cu include
require genereaza un fatal ERROR
iar include genereaza doar un WARNING
#la tamplaturi e mai bine de folosit include
```
### Alternative syntax for control
-ofera alternative pentru controluri namely, if, while, for, foreach, and switch
```
$hour = 11;

print $foo = ($hour < 12) ? "Good morning!" : "Good afternoon!";
return Good morning!
```
### ~~OOP~~ 

OOP un model de solutionare a problemeor.

- incapsulare - grupeaza un set de metode intr-o clasa
- mostenierea - transmite informatia parinte -> copil / se pot suprascrie metode din parinte / poate adauga metode noi 
- polimorfism - capabil sa ieie diferite forme

```
class Nume Clasa
{
	contine proprietati si metode
}
	instanta unui clase->obiect
	$obj = new Nume Clasa();
```
```
class Nume Clasa
{
	function metoda ($param = 5)
	{
		echo $param;
	}
}
$obj = new Nume Class();
$obj->metoda;
```
```
class Nume Class
{
	var $ proprietate = 1; (floaturi, array, array());
}
$obj = new Nume Clasa();
$obj -> proprietate+=4;
echo $obj ->proprietate;
```
```
~~Variabile Speciale~~
$this  - varabila curenta / accesare doar din clasa / ii instanta curenta a unei clase
```
### Constructori si destructori
*constructor - metoda __construct - poate primi argumente
*distructor  - metoda __distruct  - atunci cand o metoda este steasra / distrusa 
								 - nu poate primi argumente

```
class A 
{
	function __construct()
	{
		echo "constructor";
	}
}
new A();


class A
{
	function __destruct()
	{
		echo "destruct";
	}
}
$obj = new A();
unset ($obj);
```
```
class Exemplu
{
	var $proprietate = 1;
	function __construct()
	{
		echo "Am fost creat";
	}
	function__distruct()
	{
		echo "Am fost distrus";
	}
	function schima($valoare)
	{
		$this->$proprietate = $valoare;
	}
}
$i = new Exemplu();
echo $i->proprietate, PHP_EOL;
```

### Accesorii
```
- public  	- se poate accesa atat din interior cat si din exteriorul clasei
- private 	- doar din interiorul clasei se poate accesa / nu se mosteneste
- protected	- nu se poate accesa doar din interiorul clasei
```