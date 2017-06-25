<html>
 <style>
    
      body
        {
            background: url(back.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    
          fieldset
        {
            background-color: antiquewhite;
            width:500;
            position: relative;
            top:50px;
            
        }
        
        
        
        legend
        {
            background-color: crimson;
            color: white;
            border-radius:2em;
            padding : 10px;
        }
        
    
</style>

<body>
    
 <?php
    session_start();
    
    
    $name = $_POST['t1'];
    
    $_SESSION["title"] =$name;
    
    include ("Connectivity.php");
$conn = Connect::connection();
    if($conn == null )
    {
        echo "connection error. Retry !!";
    }
    
    else
    {   echo "<h1>HOLLA !!!!</h1>";
        $sql = "select * from note where title = '".$name."'";
       $res =  mysql_query($sql,$conn);
        $row= mysql_fetch_assoc($res);
        
        
         ?>
                <form action="edited.php" method="post">
        
             <center>
                <fieldset>
                <table>
                 <tr><th>Title</th><th><input type = "text" required value="<?php echo $row["title"];  ?>" name = "t1"></th></tr>
                <tr><th>Message</th><th><textarea name="t2"><?php echo $row["message"];  ?></textarea></th></tr>
                <tr><th>Date Of Post</th><th><input type = "date" required value="<?php echo $row["dop"];  ?>" name = "t3"></th></tr>
                <tr><th>Date Of Submission</th><th><input type = "date" required value="<?php echo $row["dos"];  ?>" name = "t4"></th></tr>
                <tr><th>Reference Links :(optional)</th><td><input type="text" name="t5" value ="<?php echo $row["link"];  ?>"/></td></tr>
                <tr><th></th><th><input type="submit" value ="EDIT"></th></tr>
                </table>
               </fieldset>  
            </center>
            
            
         </form>
               
     <?php   
        
        
    }
    
    
    
    
    
    ?>
    
</body>



</html>


