<?php
$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "wddx");//���� ���������� � ����� ������ ����������, � � ����� ����� �������� �������, ����������� ���������� prefix. 

echo "$color, $size, $shape, $wddx_size";
?>
<?php
$size = "large";
$var_array = array("privet" => "blue",
                   "lice"  => "medium",
                   "cryger" => "sphere");
extract($var_array, EXTR_PREFIX_ALL, "wddx");//�������� ������� prefix �� ���� ������ ����������. 
echo "$privet, $lice, $cryger, $wddx_size";
?>
<?php $a='����'; $Mass1 = array('a'=>1, 'a'=>2); extract($Mass1, EXTR_OVERWRITE); echo "$a $b"; //���� ���������� ����������, �� �� �������� �������������� (��� �������� �� ���������);
?>
<?php $a='����'; $Mass2 = array('a'=>1, 'a'=>2, 'c'=>3); extract($Mass2, EXTR_SKIP); echo "$a $b";//���� ���������� � ����� ������ ����������, �� ������� �������� �� ����� ������������. 
?>
<?php
$numbers = range(1, 20);
shuffle($numbers);//��� ������� ������������ �������� ������� � ��������� �������. 
foreach ($numbers as $number) {
    echo "$number ";
}
?>
<?php
$array = array ("blue", "red", "green", "blue", "blue");
print_r(array_keys ($array, "blue"));// ����� [0] => 0, [1] => 3, [2] => 4
?>
 <?php
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));
?> 
 <?php
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);
$output = array_slice($input, -2, 1);  
$output = array_slice($input, 0, 3);  
print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));
?> 
 <?php
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
?> 
 <?php
$city  = "Sony";
$state = "CA";
$event = "SIGA";
$location_vars = array("city", "state");
$result = compact("event", "nothing_here", $location_vars);
?> 
 <?php
$stack = array("oracyl", "vert", "reglament", "razvernet");
$fruit = array_shift($stack);
print_r($stack);
?> 
 <?php
$stack = array("creativ", "mir");
array_push($stack, "aplical", "raspredel");
print_r($stack);
?> 
<?php
$input = array("a", "b", "c", "d", "e");
$output = array_splice($input, 2);
$output = array_splice($input, -2, 1);  
$output = array_splice($input, 0, 3);  
print_r(array_splice($input, 2, -1));
print_r(array_splice($input, 2, -1, true))
?>