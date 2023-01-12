<?php
 final class A{
 	final public function maths($a,$b){
 	echo "Addtion is:".$a+$b;
     }
 }
 class B extends A{
 	 public function maths($a ,$b){
 		echo "Substraction is:".$a-$b;

 	}
 }
 $obj=new B;
 $obj->maths(2,2);



?>