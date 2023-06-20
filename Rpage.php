
  
<?php

include 'Connection.php';
if(isset($_POST['userName']))
{

  $uname = $_POST['userName'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $pass = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];
  $email = $_POST['email'];
  $s = "select * from `users` where username = '$uname'";
  $res = mysqli_query($con, $s);
  $num = mysqli_num_rows($res);
  if ($num == 1)
  {
   echo "Username already taken";

  }

  else
  {
    $reg = "insert into `users`(username, email, password, firstName, lastName, address, city, phone, zip)values('$uname', '$email', '$pass', '$firstName', '$lastName', '$address', '$city', '$phone', '$zip')";
    mysqli_query($con, $reg);
    header("Location: Lpage.php");
  }

}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link href="css/style.css" rel="stylesheet" />
    
    
    <title>Registration Page</title>
  </head>


  <body>
  <form  method="post"> 
    <section>
    <!-- <h2 class="title"> Register </h2> -->
    <div class="sign-content">
  
        <div class="sign-card">
            <div class="sign">
              <p>Register</p>
            </div>
           
            <div class="info-reg">
              
                   
                    <input type="text" name="firstName" placeholder="First Name" required>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                    <input type="text" name="address" placeholder="Address" required>
                    <input type="text" name="city" placeholder="City" required>
                    <input type="text" name="phone" placeholder="Phone" required>
                    <input type="text" name="zip" placeholder="Zip" required>
                    <input type="text" name="userName" placeholder="username" required>
                    <input type="email" name="email" placeholder="email" required>
                    <input type="password" name="password" placeholder="password" required>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                    <br>
                    <input type="submit" name="uname" value="Register">
            </div>

        </div>
    </div>
        </form> 
</section>

  </body>


</html>