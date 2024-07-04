<?php
//error_reporting(0);
$servername = "localhost";
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
	<link rel="stylesheet" type="text/css"  href="st.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
<header>
	<nav>
		<div class="logo">
			<spam id="blue">NMFS</spam> 
		</div>
		<div class="menu">
		<a href="i.php">Home</a>
		<a href="about.html.html">About</a>
		<a href="services.html">Services</a>
		<a href="membership.php">Memberships</a>
		<a href="display.php">Members</a>
		<a href="contact.php">Contact</a>
		<a href="log.php">Login</a>
		<a href="Register.php">Register</a>
	</div>
 
</nav>
<form method="post">
<section id="contact">
	<div class="services-info">
		<h1>Get in<span id="blue">Touch </span></h1>
		<p>We are Available</p>
		<div class="contact-row">
			<div class="contact-left-col">
				<div class="form">
					<input type="text" name="name" placeholder="Name">
					<input type="text" name="phone" placeholder="Phone">
					<input type="text" name="email"placeholder="E-mail">
					<br>
					<textarea rows="10" cols="40" name="mess" placeholder="Message"></textarea>
					<br> <button class="c-btn">Send</button>
				
				</div>
			</div>
			<div  class="contact-right-col">
				<h1><i class="fa fa-times" aria-hidden="true"></i>E-mail</h1>
				<p>nmfg2023@gmail.com</p><br>
				<h1><i class="fa fa-phone" aria-hidden="true"></i>Mobile</h1>
				<p>7889279333/9035799961</p><br>
				<h1><i class="fa fa-location-arrow" aria-hidden="true"></i>Address</h1>
				<p> Near Falcon Forum Mall<br>
				Ward no-198 ,KonanuKunte Cross,Bengaluru,Karnataka</p>
			</div>
		</div> 
		</div>
 </section>
</form>
</body>
 </html>

 <?php
    $Name=$_POST['name'];
    $phone = $_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['mess'];


   $sql_query= "INSERT INTO CONTACT  VALUES ('$Name','$phone','$email','$message')";
 $data = mysqli_query($conn, $sql_query);
 if($data)
 {
     echo "data entered successfully!";

 }
 else{
     echo "not entered";
 }

 ?>