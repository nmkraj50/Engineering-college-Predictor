 <?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("college", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$studentid = $_POST['studentid'];
$studentname = $_POST['studentname'];
$dob = $_POST['dob'];
$emailid = $_POST['emailid'];
$contactno= $_POST['contactno'];
$stream = $_POST['stream'];
$marks= $_POST['marks'];
if($studentid!=''||$studentname!=''||$dob!=''||$emailid!=''||$contactno!=''||$stream!=''||$marks!=''){
//Insert Query of SQL
$query = mysql_query("insert into student(studentid,studentname,dob,emailid,contactno,stream,marks) values ('$studentid','$studentname','$dob','$emailid','$contactno','$stream','$marks')");
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
<h2>edit your profile</h2>
<form action="profile.php" method="post">
<h4> student id:<input type="text" name="studentid"><br>
student name:<input type="text" name="studentname"><br>
dob:<input type="text" name="dob"><br>
email id:<input type="text" name="emailid"><br>
Contact no:<input type="text" name="contactno"><br>
Stream:<input type="text" name="stream"><br>
marks<input type="text" name="marks"><br>
<button type="submit" class="signupbtn" name="submit">submit</button>
</form>
</body>
</html>
