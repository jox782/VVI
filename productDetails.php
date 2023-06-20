<?php 
include("Connection.php");
session_start();
if($_GET['number'])
{   

    $product_id = $_GET['number'];
    $type = $_GET['type'];
}
$myquery = "select * from `$type` where id = '$product_id'";
$result = mysqli_query($con, $myquery);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/product detalis/css/all.min.css">
    <link rel="stylesheet" href="css/product detalis/css/style.css">
    
    <title>Product Details</title>
</head>
<body>
    <?php
include 'header.php';
?>
    <div class="container">
        <div class="box">
            <div class="images">
                <div class="img-holder active">
                    <img src="productsImg/<?php echo($row ['img'])?>"/>
                </div>
                <div class="img-holder">
                    <img src="productsImg/<?php echo($row ['img'])?>"/>
                </div>
                <div class="img-holder">
                    <img src="productsImg/<?php echo($row ['img'])?>"/>
                </div>
                <div class="img-holder">
                    <img src="productsImg/<?php echo($row ['img'])?>"/>
                </div>
            </div>
            <div class="basic-info">
                
                <h1><?php echo($row ['Name']) ?></h1>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <span><?php echo ($row ['Price']) ?></span>
                <div class="options">
                    <a href="checkout.php?number=<?php echo($row ['id']) ?>&type=<?php echo($type) ?>">Buy It Now</a>
                </div>
            </div>
            <div class="description">
                <p><?php echo($row ['LongDescription']) ?></p>
                <ul class="features">
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                </ul>
                <ul class="social">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>