
<!doctype html>
<title>engineering college predictor</title>
<head>
<table background="images\216.jpg"><link rel="stylesheet" type="text/css" href="style.css" media="all">
<tr><td colspan=2><img src="images\2.jpg" height=20 width=1300></td></tr>
<tr>
<td><p class="head1"><a href="front.php"><img src="images\logo.png" width="210" height="210"></a></p></td>
<td><p class="head"><left><img src="images\8.jpg" height=190 width=900></p></td>
</tr>
<tr><td colspan=2><img src="images\2.jpg" height=20 width=1300></td></tr></table>
</head>
<body background="images\00.jpg">
<form method="post" action="admin.php"><center>
  <div class="imgcontainer">
    <img src="images\5.jpg" alt="Avatar" class="avatar" height=90 width=90><br><b>Admin Login</b>
  </div>

  <div class="container">
    <input type="text" placeholder="Enter Username" name="fullname" id="data" required>
    <input type="password" placeholder="Enter Password" name="psw" id="data" required>
<br>
    <button type="submit" name="submit"><font color=white">Login</font></button>
    <label>
      <input type="checkbox" checked="checked"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="document.getElementById('data').value = ''">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div></center>
</form>
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['fullname']) && !empty($_POST['psw'])) {  
    $fullname=$_POST['fullname'];  
    $password=$_POST['psw'];  
  
    $con=@mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('college') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM register WHERE full_name='".$fullname."' AND password='".$password."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['full_name'];  
    $dbpassword=$row['password'];  
    }  
  
    if($fullname == $dbusername && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$fullname;  
  
    /* Redirect browser */  
    header("Location: administrator.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>
</body>
</html>
