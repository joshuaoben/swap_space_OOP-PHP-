<?php 
include 'employee.php';
include 'salaried.php';
include 'hourly.php';
include 'commission.php';
include 'salaried_commision.php';

$salaried = new Salaried("Tola", "Clerk", 250);
$salaried->getDetails();
$hourly = new Hourly("Jide", "Gateman", 42, 250);
$hourly->getDetails();
$commission = new Commission("Tope", "Typist", 25000, 10);
$commission->getDetails();
$salaried_commission = new SalariedCommission("Tope", "Dev", 250, 250, 10);
$salaried_commission->getDetails();

?>