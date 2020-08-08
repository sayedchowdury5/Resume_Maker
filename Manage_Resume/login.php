<?php
include('header.php');
$db = mysqli_connect("localhost","id4833373_g13","webbased","id4833373_tmt2654");
if(isset($_POST['login_btn'])){
 	$userid = $_POST['userid'];
 	$password = $_POST['password'];

 		$password = md5($password);
 		$sql = "SELECT * FROM user WHERE userid='$userid' AND password='$password'";
	 	$result = $db->query($sql);

if($result->num_rows == 1){
	$_SESSION["userid"] = $userid;

 		echo "<script>alert('You are logged in.')</script>";
 		 echo "<script> location.href='homepage.php'; </script>";

} else {
	echo "<script>alert('You have inputted an incorrect user id or password')</script>";
}
}

?>

<link rel="stylesheet" type="text/css" href="login.css">
<form method="POST" action="login.php">
    <div class="loghead">LOG IN</div>
	<div>
		<span>User ID</span> <input type="varchar" name="userid" class="inputbox">
	</div>
	<div>
		<span>Password</span> <input type="password" name="password" class="inputbox">
	</div>
	<div>
		<input type="submit" name="login_btn" value="Login" class="loginbtn">
	</div>
	<div>
	Not Registered?	<a href="register.php">Register Now</a>
	Or <a href="landing.php">Return Back</a>
	</div> 
</form>


<?php
include('footer.php');
?>