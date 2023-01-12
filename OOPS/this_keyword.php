<?php 

 class demoClass{
 	public $category='E-Learning';
 	public $company='Sandeep';
 	
 	public function __construct($category,$company)/*Parametrised constructor*/
 	{
 		$this->category=$category;
 		$this->company=$company;
 		
 	}	
	public function __destruct()
	{
		echo "The best " . $this->category . "platform is " . $this->company;
	}

	public function testFunction(){
		echo "this is Test function <br> ";
		exit;
		echo "This is test function after exit";
	}
 }
 $obj= new demoClass('E-commerce','Shopify');
 $obj-> testFunction();







 


 ?>