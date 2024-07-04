<?php
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
	<tittle>Nevermore Fitness Studio</tittle>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<style>
	
header{
	width: 100%;
	height: 100vh;
	background: rgba(128, 128, 128, 0.073);
	clip-path: hexagon(0% 0%,100% 0%,100% 100%,80% 80%,0% 100%);
	background-image: url(https://th.bing.com/th/id/R.d1ac14f956910110e16dcf4e6837dd96?rik=gMF83HMk71if1A&riu=http%3a%2f%2fwww.comarcastle.com%2fsites%2fdefault%2ffiles%2ffitnesswellness_istock_000017220214medium_0.jpg&ehk=EI1ckjQQfcskyUkpdQ4qa%2fF7XPGKJoavAoGi%2fvogtiw%3d&risl=&pid=ImgRaw&r=0);
	background-position: center;
	background-size: cover;
	text-align: center;
}
.header{
	width: 100%;
	height: 100vh;
	background: rgba(128, 128, 128, 0.073);
	clip-path: hexagon(0% 0%,100% 0%,100% 100%,80% 80%,0% 100%);
	background-image: url(https://www.wan.com.br/wp-content/uploads/2017/08/about-us-background.png);
	background-position: center;
	background-size: cover;
	text-align: center;
}
.container h2{
	text-align: center;
	color: crimson;
	font-size: 50px;
}
.left h1{
	color: crimson;
	padding-left: 500px;
}
.left img{
	padding-right: 600px;
	padding-top: 100px;
}
.right img{
	padding-right: 600px;
	padding-top: 100px;
}
nav{
	width: 100%;
	height: 100px;
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	color: white;
}
.logo{
	font-size: 50px;
	font-weight: bold;
	letter-spacing: 5px;

}
#blue
{
	color:crimson;
}
.menu a{
	text-decoration: none;
	color: black;
	font-size: 20px;
	font-weight: bold;
	padding: 5px;
	margin: 10px;
}
.menu a:first-child{
	border-bottom: 2px solid  crimson;
}  
.icons img{
	width: 10px;
}
.container{
	width: 100%;
	display: flex;
	justify-content: center;
	color: black;

}
.right{
	flex-basis: 50%;
	height: 50vh;
	width:  100%;
	font-style: Verdana;
	
}
.right h1{
	color: crimson;
	font-size: 50px;
}
.right p{
	font-size: 25px;
	margin: 10px 0px;
}
.right p1{
	font-size: 25px;
	margin: 10px 0px;
}
.btn{
	background: crimson;
	text-emphasis-color: white;
	padding: 10px 20px;
	color: black;
	border: 2px solid crimson;
	border-radius: 8px;
}
#c-btn{
	background: transparent;
	padding: 10px 20px;
	color: crimson;
	border: 2px solid black;
	border-radius: 8px;
	float: left;
}
.c-btn{
	background: transparent;
	padding: 10px 20px;
	color: crimson;
	border: 2px solid black;
	border-radius: 8px;
	float: left;

}
.btn:hover{
	color: white;
}
#c-btn:hover{
	color: chocolate;
}
.c-btn:hover{
	color: chocolate;
}
#about{
	padding: 100px 0px;
	background-image: url(https://images.pexels.com/photos/260352/pexels-photo-260352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
	background-position: center;
	background-size: cover;
}
#abouts{
	padding: 100px 0px;

}
.b-btn{
	float: center;
	border-radius: 8px;
	background: transparent;
	border-color: crimson;
	padding: 10px 15px;
}
.b-btn:hover{
	color: aqua;
}
.bu-btn{
	float: center;
	border-radius: 8px;
	background-color: aquamarine;
	border-color: black;
	padding: 10px 20px;
}
.bu-btn:hover{
	color: crimson;
}
.about-row{
	width: 100%;
	display: flex;
	justify-content: space-around;
	align-items: center;
}
.about-right-col{
	flex-basis: 50%;
	text-align: center;
}
.about-right-col img{
	padding-top: 20%;
	padding-bottom: 10%;
	width: 80%;
}
#p-title{
	color: crimson;
	font-weight: bolder;
}
.about-left-col{
	max-width: 400px;
	margin: auto;
	flex-basis: auto;
}
.about-left-coll{
	max-width: 600px;
	margin: auto;
	flex-basis: auto;
}
.about-left-col h1{
	padding-bottom: 50px ;
	font-size: 50px;
}
.about-left-col p{
	font-size: 20px;
	text-align: justify;
	margin: 15px 0px;
}
.invisible-content p{
	padding-top: 600px;
	padding-right: 1000px;
	color: ghostwhite;
}
#signup{
	padding-top: 50px;
	padding-bottom: 20px;
}
.signup-row{
	display: flex;
	justify-content: space-around;
	align-items: center;
}
.signup-left-col{
	flex-basis: 50%;
	text-align: center;
}
.signup-left-col img{
	width: 60%;
}
.signup-right-col{
	flex-basis: 50%;
}
.signup-right-col h1{
	font-size: 90px;
}
.signup-right-col h2{
	font-size: 45px;
	Letter-spacing: 60px;
	color: rgba(0,0,0,0.3);
	margin: 10px 0px;
}
#services{
	padding: 50px 0px;

}
.services-info{
	text-align: center;
}
.services-info h1{
	font-size: 50px;
	text-align: center;
}
.services-info p{
	font-size: 25px;
	font-weight: bold;
	text-align: center;
}
.services-row{
	display: grid;
	grid-template-columns: repeat(3,200px);
	grid-auto-rows: minmax(150px,auto);
	grid-gap: 3em;
	justify-content: center;
	padding-top: 20px;
}
.services-box{
	box-shadow: 2px 3px 5px grey;
	padding: 10px;
	text-align: center;
}

.services-box i{
	background:#0984e3;
	color: white;
	font-size: 30px;
	padding: 10px;
	margin-top: 20px;
}
#members{
	padding: 100px;
	text-align: left;
	
}
.member-card{
	text-align: center;
	padding-top: 50px;
	width: 50%;
	margin:auto;
}
#works{
	padding-top: 50px;
	padding-bottom: 200px;
}
.work-box{
	box-shadow: 2px 2px 5px grey;
	text-align: center;
}
.work-box img{
	width: 100%;
	height: 100%;
}
#contact{
	padding: 30px 0px;
}
.contact-row{
	display: flex;
	justify-content: center;
	align-items: center;
}
.contact-left-col{
	flex-basis: 50%;
	padding-top: 50px;
}
.contact-right-col
{
	flex-basis: 50%;
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
.form input[type="email"]{
	width: 70%;
	padding: 10px;
	margin-bottom: 10px;
}
.form input[type="Date"]{
	width: 70%;
	padding: 10px;
	margin-bottom: 10px;
}
textarea{
	width: 70%;
	padding: 10px;
	margin-bottom: 10px;
}
.Register-info h1{
	text-align: center;
	font-size: 50px;
	font-weight: bolder;
}
.Register-left-col{
	flex-basis: 50%;
	padding-top: 50px;
}
.fa fa-envelope{
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
	</style>
<body>
<header>
	<nav>
		<div class="logo">
			<spam id="blue">NMFS</spam> 
		</div>
		<div class="menu">
		<a href="#">Home</a>
		<a href="about.html.html">About</a>
		<a href="services.html">Services</a>
		<a href="membership.php">Memberships</a>
		<a href="display.php">Members</a>
		<a href="contact.php">Contact</a>
		<a href="log.php">Login</a>
		<a href="Register.php">Register</a>
	</div>
 
</nav>
<div class="container">
	
	<div class="right">
		<p>WELCOME TO</p>
		<h1>NEVERMORE Fitness Studio</h1>
		<p1>Bangalore,Karnataka</p1>
		<button class="btn"><a href="Register.php">Join us</a></button>
	</div>
</div>
</header>
<section id="about">
<div class="about-row">
	<div class="about-left-col">
		<h1>HEAD COACHES OF<span id="blue"></span></h1>
		<p id="p-title">NEVERMORE GYM</p>
		<p>
			Mr.Prathap
			&
			Ms Sanjana
		</p>
		</div>
		<div class="invisible-content">
			<p>
			Mr.Prathap who has a great experience in Fitness training and WordPress plugins are easy-to-use that help you save from writing burdensome codes and implement complex functionalities in a fraction of seconds.

			But with overwhelming numbers of plugins in the WordPress directory and thousands more available on third-party websites, developers may get exhausted deciding upon the right tools that aid in achieving desired outcomes.
		
			</p>
			</div>
	</div>

		<button id="c-btn">Read more</button>


</section>
<section id="signup">
<div class="signup-row">
<div class="signup-left-col">
	<img src="https://cdn.pixabay.com/photo/2017/08/07/14/02/man-2604149__340.jpg"alt="gym2">
</div>

<div class="signup-right-col">
		<h1>BEING<span id="blue">BODY</span></h1>
		<h2>BUILDER</h2>
		<button class="c-btn"><a href="Register.php">SignIn</a></button>
</div>
</section>
<section id="members">
<div class="services-info">
	<h1>Our<span id="blue">Members</span></h1>
	<p>What our members say</p>

</div>
<div class="member-card">
	<img src="https://f-i-t.com.au/wp-content/uploads/2020/09/Blog_client_base-13-07-2020-2.jpg" alt="vishal" width="500" height="300">
	<h2>Vishal Sinha,Gym Client</h2>
	<p>Extremely happy with the services provided by NMFG</p>
	<p>being a member i can guarentee that you will have a fit and wonderfull life hereby!! </p>

</div>

</section>
<section id="works">
	<div class="services-info">
		<h1>Our<span id="blue">Services</span></h1>
		<p>What we provide</p>
	</div>
	<div class="services-row">
		<div class="work-box">
			<img src="https://harcourthealth.com/wp-content/uploads/2013/08/cardio-1024x682.jpg">
			<h1>Cardio</h1>
		</div>
		<div class="work-box">
			<img src="https://th.bing.com/th/id/OIP.fKvp3cAru1foDcygzLzkWAHaE8?pid=ImgDet&rs=1">
			<h1>Trainers</h1>
		</div>
		<div class="work-box">
			<img src="https://i.ytimg.com/vi/x3VwguYQElg/maxresdefault.jpg">
			<h1>Nutritions</h1>
		</div>
		<div class="work-box">
			<img src="https://th.bing.com/th/id/OIP.DUx-7kdxkRpv2zQv0X0FlQHaGN?pid=ImgDet&rs=1">
			<h1>Physiotherapy</h1>
		</div>
		<div class="work-box">
			<img src="https://www.timeshighereducation.com/sites/default/files/yoga_class.jpg">
			<h1>yoga_class</h1>
		</div>
		<div class="work-box">
			<img src="https://ymcasouthflorida.org/wp-content/uploads/2019/09/AdobeStock_282610703.jpeg">
			<h1>Swimming Pool</h1>
		</div>
	</div>
</section>
 <section id="contact">
	<div class="services-info">
		<h1>Get in<span id="blue">Touch </span></h1>
		<p>We are Available</p>
		<div class="contact-row">
			<div class="contact-left-col">
				<div class="form">
					<input type="text" name="" placeholder="Name">
					<input type="text" name="" placeholder="Phone">
					<input type="text" name=""placeholder="E-mail">
					<br>
					<textarea rows="10" cols="40" placeholder="Message"></textarea>
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
 <section id="Register">
	<div class="Register-info">
		<h1>Register<span id="blue">Here</span></h1>
		<div class="Register-row">
			<div class="Register-left-col">
				<div class="form ">
					<form action="Register.php" method="post">
					<input type="text" name="fname"  placeholder="FName"value="" required/>
					<input type="text" name="lname"placeholder="LName"value="" required/>
					<input type="text" name="phone"placeholder="Phone" value="" required/>
					<input type="text" name="gender"  placeholder="Gender(M/F)" value="" required/>
					<input type="text" name="email" placeholder="Email" value="" required/>
				DOB <input type="Date" name="dob"  placeholder="DOB(YYYY-MM-DD)" value="" required/>
					<br>
					<textarea rows="10" cols="40" name="addrss"placeholder="Address"></textarea>
					<a href="membership.php"><input type="submit" name="btn" value="submit form"></a>
				</form>
				</div>
			</div>
		</div>
	</div>
 </section>
</body>
</html>