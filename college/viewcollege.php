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
  
</div></b></td><td><center><b><a STYLE="text-decoration:none;color:azure;" href="cutoff.php"><div class="dropdown">
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
<h1>college details</h1>
<form method="post"  action="viewcollege.php?go"  id="searchform">
<h2>search by name </h2><br><input type="text" name="name"><br>
<button type="submit" class="signupbtn", name="submit">search</button></form>
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
 $query = mysql_query("SELECT * FROM add_college WHERE collegename LIKE '%" . $name . "%'");
 $result=mysql_query($query);
echo "<table border='1' style='border-collapse: collapse;' height=200 width=900>"; 
echo "<th><font color=white> collegename </th><th><font color=white> address </th><th><font color=white> city </th>
<th><font color=white> zipcode</th><th><font color=white> contactno </th><th><font color=white> stream </th>";
while ($row = mysql_fetch_array($query))   
{  
echo "<tr><td><font color=white><center> ".$row['collegename']."</td>
<td><font color=white><center> ".$row['address']."</td>
<td><font color=white><center> ".$row['city']."</td>
<td><font color=white><center> ".$row['zipcode']."</td>
<td><font color=white><center> ".$row['contactno']."</td>
<td><font color=white><center> ".$row['stream']."</td>
</tr>";
}
 }
 }
 }
echo "</table>";
//$check=$_POST['submit'];
mysql_close($db);  
?> 
</body>
</html>
