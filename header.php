<head><link rel="stylesheet" href="css/style.css"></head>
<header>
        <a href="index.php" class="logo">VVI</a>
        
        <nav class="navigation">
          <a class="src" href="vvi.php?type=coaches">Coaches</a>
          <a class="src" href="vvi.php?type=product">Store</a>
          <a class="src" href="#plans">Plans</a>
          <a href="#contacts">Contacts</a>

          <?php if(isset($_SESSION['role'])) {
            echo('<a href="log.php?logout=1">Logout</a>');
          } ?>
          <?php if(!isset($_SESSION['role'])) {
            echo('<a class="src" href="Lpage.php">Login</a>');
            echo('<a class="src" href="Rpage.php">Register</a>');
          } ?>

          <?php if(isset($_SESSION['role'])) {
            if($_SESSION['role'] == 'admin') {
            echo('<a class="src" href="addp.php?type=product">Add product</a>');
            echo('<a class="src" href="addCoaches.php?type=coaches">Add Coach</a>');
            }
          } ?>
          <?php if(isset($_SESSION['role'])) {
            if($_SESSION['role'] == 'user') {
            echo('<a class="src" href="allCoaches.php?type=coaches">My Instructors</a>');
            echo('<a class="src" href="allOrders.php?type=product">My Orders</a>');
            }
          } ?>
          
          
        </nav>


    </header>