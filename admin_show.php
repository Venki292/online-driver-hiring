<?php
$value="pending";
$cid=mysqli_connect("localhost","root","","testing") or die("connection error");
$query="SELECT * FROM driver_register";
$result=mysqli_query($cid,$query);
mysqli_close($cid);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>admin_show</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
	  
 
</head>


<body>
    <!--============================= HEADER =============================-->
    <?php include "nav.php";?></br></br></br>
    <!-- SLIDER -->
    <section class=" d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <div class="alert alert-info">
                                    <h3 style="font-weight:bold;color:#FF2F6D ; text-shadow: 2px 2px 4px #000000; text-shadow: 2px 2px 5px white;">Welcome Admin</h3>
								</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="logout.php"><div style="margin-left:30px"><button class="btn btn-danger">Logout</button></div></a>
    <div class="container-fluid">
	<div class="blank-page" id="display">
	<div class="row">
	<div class="col-lg-12" >
	<div class="col-lg-12" >
	<table class="table table-hover">
	<tr style="font-weight:bold">
	<td>Name</td>
	<td>Country</td>
	<td>mobile</td>
    <td>License</td>
	<td>status</td>
    <td>options</td>
	</tr>
    <?php
    while($r=mysqli_fetch_array($result))
	{
		extract($r);
	?>
    <tr >
        <td><?=$name?></td>
        <td><?=$country?></td>
        <td><?=$mobile?></td>
        <td><a href='images/<?=$image?>'>License_of_driver</a></td>
        <td><?=$status?></td>
    
        
		<?php 
        echo "<td>
        <a href=\"approve.php?reg_id=$r[reg_id]\"  
					onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> |
					<a href=\"cancel.php?reg_id=$r[reg_id]\" 
					onClick=\"return confirm('Are you sure you want to Canel the request?')\">Cancel</a> </td>"
        ?>
    </tr>
   <?php
    }
    ?>

</table>
	</div>
	</div>
</div>
	</div>
	</div>
    </body>
    </html>	
	