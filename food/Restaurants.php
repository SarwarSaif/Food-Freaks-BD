

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Restaurants</title>
	<link rel="stylesheet"  href="CSS/styleHome.css">
	<link rel="stylesheet"  href="CSS/styleRestaurants.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="JavaScript/vertical_tabs.js"></script>
        <script src="JavaScript/parallax.min.js"></script>
        <script type="text/javascript"
	    src="JavaScript/jquery-3.2.1.min.js"></script>

	        <style>
@import url('https://fonts.googleapis.com/css?family=Alex+Brush|Alfa+Slab+One|Allura|Amatic+SC|Amatica+SC|Architects+Daughter|Artifika|Audiowide|Bad+Script|Barrio|Bellefair|Bilbo+Swash+Caps|Black+Ops+One|Bungee+Inline|Bungee+Shade|Cabin+Sketch|Calligraffitti|Caveat|Chewy|Clicker+Script|Cookie|Courgette|Covered+By+Your+Grace|Creepster|Dancing+Script|Dawning+of+a+New+Day|Engagement|Euphoria+Script|Faster+One|Fontdiner+Swanky|Freckle+Face|Fredericka+the+Great|Fresca|Give+You+Glory|Gloria+Hallelujah|Great+Vibes|Herr+Von+Muellerhoff|Homemade+Apple|Indie+Flower|Italianno|Josefin+Sans|Just+Me+Again+Down+Here|Kaushan+Script|Kite+One|Kranky|League+Script|Leckerli+One|Lemonada|Lobster|Lobster+Two|Loved+by+the+King|Macondo|Marck+Script|Meddon|Megrim|Monoton|Montez|Mountains+of+Christmas|Mr+De+Haviland|New+Rocker|Niconne|Nothing+You+Could+Do|Open+Sans+Condensed:300|PT+Sans+Narrow|Pacifico|Parisienne|Permanent+Marker|Petit+Formal+Script|Pinyon+Script|Playball|Princess+Sofia|Qwigley|Reenie+Beanie|Rochester|Rock+Salt|Rouge+Script|Rye|Sacramento|Satisfy|Seaweed+Script|Shadows+Into+Light|Shadows+Into+Light+Two|Shojumaru|Slackey|Stalemate|Sue+Ellen+Francisco|Tangerine|Ubuntu|Yellowtail|Yesteryear');
</style>
<style>

@import url('https://fonts.googleapis.com/css?family=Plaster');
</style>
<style>
@import url('https://fonts.googleapis.com/css?family=Orbitron');
</style>


<script type="text/javascript">
	
	
</script>
</head>
<body>
	<div class="container">
		<div class="follow">
       	<a href="" > 
        	   <img src="images/logos/f2.png">
        	</a>
        	<a href="" > 
        	   <img src="images/logos/t3.png">
        	</a>
        	<a href="" > 
        	   <img src="images/logos/i1.png">
        	</a>
		</div>

		<!--Here is the  Menu -->
		<?php include("includes/menubar.php"); ?>


		<div class="upper_part">
			<div class="parallax-window_res" data-parallax="scroll" 
		    	data-z-index="-1"
		    	data-image-src="images/french.gif" style="font: 50px red Tahoma" 
		        >
		    	
		    	<div class="find2">
		    	<img src="images/logos/find3.png" style=" opacity: .6;position: relative;">
		    	<img src="images/logos/insert.png" style="opacity: .6;">
		    	<h1 style="padding-left: 460px;padding-top: 13px; font:20px white Tahoma; position: absolute;opacity: 1">FIND RESTAURANTS</h1>
		    		    			
		    	</div>
		    	<div class="location">
		    			LOCATION
		    	</div>	

		 </div><!--parallaxwindow_res-->
		</div><!--upper_part-->

		


		<div class="lower_part" style="background: -webkit-linear-gradient(170deg,rgba(0,0,0,.7),rgba(0,0,0,.8));">
			
			<div class="tab">
  				  <button class="tablinks" onclick="openCity(event, 'Relevence')">Relevence</button>
				  <button class="tablinks" onclick="openCity(event, 'Ratings')">Ratings</button>
				  <button class="tablinks" onclick="openCity(event, 'Popularity')">Popularity</button>
				  <button class="tablinks" onclick="openCity(event, 'Delivery')">Delivery</button>
				  <button class="tablinks" onclick="openCity(event, 'OnlinePayment')">OnlinePayment</button>
				  <button class="tablinks" onclick="openCity(event, 'Fastfood')">Fastfood</button>
				  <button class="tablinks" onclick="openCity(event, 'Chinese')">Chinese</button>
				  <button class="tablinks" onclick="openCity(event, 'Thai')">Thai</button>
				  <button class="tablinks" onclick="openCity(event, 'Indian')">Indian</button>
				</div>

				<div id="Relevence" class="tabcontent">
				  
				<div id="res2" class="restaurants">
						<?php 
						include("admin/includes/connect.php");
						$con=mysqli_connect("localhost","root","","food_freaks");

							$query = "select * from restaurant order by 1 DESC"; 

							$run = mysqli_query($con,$query);

							while($row=mysqli_fetch_array($run)){
							$res_id=$row['R_ID'];
							$res_name = $row['Name'];
							$res_type = $row['Type_of_food'];
							$res_rating = $row['Rating'];
							$res_image = $row['Image'];
							echo "$res_image";
							
						?>
						


				<div class="restaurant_1">
					<div class="img">
						<a href="RestaurantsInfo.php?id1=<?php echo $res_id; ?>"><img src="images/restaurants/<?php echo $res_image; ?>"</a>
					</div>
					<div class="view" style="padding-top:0px; margin-top: 0px;">
						<div class="name"> <?php echo $res_name; ?></div>
						<div class="food_type"><?php echo $res_type; ?></div>
						<div class="rating"><?php echo $res_rating; ?></div>
					</div>
				</div><!--restaurant_1-->

				<?php } ?>


				<div class="restaurant_2">
					<div>
						<a href="RestaurantsInfo.html"><img src="images/res_logos/2.png"></a>
					</div>
					<div class="view" style="margin-top: -200px;">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_2-->
				<div class="restaurant_3">
					<div>
						<img src="images/res_logos/3.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_3-->
				<div class="restaurant_4">
					<div>
						<img src="images/res_logos/4.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_4-->
				<div class="restaurant_5">
					<div>
						<img src="images/res_logos/5.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_5-->
				<div class="restaurant_6">
					<div>
						<img src="images/res_logos/6.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_6-->
				<div class="restaurant_7">
					<div>
						<img src="images/res_logos/7.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_7-->
				<div class="restaurant_8">
					<div>
						<img src="images/res_logos/8.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_8-->
				<div class="restaurant_9">
					<div>
						<img src="images/res_logos/9.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_9-->
				<div class="restaurant_10">
					<div>
						<img src="images/res_logos/9.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_10-->

			</div><!--restaurants-->
		


				</div><!--Relevence-->





				<div id="Ratings" class="tabcontent">
				  <div id="res2" class="restaurants">

			


				<div class="restaurant_1">
					<div class="img">
						<img src="images/res_logos/1.png">
					</div>
					<div class="view" style="padding-top:0px; margin-top: 0px;">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_1-->
				<div class="restaurant_2">
					<div>
						<img src="images/res_logos/2.png">
					</div>
					<div class="view" style="margin-top: -200px;">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_2-->
				<div class="restaurant_3">
					<div>
						<img src="images/res_logos/3.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_3-->
				<div class="restaurant_4">
					<div>
						<img src="images/res_logos/4.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_4-->
				<div class="restaurant_5">
					<div>
						<img src="images/res_logos/5.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_5-->
				<div class="restaurant_6">
					<div>
						<img src="images/res_logos/6.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_6-->
				<div class="restaurant_7">
					<div>
						<img src="images/res_logos/7.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_7-->
				<div class="restaurant_8">
					<div>
						<img src="images/res_logos/8.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_8-->
				<div class="restaurant_9">
					<div>
						<img src="images/res_logos/9.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_9-->
				<div class="restaurant_10">
					<div>
						<img src="images/res_logos/9.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_10-->

			</div><!--restaurants-->
		

				</div><!--Ratings-->




				<div id="Popularity" class="tabcontent">
					<div id="res2" class="restaurants">

			


				<div class="restaurant_1">
					<div class="img">
						<img src="images/res_logos/1.png">
					</div>
					<div class="view" style="padding-top:0px; margin-top: 0px;">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_1-->
				<div class="restaurant_2">
					<div>
						<img src="images/res_logos/2.png">
					</div>
					<div class="view" style="margin-top: -200px;">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_2-->
				<div class="restaurant_3">
					<div>
						<img src="images/res_logos/3.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_3-->
				<div class="restaurant_4">
					<div>
						<img src="images/res_logos/4.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_4-->
				<div class="restaurant_5">
					<div>
						<img src="images/res_logos/5.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_5-->
				<div class="restaurant_6">
					<div>
						<img src="images/res_logos/6.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_6-->
				<div class="restaurant_7">
					<div>
						<img src="images/res_logos/7.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_7-->
				<div class="restaurant_8">
					<div>
						<img src="images/res_logos/8.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_8-->
				<div class="restaurant_9">
					<div>
						<img src="images/res_logos/9.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_9-->
				<div class="restaurant_10">
					<div>
						<img src="images/res_logos/9.png">
					</div>
					<div class="view">
						<div class="name"> name of the restaurant</div>
						<div class="food_type">Type of Food</div>
						<div class="rating">Rating:</div>
					</div>
				</div><!--restaurant_10-->

			</div><!--restaurants-->
		

  				</div><!--Popularity-->


				<div id="Delivery" class="tabcontent">
				  <h3>London</h3>
				  <p>London is the capital city of England.</p>
				</div>

				<div id="OnlinePayment" class="tabcontent">
				  <h3>Paris</h3>
				  <p>Paris is the capital of France.</p> 
				</div>

				<div id="Fastfood" class="tabcontent">
				  <h3>Tokyo</h3>
				  <p>Tokyo is the capital of Japan.</p>
				</div>
				<div id="Chinese" class="tabcontent">
				  <h3>London</h3>
				  <p>London is the capital city of England.</p>
				</div>

				<div id="Thai" class="tabcontent">
				  <h3>Paris</h3>
				  <p>Paris is the capital of France.</p> 
				</div>

				<div id="Indian" class="tabcontent">
				  <h3>Tokyo</h3>
				  <p>Tokyo is the capital of Japan.</p>
				</div>


		</div><!--lower_part-->
		



		
		<!--Here is the Footer-->
		<?php include("includes/footer.php"); ?>
		
	</div><!--container-->

</body>
</html>