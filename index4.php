<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

echo "bl"."be"."cku";
echo "<br>";
echo "mat" . "ka";
echo "<br>";
echo 5 . 7;
echo 2.3;

$a = 1;
$b = 4;

print "<br> ";
echo $a += $b;
dump($a+=$b);

print "<br> ";
echo $a--;
dump($a--);

print "<br> ";
echo $a++;
dump($a++);

print "<br>";
echo $a -= $b;
dump($a-=$b);

print "<br>";
echo $a /= $b;
dump($a/=$b);

print "<br>";
echo $a *= $b;
dump($a*=$b);

print "<br>";
dump($a>$b);

print "<br>";
dump($a<$b);

print "<br>";
dump($a!=$b);

print "<br>";
echo $a==$b;
dump($a==$b);

print "<br>";
echo $a*$b;
var_dump($a*$b);

print "<br>";
echo $a/$b;
dump($a/$b);

print "<br>";
echo $a+$b;
dump($a+$b);

print "<br>";
echo $a-$b;
dump($a-$b);
    
?>

</body>