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
    
          fieldset
        {
            background-color: antiquewhite;
            width:500;
            position: relative;
            top:200px;
            
        }
        
        
        
        legend
        {
            background-color: crimson;
            color: white;
            border-radius:2em;
            padding : 10px;
        }
        
        
        #c2
        {
          
            width: 45px;
        }
        
        
        
    
    </style>
    <script>
    
    
    function verify()
        {
            document.getElementById('err1').innerHTML="";
            var ca1 = document.getElementById('c1').value;
            var ca2 = document.getElementById('c2').value;
           // alert(ca1 + "  "+ca2);
            if(ca1 != ca2)
                {
                    document.getElementById('err1').innerHTML="wrong captcha !! verify again.";
                    document.getElementById('err1').style.color="red";
                    return false;
                }
            else
                {
                    return true;
                }
            
        }
    
    </script>
</head>
    
<body>
   <center> 
    <fieldset>
        <legend>Registration</legend>
    
        <form action="studreg.php" method="post" onsubmit="return verify()"> 
        
            
                
                <table>
                
                    <tr><th>User Name</th><td><input type="text" name="t1" required autocomplete="off"></td></tr>
                     <tr><th>Email ID</th><td><input type="email" name="t2" required autocomplete="off"></td></tr>
                     <tr><th>Pasword</th><td><input type="password" name="t3" required></td></tr>
                     <tr><th>Confirm Password</th><td><input type="password" name="t4" required></td></tr>
                     <tr><th>Verification Captcha</th><td><input type="text" name="t5" placeholder=""Captcha id="c1" required></td>
                    <td ><mark><input type="text" id="c2" readonly="true" value="<?php echo rand(10000,30000);?>"/></mark></td>
                         <td id="err1"></td>
                    </tr>
                    
                     <tr><th></th><td><input type= "submit" value ="Register"/></td><td><a href="user.html">Back</a></td><td></td><td><a href="studlog.html">Log In</a></td></tr>
                
                </table>
            
          
        
        </form>
    
    </fieldset>
    </center>  
</body>

</html>