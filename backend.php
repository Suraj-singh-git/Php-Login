<?php
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$username = $_POST["username"];
$password = $_POST["password"];
 $image = $_FILES["image"];
// var_dump($image);

if(isset($_FILES['image'])) {
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
     move_uploaded_file($file_tmp,"images/".$file_name);
}


$servername = "localhost";
$dbusername = "extran7u_instaTest";
$dbpassword = "KfH~Dk1RsYNR";
$dbname = "extran7u_instaTest";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, age, gender, city, email, phone, username, password, image)
VALUES ('$name', '$age', '$gender', '$city', '$email', '$phone', '$username', '$password', '$file_name')";

if ($conn->query($sql) === TRUE) {
    header('Location: login.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
