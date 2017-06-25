<?php

session_start();
$name = $_SESSION['uname'];
$new = $_POST['t1'];
//$new = $_POST['t2'];




include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
}
else
{

//$sql = " update student set cr = 0 where uname  = '".$old."'" ;
//$result = mysql_query($sql,$conn);
    $sql = " select admin from student where uname = '".$name."' ";
    $res1 = mysql_query($sql,$conn);
    if($name == 'admin' || $res1 ==1 )
    {
    
$sql = " update student set admin = 1 where uname  = '".$new."' ";
$result = mysql_query($sql,$conn);
    


header('Loacation:adminmenu.php');
mysql_close($conn);

}
}


?>


