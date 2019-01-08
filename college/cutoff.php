 <?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("college", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$selectcollege = $_POST['college'];
$stream= $_POST['stream'];
$year= $_POST['year'];
$contact=$_POST['contact'];
$cutoff= $_POST['cutoff'];
if($selectcollege!=''||$stream!=''||$year!=''||$contact!=''||$cutoff!=''){
//Insert Query of SQL
$query = mysql_query("insert into cutoff(college,stream,year,contact,cutoff) values ('$selectcollege','$stream','$year',$contact,'$cutoff')");
echo "<br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
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
<td><center><b><font color=azure><a STYLE="text-decoration:none;color:azure;" href="viewfeedback.php">view feedback</a>
</b></td></p>
<td><center><b><a STYLE="text-decoration:none;color:azure;" href="home.php">Log out</a>
</b></td></p>
</tr>
</table>
<body background="images\00.jpg" style="background-size:cover;">
<center>
<h2>Add cutoff marks</h2>
<form action="cutoff.php" method="post">
<h4> select college : 
<select class ="dropbtn", name="college">
<option value="bppimt">bppimt</option>
<option value="nsit">nsit</option>
<option value="iem">iem</option>
<option value="uem">uem</option>
</select>
<br>
year: 
<select class ="dropbtn", name="year">
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
</select>
<br>
stream: 
<select class ="dropbtn",name="stream">
<option value="CSE">CSE</option>
<option value="IT">IT</option>
<option value="ECE">ECE</option>
<option value="EE">EE</option>
</select>
<br>
Contact no:<input type="text" name="contact"><br>
cutoff:<input type="text" name="cutoff"><br>
<button type="submit" class="cancelbtn">Cancel</button>
<button type="submit" class="submit" name="submit">Add College</button><br></font>
</form>
</body>
</html>
