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
<tr><td><center><b><a STYLE="text-decoration:none;color:azure;" href="profile.php">

  edit your profile
  
</b></td>

<td><center><b><a STYLE="text-decoration:none;color:azure;" href="studentdetails.php">

  view profile
  
</b></td>

<td><center><b><a STYLE="text-decoration:none;color:azure;"  href="studentcollege.php">view college </a>
</b></td></p>
<td><center><b><font color=azure><a STYLE="text-decoration:none;color:azure;"  href="feedback.php">feedback</a>
</b></td></p>
<td><center><b><a STYLE="text-decoration:none;color:azure;" href="home.php">Log out</a>
</b></td></p>
</tr>
</table>
<body background="images\00.jpg" style="background-size:cover;">
<center>
<h2>viewprofile</h2>
<?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("college", $connection); // Selecting Database from Server
//Insert Query of SQL
$query = mysql_query("SELECT * from student");
echo "<table border='1' style='border-collapse: collapse;' height=200 width=500>"; 

while ($column = mysql_fetch_array($query))   
{  
echo "<tr><td><font color=black>student id:    ".$column['studentid']."</td></tr>
<tr><td><font color=black> studentname:   ".$column['studentname']."</td></tr>
<tr><td><font color=black> dob:    ".$column['dob']."</td></tr>
<tr><td><font color=black> emailid:   ".$column['emailid']."</td></tr>
<tr><td><font color=black> contactno:    ".$column['contactno']."</td></tr>
<tr><td><font color=black> stream :    ".$column['stream']."</td></tr>
<tr><td><font color=black> marks:   ".$column['marks']."</td></tr>";

}

echo "</table>";
//$check=$_POST['submit'];
if(isset($_POST['submit'])) 
{
	$query=mysql_query("insert into canteen..order_delivered from canteen..addfood");
}
mysql_close($connection);  
?> 
</body>
</html>
