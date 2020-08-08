<?php session_start(); ?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>Resu-Me Maker</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <link rel="stylesheet" type="text/css" href="adminhomepage.css">
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
	</head>

	<body>
		<header>
		<h2> Administration - <?php echo $_SESSION['username'] ?></h2>
	</header>
<div class="container">
  <ul class="nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="dashboarddelete.php">Delete Registered User</a></li>
    <li><a href="admin_forum.php">Forums</a></li>
    <li><a href="adminlogout.php">Logout</a></li>
  </ul>
</div>
	<p>Welcome to The Administration Panel...!!!</p>
	</body>

</html>
