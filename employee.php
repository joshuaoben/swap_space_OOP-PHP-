<?php 
abstract class Employee
{

	protected $_name;
	protected $_designation;
	protected $_type;
	protected $_pay;

	function getName(){
		return $this->_name;
	}
	function getDesignation(){
		return $this->_designation;
	}
	function getType(){
		return $this->_type;
	}
	function getPay(){
		return $this->_pay;
	}

	abstract public function getDetails();
}

?>