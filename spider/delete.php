<?php

// echo $_SERVER['REQUEST_METHOD'];

$name = $_POST['t1'];




include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
}
else
{

$sql = "delete from note where title = '".$name."'";


$result = mysql_query($sql,$conn);
    header('Loaction:deletenote.php');
    
    

    
mysql_close($conn);

}


?>

<a href = "deletenote.php">Back</a>
