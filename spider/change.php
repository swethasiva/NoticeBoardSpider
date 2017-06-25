<?php

session_start();
//$name = $_SESSION['title'];
$old = $_POST['t1'];
$new = $_POST['t2'];




include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
}
else
{

    
        $sql = "update student set cr = 0 where cr = 1";
        $result = mysql_query($sql,$conn);
    
        $sql = " update student set cr = 1 where uname  = '".$new."'" ;
        $result = mysql_query($sql,$conn);
    
  


    header('Loacation:adminmenu.php');
mysql_close($conn);

}


?>


