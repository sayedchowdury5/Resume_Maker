<?php
 include('header.php');
$id = $_SESSION['userid'];
$sqli = "SELECT * FROM user WHERE userid ='$id'";
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
//mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kitts Inboots</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="theme-58683.css">
	</head>

	<body>
		<header>

			<h1><?php echo $name ?></h1>
			<img src="data:image/jpeg;base64,<?php echo base64_encode( $img_content ); ?>" alt="Kitten Image" style="width: 150px; height: 150px">
	
		</header>

		<section>

			<div class="musketeer"><h2>Musketeer</h2>
				<!--
			<div><span>Website</span>: https://www.kittywithasword.com.my</div>
		-->
			<div><span>Email</span>: <?php echo $email ?></div>
			<div><span>Phone</span>: <?php echo $phone ?> </div>
			<p> <?php echo $about ?></p>
			<br>
			<br>
			</div>


			<div class="location"><h3>Location</h3>
			<div><span>Address</span>: <?php echo $address ?></div>
			<div><span>Postal code</span>: <?php echo $postcode ?> </div>
			<div><span>City</span>: <?php echo $city ?></div>
			<div><span>Region</span>: <?php echo $region ?> </div>
			<br>
			<br>
			</div>
        <!--
			<div class="profile"><h3>Profiles</h3>
			<div class="link-head"><span class="text-col1">Twitter</span>          Instagram</div>
			<div class="link"><span class="text-col1"><a href="">PawssiblyDangerous</a></span>          <a href="">MeowsMiaosMiuas</a></div>
			<br>
			<br>
			</div>
		-->


			<div class="work"><h2>Work</h2>
			<h4><?php echo $cname ?></h4>
			<p><?php echo $wtime ?></p>
			<p><?php echo $wposition ?></p>
			<p><?php echo $cwebsite ?></p>
			<p><?php echo $cdetails ?></p>
			<ul> 
				<li><?php echo $responsibility ?></li>
				<!--
				<li>Rocking my paws in boots.</li>
				<li>Planning, coordinating & executing rescue operations for damsels in distress while only using a 5cm sword</li>
			-->
			</ul>
			<br>
			<br>
			</div>


			<div class="awards"><h2>Awards</h2>
			<p><?php echo $atype ?> </p>
			<p><?php echo $adate ?></p>
			<p><?php echo $aname ?></p>
			<p><?php echo $adetails ?></p>
			<br>
			<br>
			</div>

			<div class="skill"><h2>Skills</h2>
			<p><?php echo $sname ?></p>
			<p><?php echo $slevel ?></p>
			<ul> 
				<li><?php echo $stype ?></li>
				<!--
				<li>CSS</li>
				<li>Javascript</li>
			-->
			</ul>
			<br>
			<br>
			</div>

			<div class="languages"><h2>Languages</h2>
			<p><?php echo $language_name ?></p>
			<p><?php echo $language_level ?></p>
			<br>
			<br>
			</div>

			<div class="interests"><h2>Interests</h2>
			<p><?php echo $iname ?></p>
			<ul> 
				<li><?php echo $itype ?></li>
				<!--
				<li>Lizards</li>
			-->
			</ul>
			<br>
			<br>
			</div>

			<div class="references"><h2>References</h2>
			<p> <?php echo $rname ?> </p>
			<br>
			<br>
			</div>
	
		</section>

		<footer>
			
		</footer>

	</body>
</html>