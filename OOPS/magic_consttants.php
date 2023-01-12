<?php

	echo "Current line o is:".__LINE__;
	echo "<hr>";
	echo "<BR>";



	echo"Current file Name is:".__FILE__;
	echo "<hr>";


	function test(){
		echo"__FUNCTION__ <br>";
		echo"Current function name is:".__FUNCTION__;
		echo"<hr>";

	}
	test();



class demoClass{
	function getClassName(){
		echo "__CLASS__ <br>";
		echo "Class is:".__Class__;
		echo "<hr>";

	}
	function getMethodName(){
		echo "__METHOD__<br>";
		echo "Method  is:".__METHOD__;
		echo "<hr>";
	}




}
$obj= new demoClass;
	$obj->getClassName();
	$obj->getMethodName();





?>