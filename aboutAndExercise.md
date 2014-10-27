### Tipuri

```
$int = 1;  ---->  Z={..-2,-1,0,1,2};
$string = "string"  ---->  (texte);
$boolean = 'true'| 'folse';   ----> 1|0;
$array = array();
$object = new stdClass();
$float = 1.34;
$resources   ----->  o conexiune la baza de date;
null = null;

$string = "" !== null;
```
### Operators

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

### Functions
```
function functionName() {
  code to be executed;
}
```

```
function name($argument1,$argument2)
{
	$name = $argument1 + $argument2;
	return $name;
}
echo suma(1,5);
```
