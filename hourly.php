<?php 
class Hourly extends Employee
{
	public function __construct($name, $designation, $hours, $pay){
		$this->_type = "Hourly";
		$this->_name = $name;
		$this->_designation = $designation;
		if ($hours > 40) {
			$addition = 10000;
			$this->_pay = (40 * $pay) + $addition;
		}
		else {
			$this->_pay = $hours * $pay;
		}
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