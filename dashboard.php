<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-12 align-items-center text-center justify-content-center mt-5">
      <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
    </div>
    <div class="col-sm-12">
      <a href="product.php" class="btn btn-primary float-left m-3">Add Product</a>
      <a href="logout.php" class="btn btn-danger float-right m-3">Logout</a>
    </div>
  </div>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Contact Details</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
    <?php
    // connect to the database
    $servername = "localhost";
    $dbusername = "extran7u_instaTest";
    $dbpassword = "KfH~Dk1RsYNR";
    $dbname = "extran7u_instaTest";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // retrieve all user data from the database
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    // echo $result;
    // exit;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["age"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["city"]."</td>";
        echo "<td><img src='https://appzmachine.in/instaTest/images/".$row["image"]."' width='100' height='100'></td>";
        echo "</tr>";
      }
    } else {
      echo "No users found.";
    }
    $conn->close();
    ?>
    </tbody>
  </table>
</div>

</
