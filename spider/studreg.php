

<html>
    
    <head>
     
        <style>
        
              body
        {
            background: url(back.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
            
            a
            {
                font-size: 30px;
                color:black;
            }
        </style>
    
    </head>


<?php

// echo $_SERVER['REQUEST_METHOD'];

$uname = $_POST['t1'];
$email = $_POST['t2'];
$pwd= $_POST['t3'];
$pwd1= $_POST['t4'];
$p1 = md5($pwd);
$p2 = md5($pwd1);

if($p1 == $p2)
{
include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
}
else
{

$sql = "insert into student (uname,email,pwd) values('".$uname."','".$email."','".$p1."')";


$result = mysql_query($sql,$conn);
    if($result == 1)
    {header("Location:studlog.html");}
    
    else 
    {
        echo "<h1>SORRY USERNAME ALREADY IN USE</h1>";
        
        ?>   
        
      <a href = "StudentRegister.php">Re Register with Different credentials </a>
    
    <?php
    }

mysql_close($conn);

}
}

    else
    {
        header("Location:studreg.html");
    }


?>


</html>
