<?php

session_start();

$title = $_POST['t1'];
$message = $_POST['t2'];
$dop = $_POST['t3'];
$dos = $_POST['t4'];
$link = $_POST['t5'];

include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
    
}
else
{
 //echo $conn;
    
    $sql = "insert into note values('".$title."','".$message."','".$dop."','".$dos."','".$link."') ";
    
    $res = mysql_query($sql,$conn);

    
    header('Location:adminmenu.php');
    
}
mysql_close($conn);



?>