<?php session_start();?>
<!DOCTYPE html>
<html>


	<head>
		<title>My Resume Web</title>
		<style>
		.error {color: #FF0000;}
		
		h3{
		    text-align: center;
		}
		input[type="submit"], input[type="button"] {
	padding: 10px;
	width: 200px;

	background-color: rgba(128,128,0);
    border: none;
    color: white;
    text-align: center;
    letter-spacing: 1px;
    display: inline-block;
    font-size: 20px;
    margin: 20px auto;
    cursor: pointer;
    display: inline-block;
}
		</style>	
	</head>
	<link rel="stylesheet" type="text/css" href="style_dark.css">
	
	<body>
		
		<header>
		<h1>My Resume Web - <?php echo $_SESSION['userid'];?>                           <a href="shop.php">Switch to Light Mode</a></h1>
			<nav>
				<ul>
					<li><a href="homepage_dark.php">Home</a></li>
					<li><a href="resume_form.php">My Resume</a></li>
					<li><a href="shop_dark.php">Shop</a></li>
					<li><a href="forum_dark.php">Forum</a>
					</li>
					<li><a href="proofread.php">Services</a>
					<li><a href="logout.php">Log out</a>
				</ul>
			</nav>
  		</header>
  		<section>
  			<h1>Welcome to the My Resume Web Shop! Here you can buy our latest recommended items.</h1>
			<h2>
				<form name="carti" method="post" action="payment.php">
				<table>
					<tr>
						<th>Items</th>
						<th>Display</th>
						<th>Price</th>
						<th>Cart</th>
					</tr>
					<tr>
						<td>Choosing resume guide book</td>
						<td><img src="vv2.png"></td>
						<td>RM 50</td>
						<td><button type="button" onclick="addcart1()">Add to cart</button>
							<button type="button" onclick="remvcart1()">Remove cart</button>
						</td>
					</tr>
					<tr>
						<td>Resume for beginners book
						</td>
						<td><img src="vv1.png"></td>
						<td>RM 30</td>
						<td><button type="button" onclick="addcart2()">Add to cart</button>
							<button type="button" onclick="remvcart2()">Remove cart</button></td>
					</tr>
				</table>
				
			</h2>
			<h3>
				<p id="display1"></p>
				<p id="display2"></p>
				<input type="button" value = "Confirm" onclick="cnfmbtn()"></input>
				<p id="display3"></p>
				<input type="submit" value="Submit">
			</h3>
			
		</section>
		<footer>
			&copy 2018. All Rights Reserved.
		</footer>
		<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'>
	<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png" alt="000webhost logo"></a></div></body>
	
</html>
<script type="text/javascript">
	var x = 0, y = 0, z = 0;
	function addcart1(){
		document.getElementById("display1").innerHTML = "Choosing resume guide book added to cart";
			x = 50;
		
	}
	function addcart2(){
		document.getElementById("display2").innerHTML = "Resume for beginners book added to cart";
			y = 30;
			
	}
	function remvcart1(){
		document.getElementById("display1").innerHTML = "";
			x = 0;
	}
	function remvcart2(){
		document.getElementById("display2").innerHTML = "";
			y = 0;
	}
	function cnfmbtn(){
		z = x + y;
		document.getElementById("display3").innerHTML = "Purchase price is RM" + z;
	}

</script>
