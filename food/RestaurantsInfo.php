  <?php  

 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "food_freaks");  
 
 if(isset($_POST["add_to_cart"]))
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="RestaurantsInfo.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 } 
 ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/styleRestaurantsInfo.css">
	<link rel="stylesheet" type="text/css" href="styleHome.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="JavaScript/tabs.js"></script>

    <script src="JavaScript/parallax.min.js"></script>


<style >
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
	<div class="info_container"  style="" 
>
		<!--Here is the  Menu -->
		<?php include("includes/menubar.php"); ?>



		
	    <div class="upper_info" style="background: transparent;">
	    	<div class="parallax-window_resInfo" data-parallax="scroll" 
		    	data-z-index="0"
		    	data-image-src="images/foods/21.png" style="font: 50px red Tahoma" 
		        >
		    	
		    	

		 	</div><!--parallaxwindow_resInfo-->

	    	<div class="name"> </div>
	    	<div class="location"> </div>

	    </div><!--upper_info-->
	    <div style="width: 100%;height: 50px; border: 1px solid black;background-color: black; opacity: .4;margin-top: -50px;
	    "></div>
	    <div style="width: 200px;height: 400px; border: 1px solid black;background-color: black; opacity: .4;margin-top: -600px ;float:left;
	    "></div>

	    <div class="lower_info" >

	    <!--PHP -->
	    <?php 
include("admin/includes/connect.php");
$con=mysqli_connect("localhost","root","","food_freaks");

if(isset($_GET['id1'])){

$res_id = $_GET['id1'];
echo "$res_id";

	$select_query = "select * from menu where R_ID='$res_id'";

$run_query = mysqli_query($con,$select_query);

while($row=mysqli_fetch_array($run_query)){

							$item_name = $row['Item_name'];
							$item_des = $row['Item_des'];
							$item_price = $row['Item_price'];
							
							echo "
								<h1>
								$item_name<br>
								$item_des<br>
								$item_price<br>
								
						

								</h1>

							";


} }?>


 <?php 
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>


                     window.location="RestaurantsInfo.php?id1=<?php print"$res_id";"</script>';  
                }  
           }  
      }  
 }  
 ?>  





	    	<div class="main_info" style="width: 830px;">

	    		<div class="tabs" style="margin-top: 0px; " >
    				<ul class="tab-links" style="background:transparent;" >
			        <li class="active"  ><a href="#menu_info"  >Menu</a></li>
			        <li><a href="#info">Info</a></li>
			        <li><a href="#review" style="border-radius: 0px 25px 0px 0px ;">Review</a></li>
    				</ul>
 
    				<div class="tab-content" style="background: -webkit-linear-gradient(270deg,rgba(255,255,255,.5),rgba(0,0,0,.1));">
				        <div id="menu_info" class="tab active" style="font-size: 30px;color: black;">

<!-- START OF MENU .................................................................................................................
.............................................................................
..................................................
-->
				        	<div class="container" style="width:700px;">  
                <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />  
                <?php  
                $query = "SELECT * FROM menu WHERE R_ID= $res_id ORDER BY Item_ID ASC";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4" style="color: white;height: 300px;width: 100%">  
                form koi?
                     <form method="post" action="RestaurantsInfo.php?action=add&id=<?php echo $row["Item_ID"]; ?>&id1=<?php echo $res_id; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <!--<img src="<?php //echo $row["image"]; ?>" class="img-responsive" /><br />  -->
                               <h4 class="text-info" style="border:2px solid blue;"><?php echo $row["Item_name"]; ?></h4>  
                               <h4 class="text-danger"> <?php echo $row["Item_price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Item_name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Item_price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>tk <?php echo $values["item_price"]; ?></td>  
                               <td>tk <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="RestaurantsInfo.php?action=delete&id=<?php echo $values["item_id"]; ?>&
                               id1=<?php echo $res_id; ?>"><span class="text-danger">Remove</span></a></td> 

                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr> 
                          <tr>
			              <td><a href="Customer.php"><span class="text-danger">Remove</span></a></td> 
		                  </tr> 
                          <?php  
                          }  

                          



                          ?>  
                     </table>  
                </div>  
           </div>  


				        <!-- END of PHP ........................................................................................ 
				        ...........................................................................................
				        ..........................................................................
				        ..........................................................
				        -->


				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>

				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            	<input type="checkbox" class="checkbox">
				            </div>

				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>
				            <div id="item1" class="item">
				            	<h2>Item name</h2>
				            	<p>Item Description</p>
				            </div>



				        </div>
				 
				        <div id="info" class="tab" style="">
				            <div id="u_info" 
				            style="">
				            	<h2 style="background: transparent;">Hotel Name</h2>
				            	<p style="background: transparent;">Description</p>
				            </div>
				            <div style="width: 100%;border: 1px solid black;opacity: .2"></div>

				            <div id="m_info" style="font-size: 25px;">
				             	<div id="delivery_hours"
				             	style="width: 70%;height: 500px;float: left;
				             	background: white;padding-top: 20px;">

				             			<table id="t01" style="width:600px;
				             			background: white;color: black;
				             			">
											  
											  <tr>
											    <td>Monday</td>
											    <td>12-18</td> 
											    
											  </tr>
											  <tr>
											    <td>Tuesday</td>
											    <td>12-18</td> 
											    
											  </tr>
											  <tr>
											    <td>Wednesday</td>
											    <td>12-18</td> 
											    
											  </tr>
											  <tr>
											    <td>Thursday</td>
											    <td>12-18</td> 
											    
											  </tr>
											  <tr>
											    <td>Friday</td>
											    <td>12-18</td> 
											    
											  </tr>
											  <tr>
											    <td>Saturday</td>
											    <td>12-18</td> 
											    
											  </tr>
											  <tr>
											    <td>Sunday</td>
											    <td>12-18</td> 
											    
											  </tr>
											  
											</table>
				             		
				             	</div>



				             	<div id="delivery_fee"
				             	style="width: 27%;height: 50%;float: right;">
				             		<span>Delivery Fee:</span><br>
				             		FROM tk 60
				             	</div>
				             	<div id="delivery_time"
				             	style="width: 27%;height: 50%;float: right;">
				             		<span>Delivery Time:</span><br>
				             		1h 10min
				             	</div>
				            	
				            </div>

				            <div style="width: 100%;border: 1px solid black;opacity: .3;margin-top: 80px;"></div>

				            <div id="l_info" >
				            	 <span>Address:</span>
                                 60, E, Kemal Ataturk Avenue, Below Jatra Showroom, Dhaka, 1213<br>
                                 <span>Payment types :</span> Cash on delivery
				            </div>

				        </div>
				 
				        <div id="review" class="tab" style="background: white;color: black;font-size: 25px;width: 830px;">
				            <div id="item1" class="item">
				            	<h2>Star</h2>
				            	<p>Comment</p>
				            	
				            </div>
				            <div id="item1" class="item">
				            	<h2>Star</h2>
				            	<p>Comment</p>
				            	
				            </div>
				            <div id="item1" class="item">
				            	<h2>Star</h2>
				            	<p>Comment</p>
				            	
				            </div>
				            <div id="item1" class="item">
				            	<h2>Star</h2>
				            	<p>Comment</p>
				            	
				            </div>
				            <div id="item1" class="item">
				            	<h2>Star</h2>
				            	<p>Comment</p>
				            	
				            </div>
				            <div id="item1" class="item">
				            	<h2>Star</h2>
				            	<p>Comment</p>
				            	
				            </div>
				            <div id="item1" class="item">
				            	<h2>Star</h2>
				            	<p>Comment</p>
				            	
				            </div>
				        </div>
				 

    				</div><!--tab-content-->
				</div><!--tabs-->
	    		
	    	</div><!--main_info-->

	    	<div class="order">
	    	<div id="estimated">
	    		
	    	</div>
	    	<div id="user_order">
	    		<?php
					
					$arrlength = count($item_name_arr);

					for($x = 0; $x < $arrlength; $x++) {
    				echo $item_price_arr[$x];
    				echo "$arrlength";
    				echo "<br>";
					}
				?>
	    		
	    	</div>
	    		
	    	</div><!--order-->
	    	
	    </div><!--lower_info-->



	</div><!--info_container-->
	
	
		<!--Here is the Footer-->
		<?php include("includes/footer.php"); ?>

	</body>
</html>
