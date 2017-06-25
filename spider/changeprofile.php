<html>
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
    
    #err
    {
        color:red;
    }
    
</style>

<body>
    
 <?php
    session_start();
    $name=$_SESSION['uname'];
    //echo $name;
    include ("Connectivity.php");
    $conn = Connect::connection();
    if($conn == null )
    {
        echo "connection error. Retry !!";
    }
    
    else
    {   
        $sql = "select * from admin where uname = '".$name."'";
       $res =  mysql_query($sql,$conn);
        $row= mysql_fetch_assoc($res);
        
         echo "<h1>Nice To See You Back ".$name."</h1>";
        //echo $row["uname"];
         ?>
               <center> <form action="changed.php" method="post">
             
    
                <table>
                 <tr><th>Username</th><th><input type = "text" required value="<?php echo $row["uname"];  ?>" name = "t1"></th></tr>
                <tr><th>Old Password</th><th><input type = "password" placeholder="Old Password" name = "t2"></th><th><div id="err">Enter these fields only if you want to change password</div></th></tr>
                <tr><th>New Password</th><th><input type = "password"  name = "t3" placeholder="New password "></th></tr>
                <tr><th>Confirm New Password</th><th><input type = "password"  name = "t4" placeholder="New Password"></th></tr>
                <tr><th></th><th><input type="submit" value =" Save Changes "></th></tr>
                </table>
                 
           
         </form>  </center>
               
     <?php   
        
        
    }
    
    
    
    
    
    ?>
    
</body>



</html>


