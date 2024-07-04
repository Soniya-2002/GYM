<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    //echo "Connection ok";
}
?>


<!DOCTYPE html>
<html>
	<head>

	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<tittle>
			NMFS
		</tittle>
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
		<style>
			title{
			color: crimson;
			}
			.loginform{
	width: 100%;
	height: 100vh;
	background: rgba(128, 128, 128, 0.073);
	clip-path: hexagon(0% 0%,100% 0%,100% 100%,80% 80%,0% 100%);
	background-image: url(https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77700323120.jpg);
	background-position: center;
	background-size: cover;
	text-align: center;

}
.loginform h1{
	color: bisque;
	 }
	 .form{
	width: 60%;
	margin: auto;
	text-align: center;
}
.form input[type="text"]{
	width: 70%;
	padding: 10px;
	margin-bottom: 10px;
}
.form input[type="pwd"]{
	width: 70%;
	padding: 10px;
	margin-bottom: 10px;
}
.c-btn{
	color: chocolate;
}
			</style>
<header>
		<div class="loginform">
			<h1>ADMIN LOGIN</h1>
			<form method="POST" action="">
				<div class="form">

			<input type="text" placeholder="AdminName"name="admin">
		</div>
		<div class="form">
			<input type="password" placeholder="Password" name="pwd">
		</div>
		<button type="c-btn" name="sub"><a href="i.php">Sign In</a></button>
				</form>
		</div>
		</header>
	</body>
</html>
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    //echo "Connection ok";
}
?>
<?php



if(isset($_POST['sub']))
{
    $query = "SELECT * FROM 'login' WHERE 'admin' = '$_POST[admin]' AND 'pwd'='$_POST[pwd]'";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==2)
    {
        echo "correct";
    }
    else{
        echo "incorrect";
    }
}
?>