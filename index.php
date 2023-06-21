<?php
include 'Connection.php';
session_start();
$myquery = "select * from `plans`";
$result = mysqli_query($con, $myquery);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      
    </style>
    <title>VVI</title>
  </head>


  <body>


    <?php
include 'header.php';
?>

    <section class="main" id="main">
      <div>
         <h2><?php if(isset($_SESSION['name'])) echo($_SESSION['name']); ?></h2>
         <h2>Welcome to the Gamers Academy <br> <span><p>V</p>irtual <p>V</p>ictory <br> <p>I</p>nstitute</span></h2>
         <H3>For <span class="valo">Professional</span> lovers</H3>
         
         <a href="#product" class="main-btn">GO TO STORE</a>

        <div class="social-icons">
          
            <a href="https://www.youtube.com/" target="_blank" class="icons"><i class="fab fa-brands fa-youtube"></i></a>                                   
            <a href="https://www.facebook.com/" target="_blank" class="icons"><i class="fab fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="icons"><i class="fa-brands fa-instagram"></i></a> 
          
        </div>
      </div>
    </section>


    <section  id="services">
        <h2 class="title"> Why Virtual Victory Institute
 </h2>
        <div class="content">
            <div class="card">
              <div class="icon">
              <i class="fa-solid fa-gamepad"></i>
              </div>
              <div class="info">
                  <h3>Comprehensive Curriculum</h3>
                  <p>Gain a wide range of skills, from mastering game mechanics to strategic thinking, in our comprehensive and up-to-date courses.</p>
              </div>
          </div>

          <div class="card">
                <div class="icon">
                <i class="fa-solid fa-trophy"></i>
                </div>
                <div class="info">
                    <h3>Expert Instructors</h3>
                    <p>Learn from experienced gaming professionals who have excelled in the industry and are passionate about sharing their expertise.</p>
                </div>
            </div>

          <div class="card">
            <div class="icon">
            <i class="fa-solid fa-headset"></i>
            </div>
            <div class="info">
                <h3>Personalized Learning</h3>
                <p>Receive one-on-one mentoring, personalized feedback, and a supportive environment tailored to your individual needs.</p>
            </div>
          </div>
        </div>
    </section>

    <?php
        $myquery = "SELECT * FROM `product` WHERE selling = 'best-selling'";
         $result = mysqli_query($con, $myquery);

    ?>

    <section class="product" id="product">
      <h2 class="title">Best Selling</h2>
      <div class="content">
        <?php
        while($row = mysqli_fetch_array($result))
        {
        ?>
          <div class="product-card">
              <div class="product-image">
                  <a href="productDetails.php?number=<?php echo($row ['id']) ?>&type=product"><img src="productsImg/<?php echo($row ['img'])?>"/></a>
                  
              </div>
              <div class="product-info">
                  <p class="product-category"><?php echo $row ['Category'] ?></p>
                  <strong class="product-title">
                      <span><?php echo $row ['Name'] ?></span>
                      <h3 href="" class="more-details"><?php echo $row ['Price'] ?></h3>
                  </strong>
              </div>    
          </div>
       <?php  }  ?>
      </div>

    </section>
    
          <!-- Start #Pricing -->
          <section >
            
            <?php include 'pricing.php'; ?>
          </section>

    <!-- End #Pricing -->
    <section class="cards contacts" id="contacts">
      <h2 class="title"> Contacts </h2>
      <div class="content">
    
          <div class="card">
              <div class="icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="info">
                  <h3>Phone</h3>
                  <p>19000</p>
              </div>
          </div>

          <div class="card">
            <div class="icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="info">
                <h3>E-mail</h3>
                <p>VVI@gmail.com</p>
            </div>
        </div>
      </div>

    </section>

    

   <footer class="footer">
     <p class="footer-title">Copyright @ <span>Virtual Victory Institute</span></p>
     <div class="social-icons">
          
      <a href="https://www.youtube.com/" target="_blank" class="icons"><i class="fab fa-brands fa-youtube"></i></a>                                   
            <a href="https://www.facebook.com/" target="_blank" class="icons"><i class="fab fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="icons"><i class="fa-brands fa-instagram"></i></a> 
     </div>
     
   </footer> 
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
