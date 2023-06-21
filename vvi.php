<?php

include 'Connection.php';
session_start();
$type = $_GET ['type'];
$myquery = "SELECT * FROM `$type`";
            $result = mysqli_query($con, $myquery);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link href="css/style.css" rel="stylesheet" />
    
    
    <title>Search Page</title>
  </head>
<!-- ================================================= sort php ================================================= -->

  <?php
    if(isset($_POST['btnSort']))
        {
            $sch= $_POST['sort'];
            if($sch == "high")
            {
            $myquery = "SELECT * FROM `$type` order by price desc";
            $result = mysqli_query($con, $myquery); 
         }
         else if($sch == "low")
         {
            $myquery = "SELECT * FROM `$type` order by price Asc";
            $result = mysqli_query($con, $myquery); 
         }
        }
?>
<!-- ---------------------------------------------------------------------------------------------------------------- -->

<!--  -->
<!--  -->

<!-- ================================================= search php ================================================= -->
<?php
        if(isset($_POST['btnSearch'])) 
        {
            $sch= $_POST['src'];
        
            $myquery = "SELECT * FROM `$type` where Name like '%$sch%'";
            $result = mysqli_query($con, $myquery); 
        }

        ?>
<!-- ---------------------------------------------------------------------------------------------------------------- -->

  <body>
                                                               
    <header class>
        <a href="index.php" class="logo">VVI</a>
        <!-- search inputs -->
        <form method="post">    
            <div>    
            <input type="text" class="srcc" name="src" placeholder="Search">
            <button class="spage-btn" name="btnSearch" type="submit">search</button>
         </div>
      </form>

      <!-- sort inputs -->
         <form method="post">

        <nav class="navigation">

          <select name="sort"> 
            <option value="low">LOW</option>
            <option value="high">HIGH</option>
          </select>

          <button class="spage-btn" name="btnSort" type="submit">sort</button>
          
          </form>
        </nav>
    </header>
    
   
<!-- view -->
    <section class="product">   
      <h2 class="title">Our <?php $type ?></h2>
      <div class="content">
        <?php
        while($row = mysqli_fetch_array($result))
        {
        ?>
          <div class="product-card" onclick="windo">
              <div class="product-image">
                 <a href="productDetails.php?number=<?php echo($row ['id']) ?>&type=<?php echo($type)?>"><img src="productsImg/<?php echo($row ['img'])?>"/></a>    <!--  -->
              </div>
              <div class="product-info"> 

                  <p class="product-category">
                    <?php if($type == "coaches")
                    {echo( $row ['Role']);}else{
                      echo( $row ['Category']);
                    } ?>
                  </p>    <!--  -->
                  <strong class="product-title">
                      <div><?php echo $row ['Name'] ?></div>         <!--  -->
                      <div href="" class="more-details"><?php echo $row ['Price'] ?></div>  <!--  -->
                    </strong>
              </div>    
          </div>
       <?php  }  ?>
      </div>

    </section>
    
  </body>
</html>
