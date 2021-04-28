<?php include('partials/menu.php'); 

 $gender ="";
     $user ="";
     ?>
     <?php
   
    if(isset($_SESSION['flag'])){
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
            {
                echo $_SESSION['add']; //Display the SEssion Message if SEt
                unset($_SESSION['add']); //Remove Session Message
            }
        ?>
<h2 style="color: #2691d9;" id="head"></h2>
            <br>
    <h3 id="6"></h3>
    <h3 id="7"></h3>
    <h3 id="8"></h3>
        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Name: </td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Enter Your Name"value="" onkeyup="f1()" onclick="f1()">
             <?php
                    if (isset($error))                      
                    {echo $error ;}
                    ?><br>
                    </td>
                </tr>

                <tr>
                    <td>ID: </td>
                    <td>
                        <input type="text" id="id" name="id" placeholder="Your ID"value="" onkeyup="f6()" onclick="f6()">
            <?php
                    if (isset($error7))                     
                    {echo $error7 ;}
                    ?><br>
                    </td>
                </tr>
                 <tr>
                    <td>Email: </td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="Your Email"value="" onkeyup="f2()" onclick="f2()"> 
             <?php
                    if (isset($error1))                     
                    {echo $error1 ;}
                    ?><br>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" id="pass" name="password" placeholder="Your Password"value="" onkeyup="f7()" onclick="f7()">
            <?php
                    if (isset($error3))                     
                    {echo $error3 ;}
                    ?><br>
                    </td>
                </tr>

                    <tr>
                    <td>Gender: </td>
                    <td>
                        <input type="radio" id="m"  name="gender" value="Male" onkeyup="f3()" onclick="f3()" <?php if($gender =="Male")
        {echo "checked";}?>><label>Male </label> 
                <input type="radio" id="f" name="gender" value="Female" onkeyup="f3()" onclick="f3()" <?php if($gender =="Female")
        {echo "checked";}?>><label>Female </label>
                <input type="radio" id="o" name="gender" value="Other" onkeyup="f3()" onclick="f3()" <?php if($gender =="Others")
        {echo "checked";}?>> <label>Others </label>
                    </td>
                </tr>
                  <tr>
                    <td>Date of Birth: </td>
                    <td>
                         <input type="DATE" id="dob" name="dob" value="" onkeyup="f4()" onclick="f4()">
              <i>(dd/mm/yyyy)</i>
              <?php
                    if (isset($error5))                     
                    {echo $error5 ;}?>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
               <script type="text/javascript" src="../JS/script.js"></script>
            </table>

        </form>


    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php 
     require_once('../model/usersService.php');

    
    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password']; //Password Encryption with MD5
        $gender = $_POST['gender'];
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
          
        elseif(strlen($name)<5)
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

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO registration SET 
            name='$name',
            id='$id',
            email='$email',
            password='$password',
            gender='$gender',
            dob='$dob'
        ";
 
        $res = mysqli_query($conn, $sql);
      if($res==true)
    {

        $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
        //Redirect to Manage Admin Page
        header('location:manage-admin.php');
    }
    else
    {
        //Failed to Delete Admin
        //echo "Failed to Delete Admin";

        $_SESSION['add'] = "<div class='error'>Failed to Add Admin. Try Again Later.</div>";
        header('location:manage-admin.php');
    }

    }
}
    
?>
 <?php

    }else{
        header('location:../view/login.php?msg=login_first');
    }

?>


