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
	<title>Kitts InBoots</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="theme-59395.css">
	<!--<link rel="stylesheet" type="text/css" href="theme-59395.css">-->
</head>
<body>

	<header>
		<h1><?php echo $name ?></h1>
		<h2>Student</h2>
		<div class="logo"><img src = "data:image/jpeg;base64,<?php echo base64_encode( $img_content ); ?>" alt = "Kitts Inboots"></div>              <!-- Photo-->
	</header>

	<section class="about">

		<div><h2> <i class="fa fa-user"></i> About</h2></div>
		<div class="summary">
			<p><?php echo $about ?></p>                                                               <!-- about-->
		</div>

		<section class="contact">

			<!--
				<div class = "text-row1"><span class = "text-col1"> <i class="fa fa-globe" style="font-size: 25px;"></i> </span><a href = "https://www.kittywithasword.com.my"><?php echo $cwebsite ?></a></div>          <company website>
			-->

		<div class = "text-row1"><span class = "text-col1"> <i class="fa fa-envelope" style="font-size: 25px;"></i> </span><a href = "<?php echo $email ?>"><?php echo $email ?></a></div>                    <!-- email -->

		<div class = "text-row1"><span class = "text-col1"> <i class="fa fa-phone-square" style="font-size: 25px;"></i> </span><?php echo $phone ?></div>                                                                <!-- contact number-->
		</section>

		<section class = "location">
			<h3> <i class="fa fa-map-marker"></i> Location</h3>
			<div class = "text-row"><span class = "text-col">Address</span><?php echo $address ?></div> <!-- address -->

			<div class = "text-row"><span class = "text-col">Postal Code</span><?php echo $postcode ?></div> <!-- post code-->

			<div class = "text-row"><span class = "text-col">City</span><?php echo $city ?></div>             <!-- city-->	

			<div class = "text-row"><span class = "text-col">Region</span><?php echo $region ?></div>        <!-- region-->
		</section>

<!--
		<section class="profiles">
			<h3> <i class="fa fa-user-plus"></i> Profiles</h3>
			<div class = "text-row2"><span class="text-col2"> <i class="fa fa-twitter-square" style="font-size: 30px;"></i></span><span id="twitter"><a href = "https://www.twitter.com/pawssiblyDangerous">PawssiblyDangerous</a></span></div>
			<div class = "text-row2"><span class="text-col2"> <i class="fa fa-instagram" style="font-size: 30px;"></i></span><span id="instagram"><a href = "https://www.instagram.com/meowmiaosmiuas">MeowMiaosMiuas</a></span></div>
		</section>
	</section>
-->


	<section class="skill">
		<div><h2> <i class="fa fa-tasks"></i> Skills</h2></div>
		<div class="skills">
			<div id="skill_name"><b><?php echo $sname ?></b></div>                         <!-- skill name-->
			<div id="skill_position"><em><?php echo $slevel ?></em></div>                 <!-- skill level-->

		<ul>
			<li><?php echo $stype ?></li>                                                  <!-- stype-->
			<!--
			<li>CSS</li>
			<li>Javascript</li>
		-->
		</ul>
		</div>
	</section>


	<section class="work">
		<div><h2> <i class="fa fa-suitcase"></i> Work </h2></div>

		<div class="works">
			<div id="work_date"><?php echo $wtime ?></div>                              <!-- working duration-->

			<div id="work_name"><b><?php echo $cname ?></b></div>                       <!-- company name-->

			<div id="work_website"> <i class="fa fa-globe"></i> <a href="<?php echo $cwebsite ?>"><?php echo $cwebsite ?></a></div> <!-- company website-->

			<div id="work_position"><b><?php echo $wposition ?></b></div>             <!-- working position-->


			<p><?php echo $cdetails ?></p>                                           <!-- company details-->
		
			<ul>
				<li><?php echo $responsibility ?></li>                             <!-- working responsibility-->
				<!--
				<li>Rocking my paws in boots</li>
				<li>Planning, coordinating & executing rescue operations for damsels in distress while only using a 5cm sword</li>
			-->
			</ul>
		
		</div>
	</section>


	<section class="award">
		<div><h2> <i class="fa fa-certificate"></i> Awards</h2></div>
		<div class = "awards">
			<div id="award_date"><?php echo $adate ?></div>                                 <!-- award date-->

			<div id="award_name"><b><?php echo $aname ?></b></div>                          <!-- award name-->

			<div id="award_title"> <i class="fa fa-trophy"></i> <?php echo $atype ?></div> <!-- award title-->

		<p><?php echo $adetails ?></p>                                                        <!-- award details-->
	</div>
	<!--<img src="img/kittaward.jpg" id="award_image">-->
	</section>


	<section class="language">
		<div><h2> <i class="fa fa-language"></i> Languages</h2></div>
		<div class="languages">
			<div id="language_name"><strong><?php echo $language_name ?></strong></div>       <!-- language name-->

		<div><i><?php echo $language_level ?></i></div>                                       <!-- language level-->
		</div>
	</section>
	

	<section class="interest">
		<div><h2> <i class="fa fa-heart"></i> Interests</h2></div>
		<div class="interests">
			<div id="interest"> <strong> <?php echo $iname ?> </strong></div>           <!-- interest name-->

		<ul>
			<li><?php echo $itype ?></li>                                               <!-- interest type-->
			<!--
			<li>Lizards</li>
		-->
		</ul>
		</div>
	</section>

	<section class="reference">
		<div><h2> <i class="fa fa-check-square"></i> References</h2></div>
		<div class = "references"><?php echo $rname ?></div>                            <!-- referer name-->
	</section>

	<div id="footer"><footer>&copy; 2018, All Copyright Reserved.</footer></div>

</body>
</html>