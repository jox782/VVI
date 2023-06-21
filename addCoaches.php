<?php
include 'Connection.php';
session_start();
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $fileNameNew = uniqid('', true) . "." . $fileActualExt;
  $fileDestination = 'productsImg/' . $fileNameNew;
  move_uploaded_file($fileTmpName, $fileDestination);

  $name = $_POST['name'];
  $price = $_POST['price'];
  $role = $_POST['role'];
  $shortDesc = $_POST['shortDesc'];
  $longDesc = $_POST['longDesc'];
  $qu = "insert into `coaches` (Name, Role, Description, LongDescription, Price, img) values('$name','$role', '$shortDesc', '$longDesc', '$price', '$fileNameNew')";
  mysqli_query($con, $qu);
  echo "Added Successfully";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link href="/css/style.css" rel="stylesheet" />
  <title>add coaches</title>
</head>


<body>
  <?php
  include 'header.php';
  ?>


  <form method="post" enctype="multipart/form-data">
    <section>

      <div class="sign-content">
        <div class="sign-card">
          <div class="sign">
            <p>Add Coaches</p>
          </div>
          <div class="info">
            <input type="text" name="name" placeholder="product name" required>
            <input type="number" name="price" placeholder="price" required>
            <input type="text" name="role" placeholder="role" required>
            <input type="text" name="shortDesc" placeholder="short description" required>
            <textarea type="text" name="longDesc" placeholder="long description" class="add-text-area" required></textarea>
            <input type="file" name="file" placeholder="img" accept="image/png, image/jpeg">
            <br>
            <input type="submit" name="submit" value="Add">
          </div>
        </div>
      </div>
  </form>


</body>


</html>