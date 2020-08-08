<?php
 include('header.php');


if(isset($_POST['register_btn'])){

 	$first_name = $_POST['first_name'];
 	$last_name = $_POST['last_name'];
 	$email = $_POST['email'];
 	$ic = $_POST['ic'];
 	$password = $_POST['password'];
 	$password2 = $_POST['password2'];
 	$userid = $_POST['userid'];
 	//mysql_real_escape_string($_POST['password2']); <- Safe way (currently not working due to setting)
 	
 if($password == $password2){
 		$sql = "SELECT * FROM user where email='$email'";
 		$result = $db->query($sql);

 		if($result->num_rows == 0){
 		// Create a User
 		$password = md5($password);
 		$sql = "INSERT INTO user (first_name, last_name, email, ic, password, userid)
 				VALUES ('$first_name', '$last_name', '$email','$ic', '$password', '$userid')";
 				mysqli_query($db, $sql);

 			echo "<script>alert('Data has been inserted into the database.')</script>";
 			echo "<script> location.href='login.php'; </script>";
 		} else {
 			echo "<script>alert('That e-mail already exists...Please try again')</script>";
 		}

 	} else {	
 	// Fail
 	echo "<script>alert('The passwords do not match...')</script>";
 	}
 }
?>


<html>
<link rel="stylesheet" type="text/css" href="register.css">

	<form method="POST" action="register.php">
	    <div class="header"><h2>Registration Form</h2></div>
		<div>
			<span>First Name</span> <input type="varchar" name="first_name" id="first_name" oninput="makeUserId()">
		</div>
		<div>
			<span>Last Name</span> <input type="varchar" name="last_name" id = "last_name" oninput="makeUserId()">
		</div>
		<div>
			<span>Email</span> <input type="text" name="email">
		</div>
		<div>
			<span>IC</span> <input type="varchar" name="ic" id="ic" oninput="makeUserId()">
		</div>
		<div>
			<span>Password</span> <input type="password" name="password">
		</div>
		<div>
			<span>Confirm password</span> <input type="password" name="password2" >
		</div>
		<div>
		<span>Auto Generated User ID(for login)</span> <input type="text" name="userid" id ="userid">
		</div>

		<div class="button">
			<input type="submit" name="register_btn" value = "Submit" onclick="makeUserId()">
			<a href="login.php">Back to LOGIN</a>
		</div>
	</form>

<script>function makeUserId() {
//     var x = document.getElementById("first_name").value.toLowerCase();
//     var y = document.getElementById("last_name").value.toLowerCase();
// 	var z = document.getElementById("ic").value;
//     var match =x.match(/\b(\w)/g);
//     var acronym =match.join('');
// 	y = y.replace(/\s+/g, '');
// 	var num = z.slice(-4);
 
//     document.getElementById("userid").value = acronym+y+num;

        var fname = document.getElementById("first_name").value.toLowerCase();
		var lname = document.getElementById("last_name").value.toLowerCase();
		
		if (fname.match(" binti"))
		{
			fname = fname.replace(" binti", "");
		}
		else if (fname.match(" bin"))
		{
			fname= fname.replace(" bin","");
		}
		
		else if (fname.match(" anak"))
		{
			fname= fname.replace(" anak","");
		}
		
		//Checking for Last Name bin binti
			if (lname.match("binti "))
		{
			lname = lname.replace("binti ", "");
		}
		else if (lname.match("bin "))
		{
			lname= lname.replace("bin ","");
		}
		
		else if (lname.match("anak "))
		{
			lname= lname.replace("anak ","");
		}
		
		
		
		
		
		
		
		
		
		
		var txt="";
		
		var split = fname.split(' ');
		txt+= split[0][0];
		
		
		if (split.length>=2){
			txt+=split[1][0];
		}
		txt += lname;
		
		var ic = document.getElementById("ic").value;; // copy of ic

		ic = ic.slice(-4);
		txt+=ic;
		
    	document.getElementById("userid").value = txt ;
    	//debugger;
    	console.log(txt);



}


</script>
</html>



