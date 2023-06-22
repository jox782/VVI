<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link href="css/style.css" rel="stylesheet" />
  <title>login page</title>
</head>


<body>

  <section>
    <form action="log.php" method="post">
      <!-- <h2 class="title"> login or Register </h2> -->
      <div class="sign-content">
        <div class="sign-card">
          <div class="sign">
            <p>Login</p>
          </div>
          <div class="info">
            <input type="text" name="userName" placeholder="username" required>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <input type="submit" name="log" value="Login">
          </div>
        </div>
    </form>
  </section>
</body>


</html>