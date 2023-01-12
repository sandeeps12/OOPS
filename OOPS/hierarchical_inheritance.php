<?php 
class A{
	public function categoryName(){
		return "Category is Sedan ";
	}
}
class B extends A{
	public function YourName(){
		return "My fav car is A4";
	}
	public function getHistory(){
		echo "Class A :" .$this->categoryName();
		echo "<hr> Class B :" .$this->YourName();
	}
}

class C extends A
{
	
	function siblings()
	{
		return "Siblings fav car i RS5 ";
	}
	public function getHistory(){
		echo "Class A :" .$this->categoryName();
		echo "<hr> Class B :" .$this->siblings();

}
}
$obj= new C;
$obj->getHistory();
$obj_1= new B;
$obj_1->getHistory();



 ?>