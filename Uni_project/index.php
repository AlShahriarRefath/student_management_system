<?php

$host="localhost";
$user="root";
$password="";
$db="studentmsdata";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="Student")
	{	

		$_SESSION["username"]=$username;

		header("location:StudentHome.php");
	}

	elseif($row["usertype"]=="Faculty")
	{

		$_SESSION["username"]=$username;
		
		header("location:FacultyHome.php");
	}

	elseif($row["usertype"]=="Admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:AdminHome.php");
	}

	elseif($row["usertype"]=="Accounts")
	{

		$_SESSION["username"]=$username;
		
		header("location:AccountsHome.php");
	}
	else
	{
		$_SESSION["username"]=$username;
		
		header("Location: login.php?error=Incorect User name or password");
		
	}

}




?>









<!DOCTYPE html>
<html>
<head>
	<title>UATE login</title>
	<link rel="shortcut icon" href="images/UATE.png" type="image/x-icon">
	<link rel="stylesheet" href="CSS_login/Login.css">
	<script src="https://kit.fontawesome.com/c0aa5186b3.js" crossorigin="anonymous"></script>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
<img src="images/UATE.png" alt="">
     <form action="login.php" method="post">
     	<h2>Log in</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="username" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button class="ABC" type="submit"> <i class="fa-solid fa-right-to-bracket fa-fade" style="color: #ffffff;"></i> Login</button>
     </form>
<br>
<br>
<br>
<br>
<br>
	 <div class="footer">
       <p> <i class="fa-regular fa-copyright fa-beat-fade"></i> Refath, Sinthia, Nipun | Student Management System</p>
     </div>

</body>
</html>
