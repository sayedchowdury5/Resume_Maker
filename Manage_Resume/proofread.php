<?php
// session_start();
// require('connect.php');
include('header.php');
if (isset($_POST['hire'])){ 
                   $name=$_POST['name'];
                   $email=$_POST['email'];
                   $file=$_POST['file'];
        $sql = "INSERT INTO support (name, email, file)
         VALUES ('$name', '$email', '$file')";

        $db->query($sql);
        echo "<script>alert('Successfully uploaded');</script>";
}
if(isset($_POST['hire'])){
    $to = "khalifamir2001@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Please Help me check my resume";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }





// mysqli_close($conn); //connection close
?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  
  body{
      background-image: url("proofread.jpg");
      background-color: rgba(1,1,1,1)
	background-repeat: no-repeat;
	background-position: auto 100px;
	background-size: cover;
	background-attachment: fixed;
  }
  
h2{
	text-align: center;
	margin-top: 30px;
}



li{
	display: inline-block;
}


.section{
	margin-top: 0px;
}


.row{
	text-align: center;
	margin-top: 20px;
}

input[type="text"], input[type="Email"], input[type="Password"] {
	width: 50%;
}

input[type="submit"], input[type="reset"] {
	padding: 10px;
	width: 200px;

	background-color: rgba(128,128,0);
    border: none;
    color: white;
    text-align: center;
    letter-spacing: 1px;
    display: inline-block;
    font-size: 20px;
    margin: 20px auto;
    cursor: pointer;
}

header {
	/*background-color:rgba(50,50,50,0.5);*/
	/*color: white;*/
	/*padding: 15px;*/
	float: left;
	width: 100%;
	margin-bottom: 100px;
	color: white;
}

header  a{
	color:rgba(255,255,255);
	text-decoration: none;
	font-size: 20px;
	/*padding: 0 10px;*/
}
header  a:hover{
	color: black;
	text-decoration: none;
	background-color: rgba(255,255,255);
	border-radius: 10px;
}
nav ul{
	float: right;
	/*margin-top: -40px;*/
}
nav li{
	display: inline-block;
	padding-right: 10px;
}
nav li a{
	color : red;
	text-decoration: none;
	padding: 5px 20px;
	border: 1px solid #ddd;
}
nav li a:hover{
	color: black;
	background-color: #ddd;
	border: 1px solid #bbb;
}
nav li a:active{
	background-color: #aaa;
}
  </style>
</head>
   <header>
    <h1><h1>My Resume Web - <?php echo $_SESSION['userid'];?></h1>
        <nav>
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li><a href="resume_form.php">My Resume</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="forum.php">Forum</a></li>
          <li><a href="proofread.php">Services</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </nav>
    </header>

  <div class="section">
    <form class="admin" method="POST" action="proofread.php">
    
      <h2 class="hiree">Award $50</h2>
      <h2 class="hiree">Hire a Expart</h2>
    
  <div class="row" data-validate="Name is required">
    <div class="column1">
      <lavel for="Name">Name </level>
    </div>
    <div class="column2">
      <input type = "text" name = "name" required="required" placeholder="Name..">
  </div>

  <div class="row" data-validate="Email is required">
    <div class="column1">
      <lavel for="Email">Email</level>
    </div>
    <div class="column2">
      <input type = "text" name = "email" required="required" placeholder="Email..">
  </div>




  <div class="row" data-validate="Email is required">
       <div class="column1">
           <lavel for="Email">Message</level>
           </div>
           <div class="column2">
<textarea rows="5" name="message" cols="30"></textarea>
 </div>
 
  <div class="row" data-validate="File is required">
    <div class="column1">
      <lavel for="File">File </level>
    </div>
    <div class="column2">
      <input type = "file" name = "file" required="required" placeholder="File..">
  </div>
  <br><br>
    <input type="submit" name="hire" value="Add" class="add">
    <input type="reset" value="Reset" class="rset">
  </div> 
  </div>
  
</form>
</body>
</html>
</html>