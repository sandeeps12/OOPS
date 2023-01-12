<?php
  abstract class Component{
  	public abstract function getEngine();
  	public abstract function getChassis();
  	protected abstract function getTransmission($type);
  	protected abstract function getBody($color);

  }
  class Skoda extends Component{
  	public function getEngine(){
  		return "Engine is Installed. <br>";
  	}
  	public function getChassis(){
  		return "Chassos is Installed. <br>";
  	}
  	public function getTransmission($type){
  		return "$type Transmission is Installed. <br>";
  	}
  	public function getBody($color){
  		return "$color body is Installed";
  	}
  	public function getData(){
  		echo $this->getEngine();
  		echo $this->getChassis();
  		echo $this->getTransmission('Automatic');
  		echo $this->getBody('Red');

  	
  	}

  	}


  $obj= new Skoda;
  $obj->getData();
  ?>