
<?php 
    include('../model/config.php');

    $id = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'cafe');
    $sql = "delete from registration where id = '$id'";
    $res = mysqli_query($conn, $sql);
      if($res==true)
    {

        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
        //Redirect to Manage Admin Page
        header('location:manage-admin.php');
    }
    else
    {
        //Failed to Delete Admin
        //echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
        header('location:manage-admin.php');
    }

