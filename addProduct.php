<?php
    
    $productname = $_POST['productname'];
    $image = $_FILES['image']['name'];
    $description = $_POST['description'];
    
    
    
     $image = $_FILES["image"];
    // var_dump($image);
    
    if(isset($_FILES['image'])) {
          $file_name = $_FILES['image']['name'];
          $file_size =$_FILES['image']['size'];
          $file_tmp =$_FILES['image']['tmp_name'];
          $file_type=$_FILES['image']['type'];
         move_uploaded_file($file_tmp,"products/".$file_name);
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
    
    $sql = "INSERT INTO products (productname, image, description)
    VALUES ('$productname', '$file_name','$description')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: productlist.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
