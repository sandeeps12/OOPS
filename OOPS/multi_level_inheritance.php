<?php
class A{
	public function grandParent(){
		return "Grand father age is 60 ";
	}

}
class B extends A{
	public function father(){
		return "father age is 40";

	}
}
class C extends B{
	public function you(){
		return "MY aage is 15";
	}
	public function getHistory(){
		echo "Class A :" .$this->grandParent();
		echo "<hr>Class B: " .$this->father();
		echo "<hr> Claass C :" .$this->you();
	}
}
$obj=new C;
$obj->getHistory();





?>
