<?php
error_reporting(0);
$servername = "localhost:3306";
$username="root";
$password="";
$database_name="gym";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if($conn)
{
    echo "connection succesfull";
}


?>
<!DOCTYPE html>
<html>
<head>
	<tittle>Nevermore Fitness Center</tittle>
	<link rel="stylesheet" type="text/css"  href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
<header>
	<nav>
		<div class="logo">
			<spam id="blue">NMFS</spam> 
		</div>
		<div class="menu">
		<a href="i.html">Home</a>
		<a href="about.html.html">About</a>
		<a href="services.html">Services</a>
		<a href="membership.php">Memberships</a>
		<a href="display.php">Members</a>
		<a href="contact.php">Contact</a>
		<a href="log.php">Login</a>
		<a href="#">Register</a>
	</div>
 
</nav>
<section id="Register">
	<div class="Register-info">

		<form  name="form2" method="POST" action="">
	<h1>Register<span id="blue">Here</span></h1>
		<div class="Register-row">
			<div class="Register-left-col">
				<div class="form">
					
				<form action="Register.php" method="post">
					<input type="text" name="fname"  placeholder="FName"value="" required/>
					<input type="text" name="lname"placeholder="LName"value="" required/>
					<input type="text" name="phone"placeholder="Phone" value="" required/>
					<input type="text" name="gender"  placeholder="Gender(M/F)" value="" required/>
					<input type="text" name="email" placeholder="Email" value="" required/>
					<input type="text" name="dob"  placeholder="dob" value="" required/>
					<br>
					<textarea rows="10" cols="40" name="addrss"placeholder="Address"></textarea>
					<a href="membership.php"><input type="submit" name="btn" value="submit form"></a>
					</div>
					</div>
							
				</form>
		
 </section>
 </header>




</body>
</html>
<?php
if (isset($_POST['btn]'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$addrss = $_POST['addrss'];}

	$sql = "INSERT INTO `register`(fname,lname,phone,gender,email,dob,addrss) 
						VALUES('$fname','$lname','$phone','$gender','$email','$dob','$addrss')";
	$data = mysqli_query($conn, $sql);
	if ($data) {
		echo "data entering";
	} else {
		echo "not entered";
	}



?>		