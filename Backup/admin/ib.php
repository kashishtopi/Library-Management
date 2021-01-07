<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>	
<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body style="background-image: url('img/i4.jpg');">
	<div id="header">
		<h1 style="padding: 10px;color: red"><center><font face="Comic Sans MS">The Readers Plan</font></center></h1>

	</div>
	<div id="nav">
		<ul>
			<li><b><a href="ahome.php">Home</a></b></li>
			<li><b><a href="ib.php">Insert Book</a></b></li>
			<li><b><a href="bl.php">Book List</a></b></li>
			<li><b><a href="sb.php">Sell Book</a></b></li>
			<li><b><a href="help.php">Help</a></b></li>
		</ul>
	</div>
     <div id="container">
        <br><br><br><center>  
         <form action="" method="post" enctype="multipart/form-data">
     	<table>
     		<tr>
     			<td width="200px" height="50px">Enter Book Name</td>
     			<td width="200px" height="50px"><input type="text" name="bname" placeholder="Enter Book Name"></td>
     		</tr>

     		<tr>
     			<td width="200px" height="50px">Enter Book Price</td>
     			<td width="200px" height="50px"><input type="text" name="price" placeholder="Enter Book Price"></td>
     		</tr>

     		<tr>
     			<td width="200px" height="50px">Enter Book Category</td>
     			<td width="200px" height="50px">
     				<select name="cat">
     					<option>----Select----</option>
     					<option>Romantic</option>
     					<option>Horror</option>
     					<option>Biography</option>
     					<option>Suspense</option>
     					<option>Detective</option>
     					<option>Scientific</option>
     				</select>
                 </td>
     		</tr>

     		<tr>
     			<td width="200px" height="50px">Enter Book Image</td>
     			<td width="200px" height="50px"><input type="file" name="img"></td>
     		</tr>

     		<tr>
     			<td>
     				<input type="submit" name="sub" value="save">
     			</td>
     		</tr>

     	</table>

    </form>
    <?php
    if(isset($_POST['sub']))
    {
    	$name=$_POST['bname'];
    	$price=$_POST['price'];
    	$cat=$_POST['cat'];
    	$image=$_FILES['img']['name'];
    	$image_tmp=$_FILES['img']['tmp_name'];
    	move_uploaded_file($image_tmp,"../im/$image");
    	if(mysqli_query($link,"insert into book(name,cat,price,img) values('$name','$cat','$price','$image')"))
    	{
    		echo "<script>alert('Data Inserted')</script>";
    	}
    	else
    	{
    		echo "<script>alert('Data NOT Inserted')</script>";
    	}
    }
    ?> 
    </center>
	<div id="footer"><br><br><br><br><br><br><br>
		<h1 style="margin-top: 300px; color: yellow" align="center">Library Management Project</h1>
	</div>
</body>
</html>

