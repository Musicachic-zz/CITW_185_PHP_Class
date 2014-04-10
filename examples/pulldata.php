<?php

echo('aaa');
session_start();
include('../includes/header.php');
include('../includes/sql.php');

$conn = mysql_connect($db_host, $db_user, $db_pass) or die('Error connect db: ' . mysql_error());
mysql_select_db($db_name, $conn);


$query = "SELECT * FROM $table WHERE id > '0' ";
$result = mysql_query($query) or die("Could not get data: $query " . mysql_error());

while ($row = mysql_fetch_array($result))
{
    $id = $row['id'];
    $name = $row['name'];
    $address_1 = $row['address_1'];
    $address_2 = $row['address_2'];
    $city = $row['city'];
    $state = $row['state'];
    $zip = $row['zip'];
    $phone = $row['phone'];
    echo("$id $name $address_1 $address_2 $city $state $zip $phone <br>");
}

//$query2 = "INSERT INTO class (TUID, first_name, last_name, email) VALUES ('pottst1', 'Teresa', 'Potts', 'pottst1@mail.lcc.edu') ";
$query2 = "SELECT * FROM class WHERE last_name = 'Potts'";
$result2 = mysql_query($query2) or die("Could not get data: $query2 " . mysql_error());

while ($row2 = mysql_fetch_array($result2))
{
    $TUID = $row2['TUID'];
    $first_name = $row2['first_name'];
    $last_name = $row2['last_name'];
    $email = $row2['email'];
    echo("$TUID $first_name $last_name $email<br>");
}

mysql_close($conn);
include('../includes/footer.php');
?>