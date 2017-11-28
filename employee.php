<?php 
abstract class Employee
{

	protected $_name;
	protected $_designation;
	protected $_type;
	protected $_pay;

	public function getName(){
		return $this->_name;
	}
	public function getDesignation(){
		return $this->_designation;
	}
	public function getType(){
		return $this->_type;
	}
	public function getPay(){
		return $this->_pay;
	}

	abstract public function getDetails();
}

?>