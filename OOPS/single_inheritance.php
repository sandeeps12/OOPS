<?php
class ParentClass{
	public $car='My fav Car is Fortuner/Thar ';
	function returnValue(){
		echo $this->car;
	}
	function setCarName($brand){
		echo $this->car = $brand ;
	}
}
class ChildClass extends ParentClass{
	function setNewCar($brand){
		echo $this->car = $brand;
	}

}
$obj = new ChildClass;
$obj->setNewCar('<hr> my fav car is tata');

$obj->returnValue();
$obj->setCarName('<hr> My fav car is Thar ');


?>