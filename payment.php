

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connection ok";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form - NMFS</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="" method="post">
            <!--Account Information Start-->
            <h4>Account</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="name" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" name="cardname" placeholder="Name on Card" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" name="email"  placeholder="Email Address" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="address" placeholder="Address" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="city" placeholder="City" required class="name">
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>
            <!--Account Information End-->


            <!--DOB & Gender Start-->
            <div class="input_group">
                <div class="input_box">
                    <h4>Date Of Birth</h4>
                    <input type="text" name="dd" placeholder="DD" required class="dob">
                    <input type="text" name="mm" placeholder="MM" required class="dob">
                    <input type="text" name="yy" placeholder="YYYY" required class="dob">
                </div>
                <div class="input_box">
                    <h4>Gender</h4>
                    <input type="text" name="gender" placeholder="Gender" required class="gender">
                </div>
            </div>
            <!--DOB & Gender End-->


            <!--Payment Details Start-->
            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Details</h4>
                    <input type="text" name="pay1" placeholder="creditcard_no" required class="card">
                    <input type="text" name="pay" placeholder="upi" required class="card">
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" name="card" class="name" placeholder="Card Number 1111-2222-3333-4444" required>
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" name="mem" class="name" placeholder="membership_id" required>
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="text" name="sm" placeholder="Start Month" required class="name">
                        <i class="fa fa-calendar icon" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="input_box">
                    <input type="text" name="em" placeholder="Exp Month" required class="name">
                    <i class="fa fa-calendar-o icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_box">
                <input type="number" name="ea" placeholder="Enter Amount" required class="name">
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>
            <!--Payment Details End-->

            <div class="input_group">
                <div class="input_box">
                    <button type="submit"name="paid">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
<?php
if (isset($_POST['paid'])) {
    $name = $_POST['name'];
    $cardname = $_POST['cardname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $dd = $_POST['dd'];
    $mm = $_POST['mm'];
    $yy = $_POST['yy'];
    $gender = $_POST['gender'];
    $pay1 = $_POST['pay1'];
    $pay = $_POST['pay'];
    $card = $_POST['card'];
    $mem = $_POST['mem'];
    $sm = $_POST['sm'];
    $em = $_POST['em'];
    $ea = $_POST['ea'];
    if (isset($_POST['paid'])) {
        $sql_query = "INSERT INTO MEMBERS  VALUES ('$name','$cardname','$email','$address','$city','$dd','$mm','$yy','$gender','$pay1','$pay','$card','$mem','$sm','$em','$ea')";
    }
    $data = mysqli_query($conn, $sql_query);
    if ($data) {
        echo "correct";
    } else {
        echo "incorrect";
    }
}
?>


        
