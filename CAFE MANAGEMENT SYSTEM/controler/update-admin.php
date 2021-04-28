<?php include('partials/menu.php'); ?>
<?php
   
    if(isset($_SESSION['flag'])){
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>

        <br><br>
       <?php 
            if(isset($_GET['id']))
            {
            $id = $_GET['id'];
            $gender="";
            $dob="";

             $sql = "SELECT * FROM registration where id = '$id'";
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            if($count>0)
                            {
                                //WE HAve data in database
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                     $name = $rows['name'];
                                     $id = $rows['id'];
                                     $email = $rows['email'];
                                     $gender = $rows["gender"];
                                     $dob = $rows['dob'];
                                 }
                           }
                       }
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
                        <input type="text" id="name" name="name" value="<?php echo $name; ?>" onkeyup="f1()" onclick="f1()">
                    </td>
                </tr>

                <tr>
                    <td>ID: </td>
                    <td>
                        <input type="text" id="id" name="id" value="<?php echo $id; ?>" onkeyup="f6()" onclick="f6()">
                    </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="email" id="email" name="email" value="<?php echo $email; ?>" onkeyup="f2()" onclick="f2()">
                    </td>
                </tr>
               
                <tr>
                    <td>Gender: </td>
                    <td>
                       <input <?php if($gender=="Male"){echo "checked";} ?> type="radio" id="m" name="gender" value="Male" onkeyup="f3()" onclick="f3()"> Male 

                        <input <?php if($gender=="Female"){echo "checked";} ?> type="radio" id="n" name="gender" value="Female" onkeyup="f3()" onclick="f3()"> Female 
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth: </td>
                    <td>
                        <input type="Date" id="dob" name="dob" value="<?php echo $dob; ?>" onkeyup="f4()" onclick="f4()">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>
                <script type="text/javascript" src="../JS/script.js"></script>

            </table>

        </form>
    </div>
</div>
<?php 

    //Check whether the Submit Button is Clicked or not
    if(isset($_POST['submit']))
    {
        //echo "Button CLicked";
        //Get all the values from form to update
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        //Create a SQL Query to Update Admin
        $sql = "UPDATE registration SET
        name = '$name',
        email = '$email',
        id = '$id',
        password = '$password',
        gender = '$gender',
       dob = '$dob'
        WHERE id='$id'
        ";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the query executed successfully or not
        if($res==true)
        {
            //Query Executed and Admin Updated
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
            //Redirect to Manage Admin Page
            header('location:manage-admin.php');
        }
        else
        {
            //Failed to Update Admin
            $_SESSION['update'] = "<div class='error'>Failed to update Admin.</div>";
            //Redirect to Manage Admin Page
            header('location:manage-admin.php');
        }
    }

?>

<?php include('partials/footer.php'); ?>
 <?php

    }else{
        header('location:../view/login.php?msg=login_first');
    }

?>