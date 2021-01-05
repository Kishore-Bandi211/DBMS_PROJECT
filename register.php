<?php
session_start();


include('database.inc.php');
include('function.inc.php');


if (isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$Dno=$_POST['D-no'];
$street=$_POST['street'];
$city=$_POST['city'];
$country=$_POST['country'];
$pincode=$_POST['pincode'];
$category="bronze";


$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
$sql = "INSERT INTO user(`name`,`email`,`mob`,`D-no`,`street`,`city`,`country`,`pincode`,`pw`,`cpw`,`category`) VALUES ('$name', '$email', '$mob', '$Dno', '$street', '$city', '$country','$pincode','$pw', '$cpw','$category');";
	if(mysqli_query($con, $sql))
{  
	$message = "You have been successfully registered";
		echo "<script type='text/javascript'>alert('$message');</script>";

	 redirect('login.php');
	
}
else
{  
	$message = "Could not insert record"; 

	echo "<script type='text/javascript'>alert('$message');</script>";
}
	/* $sql1 = "INSERT INTO php_users_login(`email`, `password`) VALUES ('$email', '$pw');";
	if(mysqli_query($conn, $sql1))
	{  
		$message1 = "Added in login table";
	}
	else
	{  
		$message1 = "Could not insert record";
	}	 
	echo "<script type='text/javascript'>alert('$message1');</script>";
*/
}

?>
<HTML>
<HEAD>
<TITLE>Paintings hiring management system</TITLE>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="colorlib-regform-36/css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="colorlib-regform-36/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="colorlib-regform-36/css/style.css"/>
<SCRIPT type="text/javascript">
function validate()
{
	var name=document.getElementById("name");
	var mob=document.getElementById("mob");
	var Dno=document.getElementById("D-no");
	var EmailId=document.getElementById("email");
	var city=document.getElementById("city");
	var country=document.getElementById("country");
    var pincode=document.getElementById("pincode");
	var pw=document.getElementById("pw");
	var cpw=document.getElementById("cpw");
	var alphaExp = /^[a-zA-Z]+$/;
	var atpos = EmailId.value.indexOf("@");
    var dotpos = EmailId.value.lastIndexOf(".");
 	if(pw.value.length< 8 || cpw.value.length< 8)
	{
		alert("Please enter a password of atleast 8 characters");
		pw.focus();
		return false;
	}
	else if (pw.value.length != cpw.value.length) 
	{
		alert("Passwords do not match.");
		pw.focus();
        return false;
    }
	else if (pw.value != cpw.value) 
	{
		alert("Passwords do not match.");
		pw.focus();
        return false;
    }
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
	{
        alert("Enter valid email-ID");
		EmailId.focus();
        return false;
   	}
	
	
	if(name.value==null || name.value=="")
	{
		name.focus();
		alert("Enter valid name");
		return false;
	}
	if(city.value==null || city.value=="")
	{
		city.focus();
		alert("Enter valid city name");
		return false;
	}
	if(country.value==null || country.value=="")
	{
		country.focus();
		alert("Enter valid country name");
		return false;
	}
	if(city.value.match(alphaExp)){}
	else{
		alert("city can have only letters");
		city.focus();
		return false;
	}
	if(country.value.match(alphaExp)){}
	else{
		alert("country can have only letters");
		country.focus();
		return false;
	}
	if(mob.value==null || mob.value==" ")
	{
		alert("Please Enter Mobile Number");
		mob.focus();
		return false;
	}

	if (isNaN(mob.value))
	{
		alert(" Your Mobile Number must be Integers");
		mob.focus();
		return false;
	}
	if((mob.value.length!= 10))
	{
		alert("Enter the valid Mobile Number(Like : 9669666999)");
		mob.focus();
		return false;
	}
	if(pincode.value==null || pincode.value==" ")
	{
		alert("Please Enter pincode");
		pincode.focus();
		return false;
	}
	
	if (isNaN(pincode.value))
	{
		alert(" Your pincode must be Integers");
		pincode.focus();
		return false;
	}
	if((pincode.value.length!= 6))
	{
		alert("Enter the valid pincode(Like : 523247)");
		pincode.focus();
		return false;
	}
	
	
	if (confirm("Do you want to submit your details?") == true) {} 
	else 
	{
       return false;
    }
    var survey=prompt("How did you hear about us? (Used only for survey)");
	return true;
}
</SCRIPT>
</HEAD>


<body class="form-v10">
	
	<div class="page-content">
		
		<div class="form-v10-content">
			<form class="form-detail" action="register.php" method="post" id="myform" onsubmit="return validate()">
			
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
						<input type="text" name="name" id="name" class="input-text" placeholder="Your Name" required>
						
						
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="password" name="pw" id="pw" class="input-text" placeholder="enter password" required>
						</div>
						<div class="form-row form-row-2">
							<input type="password" name="cpw" id="cpw" class="input-text" placeholder="Re enter password" required>
						</div>
					</div>
					
					
					
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="D-no" class="street" id="D-no" placeholder="Door No" required>
					</div>
					<div class="form-row">
						<input type="text" name="street" class="street" id="street" placeholder="Street Name" required>
					</div>
					
						<div class="form-row ">
							<input type="text" name="pincode" class="zip" id="pincode" placeholder="PIN Code" required>
						</div>
						
					
					
					<div class="form-group">
						<div class="form-row form-row-1">
			            		<input type="text" name="city" class="city" id="city" placeholder="City" required>
		
						</div>

						<div class="form-row form-row-2">
					         <input type="text" name="country" class="country" id="country" placeholder="Country" required>


						</div>
					</div>
					<div class="form-row">
										<input type="text" name="mob" class="phone" id="mob" placeholder="Phone Number" required>

					</div>
					<div class="form-row" >
							<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
                    </div>
					
					<div class="form-row-last">
						<input type="submit" name="submit" class="register" value="Submit ">
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>