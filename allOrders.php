<?php
include("connection.php");
  session_start();
  if(!isset($_SESSION['role']))
  {
    header('Location:login.html');
  }
  $customer_id = $_SESSION['id'];
  $selectAdvices = "SELECT * FROM `product_order` WHERE customer_id = '$customer_id'";
  $res = mysqli_query($con,$selectAdvices);
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;800&display=swap"
      rel="stylesheet"
    />
    
    <style> * {
  margin: 0;
  padding: 0;
}
:root {
  --body-background: #222;
  --input-background: #111;
  --input-focus-background: #000;
  --font-color: #000;
  /* --primary-color: #cf6679; */
  --primary-color: hsl(150, 100%, 66%);
  --primary-color-hover: #d64e67;
}

body {
  color: var(--font-color);
  font-family: system-ui;
}
/* Start output */
h1 {
  text-align: center;
  width: 50%;
  margin: 50px auto 0px auto;
  color: var(--primary-color);
}
table a {
  width: 25%;
  border: none;
  cursor: pointer;
  border-radius: 20px;
  margin: 10px 0;
  transition: 0.1s;
  font-size: large;
  font-weight: bold;
  padding: 10px;
  text-decoration: none;
}
#update {
  color: var(--primary-color);
}
#delete {
  color: #d64e67;
}
table a:hover {
  filter: contrast(200%);
}

table {
  width: 80%;
  text-align: center;
  margin: auto;
  margin-top: 50px;
}
table th {
  text-transform: uppercase;
}

th {
  width: 10%;
  padding: 15px;
  font-size: 22px;
}
td {
  width: 10%;
  padding: 5px;
}
/* End output */
</style>
    <title>Show All Advices</title>
  </head>
  <body>
    <?php include 'header.php';
 ?>
        <h2><a href="index.php">Advice Generator</a></h2>
        <div class="outputs">
        <table>
          <tr>
            <th>Id</th>
            <th>Coach</th>
            <th>Price</th>
            <th>Status</th>
          </tr>
          <tbody id="tbody">
            <?php
                while($row = mysqli_fetch_array($res))
                {
              ?> 

            <tr>
              <td><?php echo($row['id']) ?></td>
              <td><?php echo($row['product']) ?></td>
              <td><?php echo($row['price']) ?></td>
              <td><?php 
                echo($row['status']);
              ?></td>
            <?php 
            }
            ?>
            </tr>
          </tbody>
        </table>
      </div>

      
    </form>
    </div>
    <script src="./main.js"></script>
  </body>
</html>