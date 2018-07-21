<!DOCTYPE>
<?php 
include("functions/functions.php");?>
<html>
<head>
<title>My online shop</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
<body>
<div class="main_wrapper">
<div class="header_wrapper">
<img id="logo" src="images/logo1.jpg" "/>
<img id="banner" src="images/giphy.gif" width="70%" height="100px"/>
</div>
<div class="menubar">
<ul id="menu"><li> <a href="index.php">Home</a></li>
<li> <a href="all_products.php">All products</a></li>
<li> <a href="#">My Account</a></li>
<li> <a href="#">Sign up</a></li>
<li> <a href="cart.php">Shopping cart</a></li>
<li> <a href="#">Contact Us</a></li>
</ul>
<div id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="search a product"/>
<input type="submit"name="search" value="search" />
</form>
</div>
</div>
<div class="content_wrapper">
<div id="sidebar">
<div id="sidebar_title">Categories</div>
<ul id="cats">
<?php getCats();?>
</ul>
<div id="sidebar_title">Brands</div>
<ul id="cats">
<?php getBrands();?>
</ul>
</div>
<div id="content_area">
<div id="shopping_cart">
<span style="float:right; font-size:18px; padding:5px; line-height:40px;">Welcome Guest
<b style="color:yellow;">Shopping Cart -</b>Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>
</span>
</div>
<div id="product_box">
<?php
if(isset($_GET['pro_id']))
{
	$product_id=$_GET['pro_id'];
	$get_pro="select * from products where product_id='$product_id'";
	$run_pro=mysql_query($get_pro);
	while($row_pro=mysql_fetch_array($run_pro))
	{
		$pro_id=$row_pro['product_id'];
		//$pro_cat=$row_pro['product_cat'];
		//$pro_brand=$row_pro['product_brand'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		$pro_desc=$row_pro['product_desc'];
		echo "
		<div id='single_product'>
		<h3>$pro_title</h3>
		<img src='admin_area/product_images/$pro_image' width='400' height='300'>
		<p><b><center>Rs$pro_price</center></b></p>
		<p>$pro_desc</p>
		<a href='index.php?pro_id=$pro_id' style='float:left;'>Go back</a>
		<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
		</div>
		";
	}
}
?>
</div>

</div>
</div>
<div id="footer">
<h2 style="text-align:center;padding-top:30px;">&copy; 2018 by Jyotsna Munjal</h2>
</div>
</div>
</body>
</html>