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
    <link rel="stylesheet" href="css/plan.css">
    
    <title>Product Details</title>
</head>
<body>
    <?php
include 'header.php';
?>
    <div class="container">
        <div class="box">
            <?php if($type == "plans"){?> 
                <div class="plans">
        <div class="plan plan--light">
            <h2 class="plan-title"><?php echo($row ['Name'])?></h2>

            <p class="plan-price"><?php echo($row ['Price'])?><span>/month</span></p>

            <p class="plan-description">
               <?php echo($row ['Description'])?>
            </p>

        </div>

    </div>
                <?php
            }else{?>
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
            <?php }?> 
            <div class="basic-info">
                <?php ?>
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
                    <?php if($type == "plans") { ?>
                    <?php if($product_id == 1) {?>

                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                     <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                     <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <?php }?> 
                    <?php if($product_id == 2) {?>

                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                     <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <?php }?> 
                    <?php if($product_id == 3) {?>

                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <?php }?> 
                    
                    <?php } ?>
                    
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