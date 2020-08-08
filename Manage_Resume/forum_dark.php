<?php 
include ('header.php');?>

<html>

	<head>
		<title>My Resume Web</title>
		<link rel="stylesheet" type="text/css" href="style_dark.css">
		<style type="text/css">
		body {
			font-size: 15px;
			color: white;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		span{
			display: inline-block;
			width : 120px;
			height:10px;
		}
		textarea {
		  width: 300px;
		  height: 150px;
		  font-family: Arial, Helvetica, sans-serif;
		  font-size: 14px;
		}
		table td {
			transition: all .5s;
		}
		.inputbox2{
			width:240px;
			padding-left: 10px;
		}
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td
		{
			background-color: #ffcccc;
		}
		caption{
            font-weight:bold;
            font-size:22px;
		}
	</style>
	</head>
	
	<body>
		<header>
			<h1>My Resume Web - <?php echo $_SESSION['userid'];?>                                           <a href="forum.php">Switch to Light Mode</a></h1>
			<nav>
				<ul>
					<li><a href="homepage_dark.php">Home</a></li>
					<li><a href="resume_form.php">My Resume</a></li>
					<li><a href="shop_dark.php">Shop</a></li>
					<li><a href="forum_dark.php">Forum</a></li>
					<li><a href="proofread.php">Services</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>
  		</header>
  		<section>
  		    <h1>Post Questions or any Discussion Topic</h1>
	<form method="POST" action="forum.php">
		<div>
			<span>Forum Username</span> : <input type="varchar" name="forum_name" class="inputbox2">
		</div>
		<div>
			<span>Title</span> : <input type="varchar" name="title" class="inputbox2">
		</div>
		<div>
			<span>Statement</span> : 
			<textarea rows="4" cols="50" name="forum_text">Enter text here...</textarea>
		</div>
		<div>
			<input type="submit" name="post_btn" value = "Submit">
		</div>
</form>
  		    <?php
 $sqli = "SELECT * FROM forum";
 $query = mysqli_query($db, $sqli);
 $rezult = $db->query($sqli);
?>
	<table class="data-table">
		<caption class="title">Forum and Discussions</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>Forum Username</th>
				<th>Title</th>
				<th>Statement</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$no 	= 1;
		while ($row = $rezult->fetch_array()){
			$statement  = $row['forum_text'] == 0 ? '' : number_format($row['forum_text']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['forum_name'].'</td>
					<td>'.$row['title'].'</td>
					<td>'.$row['forum_text'].'</td>
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>
 		
		</section>
		<footer>

		</footer>
		<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'>
	<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png" alt="000webhost logo"></a></div></body>
	
<html>
