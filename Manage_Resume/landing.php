<html>
	
	<head>
		<title>Resu-Me Maker</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<header>
	<h1>Welcome to Resu-Me Maker!</h1>
</header>

<body>
	<div class="loginbox">
	<h2>Please Select a Login Option</h2>
		<form>
		  <button formaction="http://tmt2654-58683.000webhostapp.com/project/login.php" name="user_login" >User Login</button>
		</form>
		<form>
		  <button formaction="http://tmt2654-58683.000webhostapp.com/project/adminlogin.php" name="admin_login">Admin Login</button>
		</form>
	</div>
</body>

</html>

<style type="text/css">
body{
	background-image: url("train.gif");
	background-repeat:no-repeat;
	background-position: stretch center;
	background-size: cover;
	background-attachment: fixed;
}
 button{
    color: white;
    border: 1px solid rgba(0, 0, 0, 0.4);
    border-radius: 6px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    background: rgba(0,255,0,0.6);
    display: block;
	margin: 0 auto;
}

button:hover{
	background: rgba(0,255,0,0.8);
	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.8);
}

h1{
    background-color: rgba(255,255,255,0.5);
	text-align: center;
	padding: 20px;
	color: rgba(0,255,0,1);
	text-shadow: 1px 1px rgba(0,0,0,0.6);
}
h2{
	text-align: center;
	font-size: 20px;
	text-shadow:0 1px 1px rgba(0, 0, 0, 0.4);
}

.loginbox{
	background-color: rgba(255,255,255,0.6);
	border: 1px solid grey;
	box-shadow: 2px 3px 10px rgba(0,255,127,0.4);
	margin: 30px 15% 30px 15%;
	padding-top:10px;
}

</style>