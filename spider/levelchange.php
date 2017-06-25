<html>
<head>
    <style>
        form
        {
            background-color: bisque;
            position:relative;
            top:150px;
            width:500px;
            padding:20px;
            border-radius: 3em;
        }
        
        
        body
        {
            background: url(back.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>    
</head>
    <body>
    
  <?php 
        session_start();
        $u = $_SESSION['uname'];
        
if($u == "")
{
    header('Location:adminlog.html');
}
        
        else
        {

include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
}
else
{
 
    $sql = "select   uname from student";
    $res = mysql_query($sql,$conn);
    
    ?>
<center>
 <form action="assignadmin.php" method="post">
    <table>
       
     <tr>
<th>Make Admin</th><td><input list="fname"  name="t1" autocomplete="off" placeholder="Select admin name"/>
                
                                <datalist id="fname">

<?php
      while($row= mysql_fetch_assoc($res))
{
    ?>
     <option> <?php echo $row["uname"]; ?></option> 
        
                                    
                                    
                                    
    <?php
}

     ?>
                                    
  
        
     
    
    
            
            
  
        <tr>
        <td><input type="submit" value="Make Admin "/></td><th><a href = "adminmenu.php">Back</a></th>
        </tr>
    
    </table>
    </form>
    </center>  
                                    
<?php
                                
    }
        
        
    mysql_close($conn);
        }

?>   
                                 
                     
     
    </body>

</html>