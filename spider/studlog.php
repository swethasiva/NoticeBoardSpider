<?php

session_start();

$u = $_POST['t1'];
$pwd = $_POST['t2'];
$p = md5($pwd);

include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
    
}
else
{
 //echo $conn;
    
    $sql = "select * from student where uname='".$u."' and pwd1='".$p."'";
    
    $res = mysql_query($sql,$conn);
    
    $count = mysql_num_rows($res);
    //echo $count;
    if($count == 1)
    {
        //echo "Login success!!!";
        
        $_SESSION['uname'] = $u;
        header('Location:studentmenu.php');
    }
    else
    {
        echo "Invalid email or password !!!";
        echo "<a href='adminlog.html'>Retry</a>";
    }
    
}
mysql_close($conn);



?>