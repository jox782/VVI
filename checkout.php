<?php 
include("Connection.php");
session_start();
if(isset($_SESSION['id'])){
  

if($_GET['number'])
{
    $product_id = $_GET['number'];
    $type = $_GET['type'];
}
$myquery = "select * from `$type` where id = '$product_id'";
$result = mysqli_query($con, $myquery);
$row = mysqli_fetch_array($result);

$user_id = $_SESSION['id'];
$myquery_user = "select * from `users` where id = '$user_id'";
$result_user = mysqli_query($con, $myquery_user);
$row_user = mysqli_fetch_array($result_user);
}else{
  header('location: Rpage.php');
}
?>
<?php


if(isset($_POST['submit']))
{

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $email = $_POST['email'];
  $dbt = $_POST['dbt'];
  $product = $row ['Name'];
  $price = $row ['Price'];
    $addOrder = "insert into `order`(product, price, address, city, zip, customer_id)values('$product', '$price', '$address', '$city', '$zip', '$user_id')";
    mysqli_query($con, $addOrder);
 
  header('location: success.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/checkout/style.css">
  <title>Checkout</title>
</head>
<body>
  <div class="container">
  <div class="title">
      <h2>Product Order Form</h2>
  </div>
<form class="d-flex" method="POST">
  <div class="form">
    <label>
      <span class="fname">First Name <span class="required">*</span></span>
      <input type="text" name="firstName" value="<?php echo($row_user ['firstName'])?>" readonly>
    </label>
    <label>
      <span class="lname">Last Name <span class="required">*</span></span>
      <input type="text" name="lastName" value="<?php echo($row_user ['lastName'])?>" readonly>
    </label>
    <label>
      <span>Town / City <span class="required">*</span></span>
      <input style="color:black" type="text" name="city" value="<?php echo($row_user ['city'])?>" required> 
    </label>
    <label>
      <span>Street Address <span class="required">*</span></span>
      <input style="color:black" type="text" name="address" placeholder="House number and street name" value="<?php echo($row_user ['address'])?>" required>
    </label>
    <label>
      <span>Postcode / ZIP <span class="required" >*</span></span>
      <input style="color:black" type="text" name="zip" value="<?php echo($row_user ['zip'])?>" required> 
    </label>
    <label>
      <span>Phone <span class="required" >*</span></span>
      <input type="tel" name="phone" value="<?php echo($row_user ['phone'])?> "readonly> 
    </label>
    <label>
      <span>Email Address <span class="required" >*</span></span>
      <input type="email" name="email" value="<?php echo($row_user ['email'])?> "readonly> 
      
    </label>
  </div>
  <div class="Yorder">
    <table>
      <tr>
        <th colspan="2">Your order</th>
      </tr>
      <tr>
        <td><?php echo($row ['Name'])?></td>
        <td><?php echo($row ['Price'])?></td>
      </tr>
      <tr>
        <td ><img style="width: 100px" src="productsImg/<?php echo($row ['img'])?>"></td>
      </tr>
      <tr>
        <td>Subtotal</td>
        <td><?php echo($row ['Price'])?></td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td>Free shipping</td>
      </tr>
    </table><br>
    <?php if(isset($type)){
      if($type != "coaches"){
      ?>
      <div>
        <input type="radio" name="dbt" value="cd" required> Cash on Delivery
      </div>
      <?php }} ?>
      <div>
      <input type="radio" name="dbt" value="cd" required> Paypal <span>
      <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
      </span>
    </div>
    <button name="submit" type="submit">Place Order</button>
  </div><!-- Yorder -->
 </form>
</div>

</body>
</html>
