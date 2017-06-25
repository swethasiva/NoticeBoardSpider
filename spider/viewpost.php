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
            
            
            table
            {
                background-color: saddlebrown; 
                position: relative;
                top : 150px;
                border-style:ridge;
                border-width: 8px;
                border-color:antiquewhite;
            
                
            }
            
            
           
            td
            {
                border-style: double;
                color:white;
                padding :5px;
            }
            
             #head
            {
               background-color: antiquewhite;
            color:black;
                padding:5px;
            }
            
            
            caption
            {
                background-color: antiquewhite;
                font-size: 30px;
                color:black;
                padding : 5px;
                border-style:ridge;
                border-width: 10px;
            }
            
            a{
                
                color: aliceblue;
                text-decoration-line: none;
            }
        </style>
    
    </head>
<body>
<?php
session_start();
$un = $_SESSION['uname'];

include ("Connectivity.php");
$conn = Connect::connection();

if($conn == null)
{
    echo "error in connection!!!";
}
else
{
 
    $sql = "select * from note ";
    $res = mysql_query($sql,$conn);
    
   // echo $res;
    
    ?>
<table align="center">
    <caption>ALL NOTES</caption>
    <tr id="head"><th>Title</th>
    <th>Message</th>
    <th>Date of post</th>
    <th>Date of Submission</th>
    <th>Reference Links</th>
    </tr>

<?php
while($row= mysql_fetch_assoc($res))
{
    ?>
     <tr><td><?php echo $row["title"] ?></td> 
         <td><?php echo $row["message"] ?></td>
         <td><?php echo $row["dop"] ?></td>
         <td> <?php echo $row["dos"] ?></td>
         <td><a href="<?php echo $row["link"]?>"><?php echo $row["link"]?></a></td>
         </tr>
    <?php
}
    }
    


?>
    
    <a href="adminmenu.php">Back</a>