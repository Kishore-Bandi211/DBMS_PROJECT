
<HTML>
<HEAD>
<TITLE>Masterpieces Ltd.</TITLE>

<meta charset="UTF-8">
</HEAD>

<BODY background="background8.jpeg" >
<?php include("header.php");
if(isset($_POST['submit'])){
  redirect('register.php');
}
?>
<div >
<h1 align="center" style="color:white;font-size:40px;"><i> WELCOME TO PAINTING HIRING MANAGEMENT SYSTEM </i> </h1>
</div>
<img  style= "background-color: red;
  
width: 25%;
  margin: 50px 50px 0px 200px;
  
  color: GhostWhite;
  font-family: Verdana, Geneva, sans-serif;" src="pexels-andrea-piacquadio-935760.jpg" width="100" height="400" align="left">

<img  style= "background-color: red;
  
width: 25%;
  margin: 50px 200px 0px 200px;
  
  color: GhostWhite;
  font-family: Verdana, Geneva, sans-serif;" src="pexels-daian-gan-102127.jpg" width="100" height="400" align="right">
    <a href="register.php" >

    <button  style="border: none;
  color: white;
  background-color: red;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  font-style:italic;
  margin: 20px 50px 150px 250px;
  border-radius:100px;
  cursor: pointer;" type="submit"  name="submit" method="post" > Enter as Customer</button>
</a>

    <a href="register.php" >

<button  style="border: none;
  color: white;
  background-color: red;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  font-style:italic;
  border-radius:100px;

  margin: 20px 50px 150px 420px;
  cursor: pointer;" type="submit" method="post"  > Enter as Artist</button>
</a>


    
<FONT size="5" color="blue">

<FOOTER >
<FONT size="2" color="blue">
</FOOTER>

</BODY>
</HTML>
