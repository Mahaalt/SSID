<?php
include_once 'db_conn.php';
?>

<?php
$motor1 = $_POST['motor1'];
$motor2 = $_POST['motor2'];
$motor3 = $_POST['motor3'];
$motor4 = $_POST['motor4'];
$motor5 = $_POST['motor5'];
$motor6 = $_POST['motor6'];
?>

<?php

if(isset($_POST['save']))
{
$query = "";

$query = "select * from motor";
$result = mysqli_query($conn, $query);

$query = "UPDATE motor SET MValue = ('$motor1') WHERE IDM='M1'";
$result = mysqli_query($conn, $query);

$query = "UPDATE motor SET MValue = ('$motor2') WHERE IDM='M2'";
$result = mysqli_query($conn, $query);

$query = "UPDATE motor SET MValue = ('$motor3') WHERE IDM='M3'";
$result = mysqli_query($conn, $query);

$query = "UPDATE motor SET MValue = ('$motor4') WHERE IDM='M4'";
$result = mysqli_query($conn, $query);

$query = "UPDATE motor SET MValue = ('$motor5') WHERE IDM='M5'";
$result = mysqli_query($conn, $query);

$query = "UPDATE motor SET MValue = ('$motor6') WHERE IDM='M6'";
$result = mysqli_query($conn, $query);

if($result)
{
echo "Updated successfully!";
}
    
else
{
echo "ERROR: Unable to Update!";
}
}

elseif(isset($_POST['on']))
{
$query = "";

$query = "select * from switch";
$result = mysqli_query($conn, $query);

$query = "UPDATE `switch` SET `SName` = 'OFF' WHERE `switch`.`IDS` = 'S1'";
$result = mysqli_query($conn, $query);
$query = "UPDATE `switch` SET `SName` = 'ON' WHERE `switch`.`IDS` = 'S2'";
$result = mysqli_query($conn, $query);

if($result)
{
echo "Updated successfully!";
}
    
else
{
echo "ERROR: Unable to Update!";
}
}

elseif(isset($_POST['off']))
{
$query = "";

$query = "select * from switch";
$result = mysqli_query($conn, $query);

$query = "UPDATE `switch` SET `SName` = 'ON' WHERE `switch`.`IDS` = 'S1'";
$result = mysqli_query($conn, $query);
$query = "UPDATE `switch` SET `SName` = 'OFF' WHERE `switch`.`IDS` = 'S2'";
$result = mysqli_query($conn, $query);

if($result)
{
echo "Updated successfully!";
}
    
else
{
echo "ERROR: Unable to Update!";
}
}
?>