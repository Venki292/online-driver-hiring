<?php
include"dbconfig.php";
if(isset($_REQUEST['Login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	$valid=true;
	$query="select * from admin_details where username='$email' and password='$password'";
	if($valid)
	{
	
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		// while($data=mysqli_fetch_array($login_data))
		// {
		// extract($data);
		
		// }
		
		// $_SESSION['id']=$reg_id;
		// header("location:mybooking.php");
		// 	}
       
        include"admin_show.php";
		
    }
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	}
    
  ?>