<?php
include_once 'db_conn.php';
?>

<?php

if(isset($_POST['forward'])){
$query = "select * from base";
$result = mysqli_query($conn, $query);
    
$query = "UPDATE `base` SET `BMove` = 'f' WHERE `base`.`IDB` = 'B1'";
$result = mysqli_query($conn, $query);
    
if($result)
{
echo "Move Forward";
}
        
else{
echo "ERROR: Unable to Update!";
}
}

elseif(isset($_POST['left'])){
$query = "select * from base";
$result = mysqli_query($conn, $query);

$query = "UPDATE `base` SET `BMove` = 'l' WHERE `base`.`IDB` = 'B1'";
$result = mysqli_query($conn, $query);
    
if($result)
{
echo "Move Left";
}
    
else
{
echo "ERROR: Unable to Update!";
}    
}

elseif(isset($_POST['stop'])){
$query = "select * from base";
$result = mysqli_query($conn, $query);
    
$query = "UPDATE `base` SET `BMove` = 's' WHERE `base`.`IDB` = 'B1'";
$result = mysqli_query($conn, $query);
    
if($result)
{
echo "Stop";
}
        
else{
echo "ERROR: Unable to Update!";
}
}

elseif(isset($_POST['right'])){
$query = "select * from base";
$result = mysqli_query($conn, $query);

$query = "UPDATE `base` SET `BMove` = 'r' WHERE `base`.`IDB` = 'B1'";
$result = mysqli_query($conn, $query);

if($result)
{
echo "Move Right";
}
    
else
{
echo "ERROR: Unable to Update!";
}
}

elseif(isset($_POST['backward'])){
$query = "select * from base";
$result = mysqli_query($conn, $query);

$query = "UPDATE `base` SET `BMove` = 'b' WHERE `base`.`IDB` = 'B1'";
$result = mysqli_query($conn, $query);
    
if($result)
{
echo "Move Backward";
}
    
else{
echo "ERROR: Unable to Update!";
}
}

?>