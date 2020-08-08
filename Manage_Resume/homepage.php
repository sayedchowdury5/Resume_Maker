<?php session_start();?>

<html>

	<head>
		<title>My Resume Web</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<header>
			<h1>My Resume Web - <?php echo $_SESSION['userid'];?>
			<a href="homepage_dark.php">Switch to Dark Mode</a></h1>
			<nav>
				<ul>
					<li><a href="homepage.php">Home</a></li>
					<li><a href="resume_form.php">My Resume</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="forum.php">Forum</a></li>
					<li><a href="proofread.php">Services</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>
  		</header>
  		<section>
 			<h1>Welcome to My Resume Webpage.</h1>
 			<h1>
 			Here, you can choose from a variety of resume provided for your resume template. <br>You are able to discuss
 			about resume template and design, buying a book and template from shop, <br>and proofreading your resume to 
 			our specialized clients. </h1>
		</section>
		<footer>

		</footer>
		<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'>
	<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png" alt="000webhost logo"></a></div></body>
	
<html>
