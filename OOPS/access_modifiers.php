<?php
class myClass{
	public $public = 'public';
	protected $protected ='protected';
	private $private ='private';
	function printValues(){
		echo $this->public;
		echo $this->protected;
		echo $this->private;

	}
}
$obj = new myClass;
/*echo $obj->public;
echo $obj->protected;
echo $obj->private;*/
$obj->printValues();

  ?>