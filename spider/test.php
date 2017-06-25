<?php
include ("Connectivity.php");
$con = Connect::connection();
if($con != null)
{
    echo "connection est!!!";
}
else
{
    echo "error in co!!";
}
?>