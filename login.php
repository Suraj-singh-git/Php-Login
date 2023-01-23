<?php
session_start();


if(isset($_POST['username']) && isset($_POST['pwd'])) {
  $username = $_POST['username'];
  $password = $_POST['pwd'];
  
  
  $_SESSION['username'] = $username;

  // connect to the database
  
    $servername = "localhost";
    $dbusername = "extran7u_instaTest";
    $dbpassword = "KfH~Dk1RsYNR";
    $dbname = "extran7u_instaTest";



  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // check if the username and password match
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // redirect to the dashboard
    header("Location: dashboard.php");
  } else {
    echo "Invalid login credentials.";
  }
  $conn->close();
}
?>
