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

```

