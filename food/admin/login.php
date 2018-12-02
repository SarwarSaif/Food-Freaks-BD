<?php 
session_start();

?>

<html>
	<head>
		<title>Admin Login</title>
	</head>

<body style="background-image: url('back/pizza2.gif');
background-size: 100% 100%;
 ">
	<center>
	<form method="post" action="login.php" style="width: 400px;height: 500px;margin-top: 100px;
	background-color: rgba(255,255,255,.6);
	border-radius: 25px
	

	">

		<div style="width: 100%;height: 100px;
		background-color: rgba(255,0,0,.6);
		border-radius: 25px 25px 0px 0px;
		padding-top: 20px;">
			<h1>Admin Login</h1>
		</div>
		<div style="margin-top: 40px;color: black;


		">
			<h3>UserName</h3>
			<input type="text" name="user_name"
			style="width: 300px;height: 40px;border-radius: 30px;opacity: .8;
			color: red;font-weight: bold;" 
			>
		</div>
		<div>
		<h3>Password</h3>
			<input type="password" name="user_pass"
			style="width: 300px;height: 40px;border-radius: 30px;opacity: .8;
			color: red;font-weight: bold;" 
			>
		</div>
		<div style="margin-top: 50px;">
			<input type="submit" name="login" value="Login"
			style="width: 100px;height: 40px;background-color: green;border-radius: 30px;opacity: .8;
			color: white;font-weight: bold;" 
			>
		</div>
	
		
	</form>
	</center>

</body>
</html>
<?php 
include("includes/connect.php");
$con=mysqli_connect("localhost","root","","food_freaks");

if(isset($_POST['login'])){
	
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];
	
	$encrypt = md5($user_pass);

	$admin_query = "select * from admin where username='$user_name' AND password='$user_pass'";

	$run = mysqli_query($con,$admin_query); 
	
	if(mysqli_num_rows($run)>0){
	
	$_SESSION['user_name']=$user_name;
	
	echo "<script>window.open('index.php','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
	
	}
}


?>