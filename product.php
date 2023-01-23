<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container align-items-center text-align-center w-100 m-5 border">
        <h1 class="align-items-center text-align-center text-center">Add product Here</h1>
        <form action="addProduct.php" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="form-group">
            <label for="productname">Product Name:</label>
            <input type="text" class="form-control" id="productname" name="productname">
          </div>
          <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="form-group">
            <label for="description">Description (15 words or less):</label>
            <textarea class="form-control" id="description" name="description" maxlength="15"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>