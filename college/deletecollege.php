<!doctype html>
<title>engineering admission predictor</title>
<head>
<table background="images\216.jpg"><link rel="stylesheet" type="text/css" href="style.css" media="all">
<tr><td colspan=2><img src="images\2.jpg" height=20 width=1300></td></tr>
<tr>
<td><p class="head1"><a href="front.php"><img src="images\logo.png" width="210" height="210"></a></p></td>
<td><p class="head"><left><img src="images\8.jpg" height=190 width=900></p></td>
</tr>
<tr><td colspan=2><img src="images\2.jpg" height=20 width=1300></td></tr></table>
</head>
<table border="3px solid" width=1300  style="border-collapse:collapse">
<tr><td><center><b><a STYLE="text-decoration:none;color:azure;" href="administrator.php"><div class="dropdown">
  Add college
  
</div></b></td><td><center><b><a STYLE="text-decoration:none;color:azure;" href="administrator.php"><div class="dropdown">
  Add cutoff marks
</div></b></td>
<td><center><b><a STYLE="text-decoration:none;color:azure;"  href="viewcollege.php">view college</a>
</b></td></p>
<td><center><b><font color=azure><a STYLE="text-decoration:none;color:azure;"  href="viewfeedback.php">view feedback</a>
</b></td></p>
<td><center><b><a STYLE="text-decoration:none;color:azure;" href="home.php">Log out</a>
</b></td></p>
</tr>
</table>
<body background="images\00.jpg" style="background-size:cover;">
<center>
<table border="3px solid" width=1300  style="border-collapse:collapse">
<tr><td><center><b><a STYLE="text-decoration:none;color:azure;" href="viewcollege.php"><div class="dropdown">
  college details
  
</div></b></td><td><center><b><a STYLE="text-decoration:none;color:azure;" href="deletecollege.php"><div class="dropdown">
  delete college
</div></b></td>

</tr>
</table>
<h1>delete college</h1>
<h2>search by name </h2><br><input type="text" name="name"><br>
<button type="submit" class="signupbtn">Delete</button>
<?php
 if(isset($_POST['submit'])){
 if(isset($_GET['go'])){
 if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
 $name=$_POST['name'];
 //connect to the database
 $db=@mysql_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
 //-select the database to use
 $mydb=mysql_select_db("college");
 //-query the database table
 if($name !=''){
 $query = mysql_query("DELETE * FROM add_college WHERE collegename LIKE '%" . $name . "%'");
 echo '<script language="javascript">';
  echo 'alert(data successfully deleted)';  //not showing an alert box.
  echo '</script>';
 }
 else
 {
	echo '<script language="javascript">';
  echo 'alert(enter the field)';  //not showing an alert box.
  echo '</script>';
 }
 }
 }
 }
//$check=$_POST['submit'];
mysql_close($db);  
?> 
</body>
</html>
