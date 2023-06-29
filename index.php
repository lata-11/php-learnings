<?php
if(isset($_POST['name'])) {
$server= "localhost";
$username = "root";
$passwor = "";

$con = mysqli_connect($server, $username, $password);

if(!$con) {
    die("connection to this database failed due to". mysqli_connect_error());
}
//echo "successfully connected to db";
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$email = $_POST['email'];
$discp = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip_us` (`name`, `gender`, `phone`, `age`, `email`, `discp`) VALUES ('$name', '$gender', '$phone', '$age', '$email', '$discp');";

//echo $sql;

if($con->query($sql)==true) {
    echo "successfully inserted";
}
else {
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to IIITM US Trip!</h3>
        <p>Enter your details to confirm your participation</p>
        <form action="index.php" method="post">
            <div class="form">
            <input type="text" name="name" id="name" placeholder="Enter your name...">
            <input type="text" name="gender" id="gender" placeholder="Gender">
            <input  name="phone" id="phone" placeholder="Phone">
            <input type="age"  name="age" id="age" placeholder="age">
            <input type="email" name="email" id="email" placeholder="email">
            <textarea name="desc" id="desc" cols="30" row="10" placeholder="Anything else.."></textarea>
        </div>
        <div class="button">
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </div>
        </form>
    
    </div>

  <script src="index.js"></script>  
  <!-- INSERT INTO `trip_us` (`sno`, `name`, `gender`, `phone`, `age`, `email`, `discp`) VALUES ('1', 'lata', '1', '8340776128', '19', 'lata@gmail.com', 'heyyy, happy to be here!'); -->
</body>
</html>