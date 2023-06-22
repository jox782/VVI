<?php

include("connection.php");
  session_start();
  if($_SESSION['role'] != 'admin')
  {
    header('Location:index.php');
  }
  
 
  $type = $_GET['type'];
  
  $selectProducts = "SELECT * FROM `$type` WHERE status = 'pending'";
  $res = mysqli_query($con,$selectProducts);
  
?>

<?php 
        if(isset($_POST['searchBtn'])) 
        {
            $searchName= $_POST['search'];
        
            $myquery = "SELECT * FROM `$type` where Name like '%$searchName%'";
            $res = mysqli_query($con, $myquery); 
        }

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
                <?php if(!$type == "plan_order"){?> 
            <td>
              <img style="width: 100px;" src="productsImg/<?php echo ($row['img']); ?>" />
            </td> <?php }?> 
           <td><a href="adm.php?id=<?php echo($row['id'])?>&sta=accepted&type=<?php echo($type)?>" id="update">Accept</a></td>
              <td><a href="adm.php?id=<?php echo($row['id']) ?>&sta=denied&type=<?php echo($type)?>" id="delete">Deny</a></td>
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