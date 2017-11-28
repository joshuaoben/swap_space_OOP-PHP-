<?php 
class Salaried extends Employee
{
	public function __construct($name, $designation, $pay){
		$this->_type = "Salaried";
		$this->_name = $name;
		$this->_designation = $designation;
		$this->_pay = $pay;
	}

	public function getDetails(){
		echo "<ul>";
		echo "<li>Name: " . $this->getName() . "</li>";
		echo "<li>Designation: " . $this->getDesignation() . "</li>";
		echo "<li>Type: " . $this->getType() . "</li>";
		echo "<li>Pay: " . $this->getPay() . "</li>";
		echo "</ul>";
	}

}

?>