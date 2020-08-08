<?php
 include('header.php');
//Connect
 $db = mysqli_connect("localhost","id4833373_g13","webbased","id4833373_tmt2654");

 if(isset($_POST['adminlogin_btn'])){

 	$username = $_POST['username'];
 	$password = $_POST['password'];

 		$sql = "SELECT * FROM admin WHERE admin_username='$username' AND password='$password'";
	 	$result = $db->query($sql);

if($result->num_rows == 1){
    $_SESSION["username"]=$username;
 		echo "<script>alert('You are logged in.')</script>";
 		echo "<script> location.href='adminhomepage.php'; </script>";

} else {
	echo "<script>alert('You have inputted an incorrect email or password')</script>";
}
}

?>


<link rel="stylesheet" type="text/css" href="adminlogin.css">
<h1>ADMIN LOGIN</h1>
<form method="POST" action="adminlogin.php">
	<div>
		<span>Username</span> <input type="text" name="username" class="inputbox">
	</div>
	<div>
		<span>Password</span> <input type="password" name="password" class="inputbox">
	</div>
	<div>
		<input type="submit" name="adminlogin_btn" value="Login" class="loginbtn">
	</div>
	<a href="landing.php">Go back to Landing Page</a>
</form>

<div class="tester">
<p> Login Details of Admin (No Registration for Admin for Resu-Me)</p>
<p> Username: Khalif</p>
<p> Password: asd</p>
</div>

<?php
include('footer.php');
?>