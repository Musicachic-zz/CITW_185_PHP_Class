<?php
    include('../includes/header.php'); 

    // code 
    error_reporting(E_ALL);    // set error reporting to all
echo ("<div class='padding'>");
$radius = 4;

$diameter = $radius * 2;
$circumference = M_PI * $diameter;
$area = M_PI * pow($radius, 2);

echo ("This circle has...<br/>");
echo ("A radius of ". $radius . "</br>");
echo ("A diameter of ". $diameter . "<br/>");
echo ("A circumference of " . $circumference . "<br/>");
echo ("An area of " . $area . "<br/>");
echo ("</div>");

include('../includes/footer.php');
?>

