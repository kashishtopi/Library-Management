<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>	
<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body style="background-image: url('img/i3.jpg');">
	<div id="header">
		<h1 style="padding: 10px;color: red"><center><font face="Comic Sans MS">The Readers Plan</font></center></h1>

	</div>
	<div id="nav">
		<ul>
			<li><b><a href="index.php">Home</a></b></li>
			<li><b><a href="trb.php">Top Rated Books</a></b></li>
			<li><b><a href="content.php">Content</a></b></li>
			<li><b><a href="about.php">About Us</a></b></li>
			<li><b><a href="help.php">Help</a></b></li>
		</ul>
	</div>
     <div id="container">
        <div id="left"><br><br><br><br>
	   	
	    <?php 
        $c="Biography";
        $q="select * from book where cat like '%$c%'";
        $run=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($run))
        {
       		 $id=$row['id'];
             $name=$row['name'];
              $price=$row['price'];
               $img=$row['img'];
        ?>
        <div id="a"><center><?php echo "<a href='p2.php?id=$id'><img src='im/$img'></a>";?></center></div> 
        <?php
    }
    ?>
       </div>
   </div>

   <div id="right">
    	<h1 style="color: red">Category:</h1><br>
        <a href="romantic.php"> <b style="color: blue">Romantic</b></a><br><br><br><br>
        <a href="horror.php"> <b style="color: blue">Horror</b></a><br><br><br><br>
        <a href="biography.php"> <b style="color: blue">Biography</b></a><br><br><br><br>
        <a href="suspense.php"> <b style="color: blue">Suspense</b></a><br><br><br><br>
        <a href="detective.php"> <b style="color: blue">Detective</b></a><br><br><br><br>
        <a href="scientific.php"> <b style="color: blue">Scientific</b></a><br><br><br><br>
    </div>
	</div>

	<div id="footer"><br><br><br><br><br><br><br>
		<h1 style="margin-top: 300px; color: yellow" align="center"></h1>
	</div>
</body>
</html>