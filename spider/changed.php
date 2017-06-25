<?php

// echo $_SERVER['REQUEST_METHOD'];
session_start();
$name = $_SESSION['uname'];
$uname = $_POST['t1'];
$old = $_POST['t2'];
$new= $_POST['t3'];
$cnew = $_POST['t4'];

if($new == $cnew)
{


include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
}
else
{

$sql = " update admin set uname = '".$uname."' where password = '".$old."'" ;
$result = mysql_query($sql,$conn);

$sql = " update admin set password = '".$new."' where password = '".$old."'" ;
$result = mysql_query($sql,$conn);
    

    

/*if( $result == 1)
{
    echo "Registered Successfully!!";
    
}
    else
    {
        echo "Sorry Registration Unsuccessfull!!!";
    } */
    
    
    header("Location:adminmenu.php");
mysql_close($conn);

}
}

else 
{ ?>
   <html>

        <script>alert("OOPS !!! Confirm Your Password Correctly");</script>
       
       <br>
       
       <a href="changeprofile.php"><h1>RETRY </h1></a>
       
       
       
  </html>
<?php 

      
} 


?>


