<?php include 'header.php';

//Insert the details in this user's account into the fields so can edit (~SAYED)
$userid = $_SESSION['userid'];
$sqli = "SELECT * FROM user WHERE userid ='$userid'";
$result = $db->query($sqli);

     while ($row = $result->fetch_array()) {
        $name = $row['name'];
        $img_content = $row['img_content'];
 	    $phone = $row['phone'];
 	    $email = $row['email'];
 	    $address = $row['address'];
 	    $city = $row['city'];
 	    $postcode = $row['postcode'];
    	$region = $row['region'];
 	    $about = $row['about'];
 	    $wtime = $row['wtime'];
 	    $cname = $row['cname'];
 	    $cwebsite = $row['cwebsite'];
    	$wposition = $row['wposition'];
 	    $cdetails = $row['cdetails'];
 	    $responsibility = $row['responsibility'];
 	    $sname = $row['sname'];
 	    $stype = $row['stype'];
 	    $slevel = $row['slevel'];
 	    $language_name = $row['language_name'];
 	    $language_level = $row['language_level'];
 	    $iname = $row['iname'];
 	    $itype = $row['itype'];
 	    $adate = $row['adate'];
 	    $aname = $row['aname'];
    	$atype = $row['atype'];
 	    $adetails = $row['adetails'];
    	$rname = $row['rname']; 
    }



//What happens when you click the SUBMIT

if((isset($_POST['submit_btn'])) && !empty($_FILES)){
	$formOk = true;

	$img_path = $_FILES['image']['tmp_name'];
	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$img_type = $_FILES['image']['type'];
	$userid = $_SESSION['userid'];

if ($_FILES['image']['error'] || !is_uploaded_file($img_path)) {
		$formOk = false;
		echo "Error: Error in uploading file. Please try again.";
	}

	//check file extension
	if ($formOk && !in_array($img_type, array('image/png', 'image/x-png', 'image/jpeg', 'image/pjpeg', 'image/gif'))) {
		$formOk = false;
		echo "Error: Unsupported file extension. Supported extensions are JPG / PNG.";
	}

 	// check for file size.
	if ($formOk && filesize($img_path) > 500000) {
		$formOk = false;
		echo "Error: File size must be less than 500 KB.";
	}

	if ($formOk) {
 		// read file contents
		$img_content = file_get_contents($img_path);

		$img_content = mysqli_real_escape_string($db, $img_content);
		$sql = "UPDATE user SET  img_name = '$img_name', img_size ='$img_size',img_type ='$img_type',img_content ='$img_content' WHERE userid = '$userid'";

		if (mysqli_query($db, $sql)) {
			$uploadOk = true;
			$imageId = mysqli_insert_id($db);
			echo "image is successfully uploaded";
		} else {
			echo "Error: Could not save the data to mysql database. Please try again.";
		}

	}







	//Resume Form Variables

	$name = $_POST['name'];
 	$phone = $_POST['phone'];
 	$address = $_POST['address'];
 	$city = $_POST['city'];
 	$postcode = $_POST['postcode'];
 	$region = $_POST['region'];
 	$about = $_POST['about'];
 	$wtime = $_POST['wtime'];
 	$cname = $_POST['cname'];
 	$cwebsite = $_POST['cwebsite'];
 	$wposition = $_POST['wposition'];
 	$cdetails = $_POST['cdetails'];
 	$responsibility = $_POST['responsibility'];
 	$sname = $_POST['sname'];
 	$stype = $_POST['stype'];
 	$slevel = $_POST['slevel'];
 	$language_name = $_POST['language_name'];
 	$language_level = $_POST['language_level'];
 	$iname = $_POST['iname'];
 	$itype = $_POST['itype'];
 	$adate = $_POST['adate'];
 	$aname = $_POST['aname'];
 	$atype = $_POST['atype'];
 	$adetails = $_POST['adetails'];
 	$rname = $_POST['rname']; 
		
		$sql = "UPDATE user SET name = '$name', phone = '$phone', address = '$address', city = '$city', postcode = '$postcode', region ='$region', about = '$about', wtime = '$wtime', cname = '$cname', cwebsite = '$cwebsite', wposition = '$wposition', cdetails = '$cdetails', responsibility = '$responsibility', sname = '$sname', stype = '$stype', slevel = '$slevel', language_name = '$language_name', language_level = '$language_level', iname = '$iname', itype = '$itype', adate = '$adate', aname = '$aname', atype = '$atype', 
 		adetails = '$adetails', rname = '$rname' WHERE userid = '$userid'";

if(mysqli_query($db,$sql)){
	echo "Record Updated " . $userid . "<br>";
}
else
{
echo "Error: " .$sql. "<br>" . mysqli_error($db);
}
}




//File PHP "Do not disturb Khalif"




mysqli_close($db);
?>


<html>
	<head>
		<title> Resume Information Form </title>
		<link rel="stylesheet" type="text/css" href="resume_form.css">
		
	</head>

	<body>
		<header>
			<h1> Resume Information Form </h1>
		</header>
			<form method="POST" action="resume_form.php" enctype="multipart/form-data">



<!-- More Details-->
				<fieldset>
					<legend> Personal Details</legend>
					<div>
						<label for="name">Name</label>
						<input type="text" name="name" value="<?php echo $name;?>">
					</div>
					<div>
						<label for="photo">Photo</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="500000">
						<input type="file" name="image" />
					</div>
					<div>
						<label for="phone">Contact No</label>
						<input type="text" name="phone" value="<?php echo $phone ?>">
					</div>
					<div>
						<label for="address">Address</label>
						<input type="text" name="address" value="<?php echo $address?>">
					</div>
					
					<div>
						<label for="city">Town/City</label>
						<input type="text" name="city" value="<?php echo $city; ?>">
					</div>
					<div>
						<label for="postcode">Zip/Post Code</label>
						<input type="text" name="postcode" value="<?php echo $postcode; ?>">
					</div>
					<div>
						<label for="region">Region</label>
						<input type="text" name="region" value="<?php echo $region; ?>">
					</div>
			<!--		<div>
						<label for="state">State</label>
						<select name="state">
							<option value="s" selected>Sarawak</option>
							<option value="j">Dhaka </option>
							<option value="m">Kolkata </option>
							<option value="p">Islamabad </option>
							<option value="sl">Kolombo </option>
							<option value="kl">Sydney </option>
						</select>
					</div>
					<div>
						<label for="country">Country</label>
						<select name="country">
							<option value="ml" selected>Malaysia</option>
							<option value="bd">Bangladesh </option>
							<option value="ind">India </option>
							<option value="pk">Pakistan </option>
							<option value="sri">Srilanka </option>
							<option value="aus">Australia </option>
						</select>
					</div>  -->
				</fieldset>

<!-- About -->
				<fieldset>
					<legend>About Yourself</legend>
					
						<input type="text" name="about" value="<?php echo $about; ?>">
					
				</fieldset>

<!-- Working Experience -->
				<fieldset>
					<legend>Working Experience</legend>
					<div>
						<label for="wtime">Working Duration</label>
						<input type="text" name="wtime" value="<?php echo $wtime; ?>">
					</div>
					<div>
						<label for="cname">Company Name</label>
						<input type="text" name="cname" value="<?php echo $cname; ?>">
					</div>
					<div>
						<label for="cwebsite">Company Website</label>
						<input type="text" name="cwebsite" value="<?php echo $cwebsite; ?>">
					</div>
					<div>
						<label for="wposition">Working Position</label>
						<input type="text" name="wposition" value="<?php echo $wposition; ?>">
					</div>
					<div>
						<label for="cdetails">Company Details</label>
						<input type="text" name="cdetails" value="<?php echo $cdetails; ?>">
					</div>

					<div>
						<label for="responsibility">Responsibility</label>
						<input type="text" name="responsibility" value="<?php echo $responsibility; ?>">
					</div>
				</fieldset>

<!-- Skills -->
				<fieldset>
					<legend> Skills</legend>
					<div>
						<label for="sname">Skill Name</label>
						<input type="text" name="sname" value="<?php echo $sname; ?>">
					</div>

					<div>
						<label for="stype">Skill Type</label>
						<input type="text" name="stype" value="<?php echo $stype; ?>">
					</div>

					<div>
						<label for="slevel">Skill Level</label>
						<input type="text" name="slevel" value="<?php echo $slevel; ?>">
					</div>
					
				</fieldset>

<!-- Language -->

				<fieldset>
					<legend> Language </legend>
					<div>
						<label for="language_name">Language Name</label>
						<input type="text" name="language_name" value="<?php echo $language_name; ?>">
					</div>
					<div>
						<label for="language_level">Language Skill</label>
						<input type="text" name="language_level" value="<?php echo $language_level; ?>">
					</div>
				
				</fieldset>


<!-- Interests -->

				<fieldset>
					<legend> Interests</legend>
					<div>
						<label for="iname">Interest Name</label>
						<input type="text" name="iname" value="<?php echo $iname; ?>">
					</div>
					<div>
						<label for="itype">Interest Type</label>
						<input type="text" name="itype" value="<?php echo $itype; ?>">
					</div>
					
				</fieldset>


<!-- Awards-->

				<fieldset>
					<legend> Awards</legend>
					<div>
						<label for="adate">Award Date</label>
						<input type="text" name="adate" value="<?php echo $adate; ?>">
					</div>
					<div>
						<label for="aname">Award Name</label>
						<input type="text" name="aname" value="<?php echo $aname; ?>">
					</div>
					<div>
						<label for="atype">Award Type</label>
						<input type="text" name="atype" value="<?php echo $atype; ?>">
					</div>
					<div>
						<label for="adetails">Award Details</label>
						<input type="text" name="adetails" value="<?php echo $adetails; ?>">
					</div>
				</fieldset>


<!-- References-->
				<fieldset>
					<legend> References </legend>
					<div>
						<label for="rname">Referer Name</label>
						<input type="text" name="rname" value="<?php echo $rname; ?>">
					</div>
					
				</fieldset>
				<div><input type="submit" name="submit_btn" value="Submit Details">
				</div>
			
			<a href="theme-59395.php">Theme 1</a>
			<a href="theme-58683.php">Theme 2</a>
			<br>
			<a href="theme-58404.php">Theme 3</a>
			<a href="theme-58672.php">Theme 4</a>
			<br>
			<a href="homepage.php">Back to Main Page</a>
			</form>
		</body>
</html>


<?php
 include('footer.php');
?>
