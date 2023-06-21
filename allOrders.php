<?php
include("connection.php");
session_start();
if (!isset($_SESSION['role'])) {
  header('Location:login.html');
}
$type = $_GET['type'];
$customer_id = $_SESSION['id'];
$selectOrders = "SELECT * FROM `$type` WHERE customer_id = '$customer_id'";
$res = mysqli_query($con, $selectOrders);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./css/orderHistory.css">

  <title>Show All Advices</title>
</head>

<body>
  <?php include 'header.php';
  ?>
  <h2><a href="index.php">My Orders</a></h2>
  <div class="outputs">
    <table>
      <tr>
        <th>Id</th>
        <th><?php echo ($type) ?></th>
        <th>Price</th>
        <th>Status</th>
      </tr>
      <tbody id="tbody">
        <?php
        while ($row = mysqli_fetch_array($res)) {
        ?>

          <tr>
            <td><?php echo ($row['id']) ?></td>
            <td><?php echo ($row['product']) ?></td>
            <td><?php echo ($row['price']) ?></td>
            <td><?php
                echo ($row['status']);
                ?></td>
            <td>
              <img style="width: 100px;" src="productsImg/<?php echo ($row['img']); ?>" />
            </td>
          <?php
        }
          ?>
          </tr>
      </tbody>
    </table>
  </div>
  </form>
  </div>
</body>

</html>