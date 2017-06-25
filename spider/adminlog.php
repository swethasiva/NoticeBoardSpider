<?php

session_start();

$u = $_POST['t1'];
$p = $_POST['t2'];

include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
    
}
else
{
 //echo $conn;
    
    $sql = "select * from admin where uname='".$u."' and password='".$p."'";
    
    $res = mysql_query($sql,$conn);
    $count = mysql_num_rows($res);
    //echo $count;
    if($count == 1)
    {
        //echo "Login success!!!";
        
        $_SESSION['uname'] = $u;
        header('Location:adminmenu.php');
    }
    
    else if($count==0)
    { 
        $pwd = md5($p);
        $sql = "select * from student where uname='".$u."' and pwd='".$pwd."' and admin = 1 ";
    
    $res = mysql_query($sql,$conn);
    $count = mysql_num_rows($res); 

    //echo $count;
    if($count == 1)
    {
        //echo "Login success!!!";
        
        $_SESSION['uname'] = $u;
        header('Location:adminmenu.php');
    }
         else
    {
        echo "Invalid email or password !!!";
        echo "<a href='adminlog.html'>Retry</a>";
    }
    
    }
    
    
   
    
}
mysql_close($conn);



?>