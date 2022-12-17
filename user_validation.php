<?php
include"dbconfig.php";
if(isset($_REQUEST['Login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from user_register where email='$email' and password='$password'";
	
	
	if($valid)
	{
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['id1']=$reg_id;
		header("location:index1.php");
			}
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	}
    
  ?>