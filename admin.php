<!-- <html>
<head>
<style>
div{
margin:20px;
}
label{
margin-top:10px;
float:left;
margin-left:20%;
}
input{
margin-top:10px;
float:right;
margin-right:15%;
}
</style>
</head>
<body>
<center>
<div style='width:50%;height:max-content;border:2px solid red;'>
    <h3>Admin Login Form</h3>
    <label>Username</label>
    <input type='text' placeholder="Username" id='username'/><br/><br/>
    <label>Password</label>
    <input type='password'  placeholder="Password" id='password'/><br/><br/><br/>
    <button type='submit'>Submit</button><br/><br/>
    </div>
</center>
</body>
</html> -->


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
    <title>Listing &amp; Directory Website Template</title>
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
    <!-- <?php include "nav.php";?></br></br></br> -->
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
                                    <h2 style="font-weight:bold;color:#FF2F6D ; text-shadow: 2px 2px 4px #000000; text-shadow: 2px 2px 5px white;">Admin Login</h2>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section></br></br></br></br>
    <center>
    <div class="container">
	<div class="row">
	<div class="col-lg-12" >
	<form action="admin_details.php" method="post">
	<input type="text" class="form-control col-lg-5" name="email" required="required" placeholder="Username"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="password" class="form-control col-lg-5" name="password" required="required" placeholder="Password"></br>
    <input type="submit" class="btn btn-danger" name="Login" value="Login">
    </form>
	</div>
	</div>
	</div>
    </center>
</body>
</html>