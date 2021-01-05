<?php
include ("artist-header.php");


include('database.inc.php');
include('function.inc.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
          background-image: url(assets/img/nastroeniya-kist-kistochki.jpg);
            
        }
    </style>
</head>
<body >

    <header>
    <FONT size="4" color="blue">
       
    </header>
    <div >
        <div >
            <ul>

<li>            <a>
    <button style="border: none;
              color: white;
              background-color: rgba(4, 3, 20, 0.795);
              padding: 10px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 25px;
              font-style:italic;
              border-radius:100px;
              margin: 20px 50px 50px 0px;
              cursor: pointer;" type="submit" method="post" > <a href="painting-upload.php"  style="color: white;">Painting Upload</a></button>
</a>
</li>
<li>
<a>
    <button style="border: none;
              color: white;
              background-color: rgba(11, 10, 17, 0.863);
              padding: 10px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 25px;
              font-style:italic;
              border-radius:100px;
              margin: 0px 50px 50px 420px;
              
              cursor: pointer;" type="submit" method="post"> <a href="artist-list.php" target="blank" style="color: white;">My Paintings</a></button>
</a>
</li>
<li>
<a>
    <button style="border: none;
              color: white;
              background-color: rgb(0, 255, 21);
              padding: 10px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 25px;
              font-style:italic;
              border-radius:100px;
              margin: 20px 50px 50px 0px;
              cursor: pointer;" type="submit" method="post"><a href="hired_paintings.php" target="blank" style="color: white;">Hired Paintings </a></button>
</a>
</li>
<li>
<a>
    <button style="border: none;
              color: white;
              background-color: rgb(255, 0, 0);
              padding: 10px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 25px;
              font-style:italic;
              border-radius:100px;
              margin: 0px 50px 50px 420px;
              cursor: pointer;" type="submit" method="post"> <a href="not-hired_paintings.php"  target="blank" style="color: white;">Not Hired Paintings </a></button>
</a>
</li>
</ul>
        </div>
        
    </div>

    
</body>
</html>


<?php
 include("footer.php");
?>







