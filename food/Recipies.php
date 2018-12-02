<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
	<title>Order</title>
	<link rel="stylesheet"  href="CSS/styleHome.css">
	<link rel="stylesheet"  href="CSS/styleRestaurants.css">
	<link rel="stylesheet"  href="CSS/styleRecipies.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
</head>
<body>
	<div class="container2">
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
		    	data-image-src="images/recipies/3.gif" style="font: 50px red Tahoma" 
		        >
		    	
		    	<div class="find2">
		    	<img src="images/logos/find3.png" style=" opacity: .6;position: relative;">
		    	<img src="images/logos/insert.png" style="opacity: .6;">
		    	<h1 style="padding-left: 460px;padding-top: 13px; font:20px white Tahoma; position: absolute;opacity: 1">FIND RECIPIES</h1>
		    		    			
		    	</div>	

		 </div><!--parallaxwindow_res-->

		</div><!--upper_part-->
		 <div class="wrapper_recipies">
		 	<div class="trending" >
		 		TRENDING:<br>
		 		<div class="video1">
		 			<video width="320" height="240" controls>
  					<source src="images/recipies/How to Make Corn Cookies (Momofuku Milkbar Recipe).mp4" type="video/mp4">
  					<source src="How to Make Corn Cookies (Momofuku Milkbar Recipe).ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
		 		</div>
		 		<div class="video2">
		 			<video width="320" height="250" controls>
  					<source src="images/recipies/Creamy Butter Chicken - Dinner in 30 Minutes.mp4" type="video/mp4">
  					<source src="Healthy Easy Food Recipes - Food Recipes Compilation.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
		 		</div>
		 		<div class="video3">
		 			<video width="320" height="250" controls>
  					<source src="images/recipies/TASTY ONION RINGS - Easy Food Recipes For Dinner to make at home - Cooking videos.mp4" type="video/mp4" type="video/mp4">
  					<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
		 		</div>

		 	</div><!--trending-->
		 	<div class="lower_half">
		 		<div class="filter2">
					<div class="sort_by" style="padding: 20px; padding-top: 50px;">
					Sort by:<select name="TEXT">
						<option>Relevance</option>
						<option>Ratings</option>
						<option>Popularity</option>
					</select>
					</div>
					<div class="filter_res" style="padding: 20px; padding-top: 50px;">
					Filter Restaurants:<br>
					<input type="radio" name="Delivery"
					type="checkbox">Delivery<br>
					<input type="radio" name="Free_Delivery"
					type="checkbox">Free Delivery<br>
					<input type="radio" name="Deals"
					type="checkbox">Deals<br>
					<input type="radio" name="Open_Restaurants"
					type="checkbox">Open Restaurants<br>
					<input type="radio" name="Online"
					type="checkbox">Online payment available<br>
					</div>
					<div class="cuisines" style="padding: 20px; padding-top: 50px;">
					Cuisines:<br>
					<input type="radio" name="Delivery"
					type="checkbox">Burgers and Fast Food<br>
					<input type="radio" name="Free_Delivery"
					type="checkbox">Chinese Food<br>
					<input type="radio" name="Deals"
					type="checkbox">Thai<br>
					<input type="radio" name="Open_Restaurants"
					type="checkbox">Pizza<br>
					<input type="radio" name="Online"
					type="checkbox">Snacks<br>
					<input type="radio" name="Online"
					type="checkbox">Indian<br>
					<input type="radio" name="Online"
					type="checkbox">Snacks<br>
					</div>
				</div><!--filters-->

				<div class="grid_video">
					<div class="recipe1">
						<video width="200" height="200" controls>
  					<source src="images/recipies/How to Make Corn Cookies (Momofuku Milkbar Recipe).mp4" type="video/mp4">
					</video>
					<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200px;" controls>
  					<source src="images/recipies/Creamy Butter Chicken - Dinner in 30 Minutes.mp4" type="video/mp4">
  					<source src="Healthy Easy Food Recipes - Food Recipes Compilation.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200" controls>
  					<source src="images/recipies/TASTY ONION RINGS - Easy Food Recipes For Dinner to make at home - Cooking videos.mp4" type="video/mp4" type="video/mp4">
  					<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200" controls>
  					<source src="images/recipies/How to Make Corn Cookies (Momofuku Milkbar Recipe).mp4" type="video/mp4">
  					<source src="How to Make Corn Cookies (Momofuku Milkbar Recipe).ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200px;" controls>
  					<source src="images/recipies/Creamy Butter Chicken - Dinner in 30 Minutes.mp4" type="video/mp4">
  					<source src="Healthy Easy Food Recipes - Food Recipes Compilation.ogg" type="video/ogg"></video>
  										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200" controls>
  					<source src="images/recipies/TASTY ONION RINGS - Easy Food Recipes For Dinner to make at home - Cooking videos.mp4" type="video/mp4" type="video/mp4">
  					<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200" controls>
  					<source src="images/recipies/How to Make Corn Cookies (Momofuku Milkbar Recipe).mp4" type="video/mp4">
  					<source src="How to Make Corn Cookies (Momofuku Milkbar Recipe).ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200px;" controls>
  					<source src="images/recipies/Creamy Butter Chicken - Dinner in 30 Minutes.mp4" type="video/mp4">
  					<source src="Healthy Easy Food Recipes - Food Recipes Compilation.ogg" type="video/ogg"></video>
  										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200" controls>
  					<source src="images/recipies/TASTY ONION RINGS - Easy Food Recipes For Dinner to make at home - Cooking videos.mp4" type="video/mp4" type="video/mp4">
  					<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200" controls>
  					<source src="images/recipies/How to Make Corn Cookies (Momofuku Milkbar Recipe).mp4" type="video/mp4">
  					<source src="How to Make Corn Cookies (Momofuku Milkbar Recipe).ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200px;" controls>
  					<source src="images/recipies/Creamy Butter Chicken - Dinner in 30 Minutes.mp4" type="video/mp4">
  					<source src="Healthy Easy Food Recipes - Food Recipes Compilation.ogg" type="video/ogg"></video>
  										<h2 style="">Chicken</h2>
					</div>
					<div class="recipe1">
						<video width="200" height="200" controls>
  					<source src="images/recipies/TASTY ONION RINGS - Easy Food Recipes For Dinner to make at home - Cooking videos.mp4" type="video/mp4" type="video/mp4">
  					<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
										<h2 style="">Chicken</h2>
					</div>
				</div>
		 	</div><!--lower_half-->

		 </div><!--wrapper_recipies-->
		 	
		<!--Here is the Footer-->
		<?php include("includes/footer.php"); ?>
		
	</div><!--container2-->

</body>
</html>