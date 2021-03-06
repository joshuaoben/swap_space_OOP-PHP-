<?php 
class SalariedCommission extends Employee
{
	public function __construct($name, $designation, $pay, $sale, $salePercent){
		$this->_type = "Salaried Commision";
		$this->_name = $name;
		$this->_designation = $designation;
		$final_pay = $sale * ($salePercent/100);
		$this->_pay = $pay + $final_pay;
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
