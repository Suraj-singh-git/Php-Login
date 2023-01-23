
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
      <h2 class="text-center">Product List</h2>
    </div>
   
  </div>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
          <th>Image</th>
        <th>Product Name</th>
        <th>Description</th>
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
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    // echo $result;
    // exit;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><img src='https://appzmachine.in/instaTest/products/".$row["image"]."' width='100' height='100'></td>";
        echo "<td>".$row["productname"]."</td>";
        echo "<td>".$row["description"]."</td>";
       
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
