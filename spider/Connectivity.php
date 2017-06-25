<?php

class Connect
{

public static function connection()
{
$servername ="localhost";
$dbname="board";
$user="root";
$pwd="";

$conn = mysql_connect($servername,$user,$pwd);
mysql_select_db($dbname);
return $conn;
}

}

?>