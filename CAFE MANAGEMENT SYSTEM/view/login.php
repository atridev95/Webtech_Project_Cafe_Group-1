<?php include('../model/menu.php'); ?>
<?php

    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == 'null'){
            echo "null submission...";
        }

        if($_REQUEST['msg'] == 'invalid'){
            echo "invalid username/password";
        }

        if($_REQUEST['msg'] == 'login_first'){
            echo "please login first...";
        }
    }
?>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="../css/registration.css">
    </head>
    <body>
        <div class="cafe">
            <div class="form-box">  
                
            
            <form method="POST" class="input-group" action="../model/logincheck.php">
           
<fieldset>
            <h2 style="color: #2691d9;" align="center">Log In</h2>
            <div class="button-box">  
                <div class="social-icons">
                    <img src="../assets/fb.png">
                    <img src="../assets/google.jpg">
                    <img src="../assets/twt.png">
            </div>
           <h2 style="color: #2691d9;" id="head"></h2>
            <br>
            <div class="txt_field">
            <input type="text" id="id" name="id" placeholder="Enter your User ID" value="" onkeyup="f6()" onclick="f6()">
           
            <span></span>
             <label>User ID</label>
            </div>
              <div class="txt_field">
             <input type="Password" id="pass"  name="password" placeholder="Enter Password" value="" onkeyup="f7()" onclick="f7()">
            <?php
                    if (isset($error1))                     
                    {echo $error1 ;}
                    ?>
                    <br/>
            <span></span>
             <label>Password</label>
            </div>
       <?php
                    if (isset($error2))                     
                    {echo $error2;}
                    ?>
                    <br/>
                <input type="submit" class="submit-btn" name="submit" value="Log in">
                 <br>
                <b>Not yet a member?<a href="../view/registration.php">Sign Up</a></b>
      </fieldset>
  <script type="text/javascript" src="../JS/script.js"></script>
 
</form>

            </div>
           
        </div>
    </body>
</html>
