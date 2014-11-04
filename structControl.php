<?php

/*if
elseif
else
switch
while
do while
for
foreach
break
continue
*/

// 1) if
$a = "5";
$b = "2";
if($a + $b ==7){
	//echo "nr este corect\n";
}


$t=date("H");

if ($t<"20") {
  //echo "Have a good day!\n";
} else {
  //echo "Have a good night!\n";
}
//switch
$masiniPref = "Audi";
switch ($masiniPref)
{
	case "Volvo";
	echo "Masina mea preferata este Volvo!\n";
	break;
	case "Audi";
	echo "Masina mea preferata este Audi!\n";
	break;
	case "Opel";
	echo "Masina mea preferata este Opel!\n";
	break;
}
// while

$n = 1;
while($n < 9)
{
	echo "nr ".$n. " este mai mic decat 9\n";
	$n++;
}

//do while

$x=6;

do {
  echo "nr este: $x\n";
  $x++;

} while ($x<=10);

//--------------
//for

for($i = 1;$i <= 10; $i++)
{
	//echo $i,PHP_EOL;
}

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i, PHP_EOL;
}

//------------------
$colors = array("red","green","blue","yellow");

foreach ($colors as $value) {
  echo $value, PHP_EOL;
}

