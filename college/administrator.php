 <?php
$connection = @mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("college", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$collegename = $_POST['collegename'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$contact= $_POST['contactno'];
#$stream = $_POST['stream'];
$stream=$_POST['stream'];
$Stream="";
foreach($stream as $Stream1)
{
	$Stream .= $Stream1 . ",";
}
#if($collegename!=''||$address !=''||$city!=''||$zip!=''||$contactno!=''||$stream!=''){
//Insert Query of SQL
$query = mysql_query("insert into add_college(collegename, address,city,zipcode,contactno,stream) values ('$collegename', '$address','$city','$zip','$contact','$Stream')");
#echo "<br/><span>Data Inserted successfully...!!</span>";
#}
#else{
#echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
#}
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
<tr><td><center><b><a STYLE="text-decoration:none;color:azure;" href="administrator.php">
  Add college
  
</b></td>
<td><center><b><a STYLE="text-decoration:none;color:azure;" href="cutoff.php">add cutoff</a></b></td>
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
<h2>Add college</h2>
<form action="" method="post">
<h4> college name:<input type="text" name="collegename"><br>
Address:<input type="text" name="address"><br>
City:<input type="text" name="city"><br>
Zipcode:<input type="text" name="zip"><br>
Contact no:<input type="text" name="contactno"><br>
Stream:<input type="checkbox" name="stream[]" value ="CS"> computer science<br>
<input type="checkbox" name="stream[]" value ="IT"> information technology<br>
<input type="checkbox" name="stream[]" value ="ECE"> electrical and electronics<br>
<input type="checkbox" name="stream[]" value ="EE"> electrical engineering<br>
<input type="checkbox" name="stream[]" value ="MECH"> mechanical engineering<br>
<button type="submit" class="cancelbtn">Cancel</button>
<button type="submit" class="submit" name="submit">Add College</button><br></font>
</form>
</body>
</html>
