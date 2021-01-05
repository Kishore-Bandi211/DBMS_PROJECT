<?php
 

session_start();

include('database.inc.php');
include('function.inc.php');


$msg1="";
$msg2="";


if(isset($_POST['submit'])){
	$username=get_safe_value($_POST['username']);
	$password=get_safe_value($_POST['password']);
	
	 $sql="select * from user where email='$username' and pw='$password'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
    $_SESSION['IS_LOGIN']='YES';
    $_SESSION['ADMIN_USER']=$row['name'];
		redirect('shop.php');
	
	}else{
		$msg1="Please enter valid login details";
	}
}


if(isset($_POST['submit1'])){
	$username=get_safe_value($_POST['username']);
	$password=get_safe_value($_POST['password']);
	
	 $sql="select * from artist where email='$username' and pw='$password'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
    $_SESSION['IS_LOGIN']='YES';
    $_SESSION['ADMIN_USER']=$row['name'];
		redirect('artist-home.php');
	
	}else{
		$msg2="Please enter valid login details";
	}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


</head>
<body style="background-image:url(assets/img/logo/bglogin.jpg)">
    

<div class="container login-container" style=" margin-top: 5%;
    margin-bottom: 5%; ">
    <div class="row">
        <div class="col-md-6 login-form-1" style="padding: 9%;
    background:#00bfff;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);">
            <h3 style="  text-align: center;
    margin-bottom:12%;
    color:white;">USER LOGIN</h3>
    <form action="login.php" method="post">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email *"b name="username" value="" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Your Password *"  name="password" value=""  />
            </div>
            <div class="form-group">
                <input type="submit" class="btnSubmit "  value="Login" name="submit" style=" font-weight: 600;width: 50%;color: #282726;background-color: #fff;border: none;border-radius: 1.5rem;padding:2%;" />

            </div>
            <div class="form-group">
                <div class="form-row form-row-2"
                <a href="#" class="btnForgetPwd"  style="color: #fff;
    font-weight: 600;
    text-decoration: none;">Forget Password?</a>
            </div>
<br>
             <div class="form-row form-row-2">
                   <a href="register.php"  value="Login" style=" color:white;
    font-weight: 600;
    text-decoration: none;
" >No account? Register Here</a>
            </div>

</div>
</form>


 <div class="login_msg"><h4 style="color:black"><?php echo $msg1;?></h4></div>

        </div>
        <div class="col-md-6 login-form-2" style=" padding: 9%;
    background: #00ffbf;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);">
            <div class="login-logo" style=" position: relative;
    margin-left: -41.5%;">
            
            </div>
            <h3 style="   text-align: center;
    margin-bottom:12%;
    color:black;">ARTIST LOGIN</h3>
    <form action="login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email *" value="" name="username" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Your Password *" value=""  name="password" />
            </div>
            <div class="form-group">
                <input type="submit"  value="Login" name="submit1" style=" font-weight: 600;
    width: 50%;
    color: #282726;
    background-color: #fff;
    border: none;
    border-radius: 1.5rem;
    padding:2%;" />
            </div>
            <div class="form-group">
                <div class="form-row form-row-1">
                <a href="#" class="btnForgetPwd" value="Login" style=" 
                           color: black;
                           font-weight: 600;
                            text-decoration: none;" >Forget Password?</a>
                 </div>
                 <br>


             <div class="form-row form-row-2">
                   <a href="register_artist.php"  value="Login" style=" color: black;
    font-weight: 600;
    text-decoration: none;
" >No account? Register Here</a>
            </div>
</div>

 
            </form>

             <div class="login_msg"><h4 style="color:navy"><?php echo $msg2;?></h4></div>


        </div>
    </div>
    <div class="row">
        

</div>

</div>
 <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


</body>
</html>


<?php
 include ("footer.php");
?>




