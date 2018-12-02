<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>

<html>
	<head>
		<title>Admin Panel</title>
	
	<link rel="stylesheet" href="admin_style.css" />
	<link rel="stylesheet" type="text/css" href="admin_style.css">
	<style type="text/css">
		*{

		}
		h1{
			font-size: 40px;
		}
		#header{
			background-color: rgb(204, 0, 0);
			height: 80px;
			border:0px;
		}
		#header h1{
			font-size: 50px;
			text-align:center; 
			color:white;
			font-family: Tahoma;
			padding-top: 10px;
		}
		a{
			color: white;
		text-decoration	: none;
		}
		body{background:white; padding:0; margin:0;}


#sidebar{width:250px;  background:orange; border-right:5px solid blue; height:600px;}

#sidebar h2 {text-align:center; font-size:2em; color:brown;}



#welcome {margin:10px; padding:10px; text-align:center; color:white;}
	
	/*hidden_menu*/
	.navigation {
    list-style: none;
    background: #111;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
}
.site-wrap {
    min-width: 100%;
    min-height: 100%;
    background-color: #fff;
    position: relative;
    top: 0;
    bottom: 100%;
    left: 0;
    z-index: 1;
    
}

.nav-trigger {
    position: absolute;
    clip: rect(0, 0, 0, 0);
}
label[for="nav-trigger"] {
    position: fixed;
    top: 15px;
    left: 15px;
    z-index: 2;
}
label[for="nav-trigger"] {
    /* ... previous styles here... */
    width: 30px;
    height: 30px;
    cursor: pointer;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' width='30px' height='30px' viewBox='0 0 30 30' enable-background='new 0 0 30 30' xml:space='preserve'><rect width='30' height='6'/><rect y='24' width='30' height='6'/><rect y='12' width='30' height='6'/></svg>");
    background-size: contain;
}
.nav-trigger:checked + label {
    left: 215px;
}

.nav-trigger:checked ~ .site-wrap {
    left: 200px;
    box-shadow: 0 0 5px 5px rgba(255,0,0,0.5);
}
.nav-trigger + label, .site-wrap {
    transition: left 0.2s;
}
body {
    overflow-x: hidden;
}
	.navigation li{
		font-size: 27px;
		padding: 5px;
		border-bottom:0.8px solid rgba(255,0,0,.4);
		margin-right: 0px;
		padding-right: 0px;
	}
	.navigation li:hover{
		background:  -webkit-linear-gradient(180deg,black,rgba(255,0,0,.5));

	}



	</style>


	</head>
	
<body style="background-color: black;">

</div> 

	<ul class="navigation" style="">
	<span style="color: white;font-size: 30px;">Welcome:</span><h2 style="color: red;
	border-bottom: 1px solid white;
	"><?php echo $_SESSION['user_name']; ?></h2>
    <li class="nav-item"><a href="#">Dashboard</a></li>
    <li class="nav-item"><a href="restaurant.php">Restaurant</a></li>
    <li class="nav-item"><a href="index.php?insert=insert">Order</a></li>
    <li class="nav-item"><a href="#">Offers</a></li>
    <li class="nav-item"><a href="#">Recipes</a></li>
    <li class="nav-item"><a href="#">Reviews</a></li>
    <br><br><br><br><br>
    <li class="nav-item"><a href="logout.php">Logout</a></li>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
<div class="site-wrap">
    <!-- insert the rest of your page markup here -->
    <div id="header" style="
">
<a href="index.php">
<h1>Admin Panel</h1></a>

    
<div id="welcome"> 

<h1 style="color: blue">Welcome to your Admin Panel</h1>

<p style="color: black;"> This is your admin panel, where you can manage your website files and content</p>


</div>
<?php 
	
	if(isset($_GET['insert'])){
	
	include("insert_post.php");
	
	}


?>

</div>




</body>
</html>

<?php } ?>