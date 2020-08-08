<?php
 include('header.php');
if(isset($_POST['post_btn'])){
 	$userid = $_POST['userid'];
	$sql = "DELETE FROM user WHERE userid = '$userid'";
	mysqli_query($db,$sql);
	echo "<script>alert('The user has been deleted')</script>";
 }
?>
<html>
	
	<head>
		<title>Resu-Me Maker</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
	    <header>
		<h1>Resume Admin Dashboard</h1>
		
	</header>
<div class="container">
  <ul class="nav nav-pills">
    <li ><a href="adminhomepage.php">Home</a></li>
    <li class="active"><a href="dashboarddelete.php">Delete Registered User</a></li>
    <li><a href="dashboardforums.php">Forums</a></li>
    <li><a href="adminlogout.php">Logout</a></li>
  </ul>
</div>

<!-- Here lies the code for the table -->

<?php
 $sqli = "SELECT * FROM user";
 $query = mysqli_query($db, $sqli);
 $rezult = $db->query($sqli);
?>

	<table class="data-table">
		<caption class="title"><h4>Registered User List</h4></caption>
		<thead>
			<tr>
				<th>No</th>
				<th>First Name</th>
				<th>Email</th>
				<th>User ID</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$no 	= 1;
		while ($row = $rezult->fetch_array()){
			$statement  = $row['userid'] == 0 ? '' : number_format($row['userid']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['first_name'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['userid'].'</td>
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>

<!-- Input User ID and Delete -->
	<form method="POST" action="dashboarddelete.php">
	    <div class="ID">
	        <div class="userID">
			<span>Enter User ID</span> <input type="varchar" name="userid">
		</div>
		<div class="button">
			<input type="submit" name="post_btn" value="Delete">
			<input type="reset" name="post_btn1" value="Cancel">
		</div>
	    </div>
		
</form>




	</body>

</html>



<style type="text/css">
		.container{
			padding-top: :50px;
		}
		
		body{
		    background-image: url("admindelete1.jpg");
		    font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		
		header h1{
		    color: yellow;
		    font-family: lovelo;
		    text-align: center;
		}

		p {
			padding-top: 55px;
			padding-left:10px;
			font-size: 30px;
			text-align: left;
		}	

		
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
			background-color: rgb(121, 125, 127);
		}

		caption h4 {
			margin: 25px auto 0;
			text-align: center;
		}

		table td {
			transition: all .5s;
		}
		
		.title{
		    color: yellow;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			background-color: rgb(121, 125, 127);
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
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.ID{
		    text-align: center;
		    margin-top: 20px;
		}
		
		.button{
		    margin-top: 10px;
		    padding: 20px;
		}
		
		span{
		    color: white;
		}
		

	</style>