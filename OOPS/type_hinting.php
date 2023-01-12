<?php
 function int_fun(int $a,int $b){
 	var_dump($a);
 	var_dump($b);
 	return $a+ $b;
 }

function float_fun(float $a,float $b){
	var_dump($a);
	var_dump($b);
	return $a+$b;
}
function boolean_fun( bool $a,bool $b){
	var_dump($a);
	var_dump($b);
	return $a+$b;
}
function array_fun(array $values){
	foreach ($values as $value) {
		echo $value.'<br>';
	}
}











 echo int_fun(2,3);
 echo "<br><hr>";
 echo float_fun(2.2,3.3);
 echo "<br><hr>";
 echo boolean_fun(true,false);
 echo "<br><hr>";
 echo array_fun(['Sandeep','rohit','deeepak']);
  echo "<br><hr>";




?>