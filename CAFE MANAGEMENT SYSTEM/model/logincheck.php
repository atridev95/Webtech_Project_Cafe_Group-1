<?php
	//session_start();
	require_once('../model/usersService.php');
	session_start();

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		
		if(empty($id) || empty($password)){
	
			header('location: ../view/login.php?msg=null');
		}else{

			if(!empty($id) || !empty($password)){
				//$flag = true;
				$_SESSION['flag'] = "true";
				$_SESSION['name'] = $name;
				$_SESSION['email'] =$email;
				$_SESSION['id'] =$id;
				$_SESSION['password'] =$password;
		        $_SESSION['gender'] =$gender;
		        $_SESSION['dob'] = $dob ;
		      
				header('location: ../controler/index.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	?>	