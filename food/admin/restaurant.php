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
    <li class="nav-item"><a href="index.php">Dashboard</a></li>
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

    </div> <!--header -->

    	<form method="post" action="restaurant.php" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="center" bgcolor="yellow" colspan="6"><h1>Insert New Restaurants Here</h1></td>
		</tr>
		
		<tr>
			<td align="right">Restaurant Name:</td>
			<td><input type="text" name="rname" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Restaurant Image:</td>
			<td><input type="file" name="image"></td>
		</tr>
		

		<tr>
			<td align="right">Restaurant Description:</td>
			<td><textarea name="des" cols="30" rows="15"></textarea></td>
		</tr>
		
		<tr>
			<td align="right">Restaurant Address:</td>
			<td><input type="text" name="address" size="30"></td>
		</tr>
		
		
		<tr>
			<td align="right">Sorted By:</td>
			<td><input type="text" name="sort" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Type of Food:</td>
			<td><input type="text" name="type1" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Rating:</td>
			<td><input type="number" name="rating" size="30"></td>
		</tr>
		

		<tr>
			<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
		</tr>

	
	</table>
</form>
</body>
</html>
<?php 
include("includes/connect.php"); 
$con=mysqli_connect("localhost","root","","food_freaks");


if(isset($_POST['submit'])){

	  $res_name = $_POST['rname'];
	  $res_date = date('m-d-y');
	  $res_des = $_POST['des'];
	  $res_add = $_POST['address'];
	  $res_sort = $_POST['sort'];
	  $res_type= $_POST['type1'];
	  $res_rating=$_POST['rating'];

	  $res_image= $_FILES['image']['name'];
	  $res_image_type= $_FILES['image']['type'];
	  $res_image_size= $_FILES['image']['size'];
	  $image_tmp= $_FILES['image']['tmp_name'];
	
	if($res_name=='' or $res_des=='' or $res_add=='' or $res_sort=='' or  $res_type==''  or $res_rating==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}
	if ($res_image_type=="image/jpeg" or $res_image_type=="image/png" or $res_image_type=="image/gif") {
		# code...
		if ($res_image_size<=100000) {
			# code...
			move_uploaded_file($image_tmp,"/images/$res_image");
		}
		else{

		}
	}
	else {
	
	 
	
	  $insert_query = "insert into restaurant (Name,Image,Description,Address,SortedBy,Type_of_food,Rating) values ('$res_name','$res_image','$res_des','$res_add','$res_sort','$res_type','$res_rating')";
	
	if(mysqli_query($con,$insert_query)){
	
	echo "<script>alert('post published successfuly')</script>";
	//echo "<script>window.open('restaurants.php','_self')</script>";
	
	}


}


}

?>





<?php } ?>