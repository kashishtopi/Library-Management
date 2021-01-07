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
	   	
	   	<br>
        <?php 
        $c=$_GET['id'];
        $q="select * from book where id like '%$c%'";
        $run=mysqli_query($link,$q);
        $row=mysqli_fetch_array($run);
        
        $id=$row['id'];
        $bname=$row['name'];
        $price=$row['price'];
        $img=$row['img'];
        ?>
        <div id="a">
            
        <?php echo "<a href='p.php?id=$id'><img src='im/$img'></a>";?><br>
        <h3> <font color="red">Name:</font><?php echo $bname ?><br>
            <font color="red">Price:</font><?php echo $price ?></h3>
            <form action="" method="post">
            <table>
                <tr>
                    <td width="200" height="50">Name </td>
                    <td width="200" height="50"><input type="text" name="name" placeholder="Enter Name" title="Enter Name"></td>
                </tr>
                <tr>
                    <td width="200" height="50">Address </td>
                    <td width="200" height="50"><input type="text" name="add" placeholder="Enter Address" title="Enter Address"></td>
                </tr>
                <tr>
                    <td width="200" height="50">City </td>
                    <td width="200" height="50"><input type="text" name="city" placeholder="Enter City" title="Enter City"></td>
                </tr>
                <tr>
                    <td width="200" height="50">Mobile Number </td>
                    <td width="200" height="50"><input type="text" name="mno" placeholder="Enter Mobile Number" title="Enter Mobile Number"></td>
                </tr>
                <tr>
                    <td width="200" height="50">E-mail </td>
                    <td width="200" height="50"><input type="text" name="email" placeholder="Enter E-mail" title="Enter E-mail"></td>
                </tr>
                 <tr>
                    <td width="200" height="50">Pincode </td>
                    <td width="200" height="50"><input type="text" name="pcode" placeholder="Enter Pincode" title="Enter Pincode"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="Buy Now" style="width: 100px;height: 50px;padding: 5px;background-color: red;border-radius: 10px;">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['sub']))
        {
           $name1=$_POST['name'];
           $add1=$_POST['add'];
           $city=$_POST['city'];
           $mno=$_POST['mno'];
           $email=$_POST['email'];
           $pcode=$_POST['pcode'];
           
           if(mysqli_query($link,"insert into sell(bname,bid,name1,city,add1,mno,email,pin) values('$bname','$id','$name1','$city','$add1','$mno','$email','$pcode')"))
          {
            mysqli_query($link,"delete from book where id=$id");
            echo "<script>alert('Data Insert')</script>";
           }

           else
             {
            echo "<script>alert('Data Not Insert')</script>";
             }
        }
        ?>



      
        </div> 
        <?php
    ?>


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

	<div id="footer"><br><br><br><br><br><br><br><br><br><br><br>
		<h1 style="margin-top: 300px; color: yellow" align="center"></h1>
	</div>
</body>
</html>