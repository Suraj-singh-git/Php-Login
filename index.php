

<!DOCTYPE html>
<html lang="en">
<head>
  <title>RegisterForm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <h1 class="text-center">Register Form</h1>
          <form action="backend.php" method="post" enctype="multipart/form-data" autocomplete="off">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <select class="form-control"  name="gender" id="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </div>
  <div class="form-group">
    <label for="address">City/Address</label>
    <input type="text" class="form-control" id="address" name="city" placeholder="Enter your city or address">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your desired username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password"  placeholder="Enter your desired password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
        <div class="col-md-4"></div>
      
  </div>
  
    
    
    
    
    
</body>
</html>    