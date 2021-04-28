<?php include('../model/menu.php'); ?>
  <?php
    require_once('../model/usersService.php');

     $gender ="";
     $user ="";
    if (isset($_REQUEST['submit'])){

   
          $name = $_POST['name'];
          $id = $_POST['id'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $gender = $_POST["gender"];
          $dob = $_POST['dob'];
          $error = "";
          $error1 = "";
          $error2 = "";
          $error3 = "";
          $error4 = "";
          $error5 = "";
          $error6 = "";
          $error7 = "";

        if(empty($name))
        {
            $error .="Name is required!";
            
        }
          
        elseif(strlen($name)<=5)
            {
             $error .="Length is too Short!";
            
            }   
        elseif(!preg_match("/^[a-zA-Z- ]*$/",$name))
         {
              $error .="Please Enter Name as String and start with a letter";
         }

         if(empty($email))
        {
            $error1 .="Please enter your email!";
            
        }


        elseif (!preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",$email))
        {
            $error1 .=" Please Enter Valid Email Address";
        }

        if(empty($id))
        {
            $error7 .="Please enter your User ID!";
            
        }
        elseif (!preg_match("/^([0-9\.]+-+[0-9]+-+[0-9])$/",$id))
        {
            $error7 .=" Please Enter Valid User ID";
        }
        elseif(strlen($id)!=10)
        {
            $error7 .= "Invalid User Id";
        }

        if(empty($password))
        {
            $error3 .="Password is required!";
            
        }
        elseif(!preg_match("/^([A-Z\.]+[a-z]+[0-9]+[%$&])$/",$password)|| strlen($password)!=5)
        {
            $error3 .="Not a valid Password!";
            
        }
       else{
        $user = [
                'name' => $name,
                'email'=>$email,
                'id' => $id,
                'password'=> $password,
                'gender' => $gender,
                'dob' => $dob

                
            ];

    registration($user);
    echo "Registration Done !";
    echo "You can Login Now !!";
}
}
?>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="../css/registration.css">
    </head>
    <body>
        <div class="cafe">
            <div class="form-box">  
            
            <form method="POST" class="input-group" >
           
<fieldset>
            <h2 style="color: #2691d9;" align="center">REGISTRATION</h2>
            <div class="button-box">  
                <div class="social-icons">
                    <img src="../assets/fb.png">
                    <img src="../assets/google.jpg">
                    <img src="../assets/twt.png">
            </div>
            <h2 style="color: #2691d9;" id="head"></h2>
            <br>
    <h3 id="6"></h3>
    <h3 id="7"></h3>
    <h3 id="8"></h3>
            <div class="txt_field">
             <input type="text" id="name" name="name" placeholder="Enter your Name" value="" onkeyup="f1()" onclick="f1()">
             <?php
                    if (isset($error))                      
                    {echo $error ;}
                    ?><br>
             <span></span>
             <label>Name</label>
            </div>
           <div class="txt_field">
             <input type="email" id="email" name="email" placeholder="Enter your Email" value="" onkeyup="f2()" onclick="f2()"> 
             <?php
                    if (isset($error1))                     
                    {echo $error1 ;}
                    ?><br>
            <span></span>
            <label>Email</label>
            </div>
            <div class="txt_field">
            <input type="text" id="id" name="id" placeholder="Enter your User ID" value="" onkeyup="f6()" onclick="f6()">
            <?php
                    if (isset($error7))                     
                    {echo $error7 ;}
                    ?><br>
            <span></span>
             <label>User ID</label>
            </div>
              <div class="txt_field">
             <input type="Password" id="pass"  name="password" placeholder="Enter Password" value="" onkeyup="f7()" onclick="f7()">
            <?php
                    if (isset($error3))                     
                    {echo $error3 ;}
                    ?><br>
                    <span></span>
             <label>Password</label>
            </div>
       <fieldset>

               <legend><b><label>GENDER</label></b></legend>
                <input type="radio" id="m" class="txt_field" name="gender" value="Male" onkeyup="f3()" onclick="f3()" <?php if($gender =="Male")
        {echo "checked";}?>><label>Male </label> 
                <input type="radio" id="f" class="txt_field" name="gender" value="Female" onkeyup="f3()" onclick="f3()" <?php if($gender =="Female")
        {echo "checked";}?>><label>Female </label>
                <input type="radio" id="o" class="txt_field" name="gender" value="Other" onkeyup="f3()" onclick="f3()" <?php if($gender =="Others")
        {echo "checked";}?>> <label>Others </label>
        <br>

</fieldset>
           <fieldset>
            <legend><b><label>DATE OF BIRTH</label></b></legend>
           <input type="DATE" id="dob" name="dob" value="" onkeyup="f4()" onclick="f4()">
              <i>(dd/mm/yyyy)</i>
              <?php
                    if (isset($error5))                     
                    {echo $error5 ;}?>
        </fieldset>
        
                <input type="submit" class="submit-btn" name="submit" value="Submit">
                 <br>
                 <b>Already a member?<a href="../view/login.php">Sign In</a></b>
      </fieldset>
      <script type="text/javascript" src="../JS/script.js"></script>
 
</form>

            </div>
           
        </div>

    </body>
</html>
