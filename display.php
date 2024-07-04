<?php
error_reporting(0);
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
</head>
<body>
	<style>

header{
	width: 100%;
	height: 100vh;
	background: rgba(128, 128, 128, 0.073);
	clip-path: hexagon(0% 0%,100% 0%,100% 100%,80% 80%,0% 100%);
	background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-photos-vectors%2Fgym-background&psig=AOvVaw0h1PDTDq-HSOPEStpMGPVi&ust=1675004844908000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMitrrjF6vwCFQAAAAAdAAAAABAD);
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
		<a href="#">Members</a>
		<a href="contact.php">Contact</a>
		<a href="log.php">Login</a>
		<a href="Register.php">Register</a>
	</div>
 
</nav>
<?php

$db= $conn;
$tableName="REGISTER";
$columns= ['fname','lname','phone','gender','email','dob','addrss'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY fname DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
<?php
include("developers.php");
?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>FirstName</th>
		 <th>LastName</th>
         <th>Phone</th>
         <th>Gender</th>
         <th>Email</th>
         <th>DOB</th>
         <th>ADDRESS</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['fname']??''; ?></td>
	  <td><?php echo $data['lname']??''; ?></td>
      <td><?php echo $data['phone']??''; ?></td>
      <td><?php echo $data['gender']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['dob']??''; ?></td>
      <td><?php echo $data['addrss']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>




