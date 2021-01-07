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
       <h1>Sell List</h1>
    </center>
    <table border="1" align="center">
        <tr>
            <th width="200" height="50">Book Name</th>
            <th width="200" height="50">Book ID</th>
            <th width="200" height="50">Name Of Purchaser</th>
             <th width="200" height="50">Address/th>
            <th width="200" height="50">City</th>
            <th width="200" height="50">Mobile no.</th>
             <th width="200" height="50">E-mail</th>
            <th width="200" height="50">Pincode</th>

        </tr>
        <?php
        $q="select * from sell";
        $run=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($run))
        {
             $bname=$row['bname'];
             $bid=$row['bid'];
             $name1=$row['name1'];
             $add1=$row['add1'];
             $city=$row['city'];
             $mno=$row['mno'];
             $email=$row['email'];
             $pin=$row['pin'];
         
       ?>
        <tr>
        <td width="200" height="50"><center><?php echo $bname ?></center></td>
         <td width="200" height="50"><center><?php echo $bid ?></center></td>
          <td width="200" height="50"><center><?php echo $name1 ?></center></td>
          <td width="200" height="50"><center><?php echo $add1 ?></center></td>
         <td width="200" height="50"><center><?php echo $city ?></center></td>
          <td width="200" height="50"><center><?php echo $mno ?></center></td>
          <td width="200" height="50"><center><?php echo $email ?></center></td>
         <td width="200" height="50"><center><?php echo $pin ?></center></td>
    </tr>
           <?php
            } 
           ?>
  

    </table>
  <div id="footer"><br><br><br><br><br><br><br>
    <h1 style="margin-top: 300px; color: yellow" align="center">Library Management Project</h1>
  </div>
</body>
</html>

