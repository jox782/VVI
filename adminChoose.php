<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        a {
            text-decoration: none;
            color: var(--main-color);
        }
    </style>
</head>
<body>
    <!-- Start services -->
  <section id="services">
    <h2 class="title"> Mange Orders
    </h2>
    <div class="content">
      <div class="card">
        <div class="icon">
          <i class="fa-solid fa-gamepad"></i>
        </div>
        <div class="info">
          <h3 ><a href="adminOrders.php?type=coach-order"> Mange Coaches Orders</a></h3>
        </div>
      </div>

      <div class="card">
        <div class="icon">
          <i class="fa-solid fa-trophy"></i>
        </div>
        <div class="info">
          <h3><a href="adminOrders.php?type=product_order"> Mange Products Orders</a></h3>
        </div>
      </div>

      <div class="card">
        <div class="icon">
          <i class="fa-solid fa-headset"></i>
        </div>
        <div class="info">
          <h3><a href="adminOrders.php?type=plan_order"> Mange Plans Orders</a></h3>
        </div>
      </div>
    </div>
  </section>
  <!-- End services -->
</body>
</html>