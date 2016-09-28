<?php
$a = round(3.4);
$b = round(3.5);
$c = round(3.6);
$foo = ceil(3.1);
$sum = ceil(3);
$v = floor(3.9999);
echo("$a,$b,$c,$foo,$sum,$v");
?>
<?php
$ourFile = fopen("largetextfile.txt", "r");
for($i=0;$s=fgets($ourFile,10000);$s++){
if (mt_rand(0,$i) == 0) $line = $s;//mt_rand возвращает максимальное число
}
$file = file("largetextfile.txt");
echo $file[mt_rand(0,count($file)-1)];
echo $line;
?>
<?php
mt_srand(123);
for ($i=0;$i<5;$i++) echo mt_rand()." ";
echo "<br>";
mt_srand(123);
for ($i=0;$i<5;$i++) echo mt_rand()." ";
?>
<?php
$alpha = atan2(1,1);
$alpha = atan(-1,-1);
echo pi()*10;
?>
