 
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
<tr><td><center><b><a STYLE="text-decoration:none;color:azure;" href="studentdetails.php">
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
<h2>view colleges</h2>
<b>Search by cutoff:
<select class ="dropbtn", name="cutoff">
<option value="20">20</option>
<option value="30">30</option>
<option value="20">40</option>
<option value="30">50</option>
<option value="20">70</option>
<option value="30">80</option>
</select>

search by stream:  <select class ="dropbtn", name="stream">
<option value="IT">IT</option>
<option value="CSE">CSE</option>
<option value="EE">EE</option>
<option value="ECE">ECE</option>
</select><br>
<button type="submit" class="submit" name="submit">  submit   </button>
<?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("college", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$cutoff = $_POST['cutoff'];
$stream = $_POST['stream'];
if($cutoff!=''||$stream!=''){
//Insert Query of SQL
$query = mysql_query("SELECT college from cutoff where cutoff='$cutoff' && stream='$stream'");
echo "<table border='1' style='border-collapse: collapse;' height=200 width=900>"; 
while ($row = mysql_fetch_array($query)) {
echo "<tr><td><font color=black><center> ".$row['college name']."</td></tr>";
}
echo "</table>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>
