<?php 
include ('header.php');

if(isset($_POST['delete_btn'])){
 	$forum_id2 = $_POST['forum_id2'];
	$sql = "DELETE FROM forum WHERE forum_id = '$forum_id2'";
	mysqli_query($db,$sql);
	echo "<script>alert('Entire Forum Post is deleted')</script>";
 }
 
?>

<html>

	<head>
		<title>My Resume Web</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
        form{
            background-color: rgba(255,255,255,0.5);
        }
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		h1{
		    text-align: center;
		}
		
		fieldset{
		    text-align:center;
		    margin: 5px 20% 10px 20%;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
			margin-bottom: 20px;
		}


		table td {
			transition: all .5s;
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
		.title{
		    font-size: 20px;
		    font-weight:bold;
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
			background-color: rgba(255,255,255,0.5);
		}
		label{
			display: inline-block;
			width : 220px;
			height:10px;
			padding-left:10px;
		}
		a{
		    margin-left:200px;
        	padding:0px 20px;
        	color: rgba(10,10,10,0.6);
        	background-color: rgba(100,100,255,0.5);
        	text-decoration: none;
        	border-radius: 10px;
        }
        a:hover{
        	color: rgba(255,255,255,1);
        	background-color: rgba(10,10,10,0.5);
        	border-radius: 10px;
        }
        
        input[type="text"], input[type="Email"], input[type="Password"], input[type="forum_id2"], {
            margin: 10px;
}
	</style>
	</head>
  		    <?php
 $sqli = "SELECT * FROM forum";
 $query = mysqli_query($db, $sqli);
 $rezult = $db->query($sqli);
?>
 		
 		<body>
		<header>
			<h1> Resume Information Form </h1>
		</header>
			<table class="data-table">
		<caption class="title">Forum and Discussions</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>Forum ID</th>
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
					<td>'.$row['forum_id'].'</td>
					<td>'.$row['forum_name'].'</td>
					<td>'.$row['title'].'</td>
					<td>'.$row['forum_text'].'</td>
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>
			<form method="POST" action="admin_forum.php" enctype="multipart/form-data">
				<fieldset>
					<legend> Edit Forum Details</legend>
					<div>
						<label for="name">Insert Forum Id You Want to edit</label>
						<input type="text" name="forum_id">
					</div>
					<div>
						<label for="phone">Forum Name</label>
						<input type="text" name="forum_name">
					</div>
					<div>
						<label for="address">Title</label>
						<input type="text" name="title">
					</div>
					
					<div>
						<label for="city">Statement</label>
						<input type="text" name="forum_text">
					</div>
						<div><input type="submit" name="edit_btn" value="Edit Details">
				</div>
					</fieldset>
			</form>
		</body>
		<form method="POST" action="admin_forum.php">
		    <fieldset>
	    <div class="ID">
	        <div class="userID">
			<legend>Forum Post You want to Delete </legend><label>(Enter Forum ID)</label> <input type="varchar" name="forum_id2">
		</div>
		<div class="button">
		    <div>
			<input type="submit" name="delete_btn" value="Delete">
			<input type="reset" name="post_btn1" value="Cancel">
		</div>
		<a href="adminhomepage.php">Back to Admin Page</a>
	    </div>
		</fieldset>
</form>
		</section>
		<footer>

		</footer>
	</body>

<?php 

if(isset($_POST['edit_btn'])){
	//Resume Form Variables
	$forum_id = $_POST['forum_id'];
	$forum_name = $_POST['forum_name'];
	$forum_text = $_POST['forum_text'];
	$title = $_POST['title'];

		
		$sql = "UPDATE forum SET forum_name = '$forum_name', forum_text = '$forum_text', title = '$title' WHERE forum_id = '$forum_id'";

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

<?php
 include('footer.php');
?>
