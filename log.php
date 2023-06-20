<?php
include("connection.php");
session_start(); //must be to unset the session

if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['name']);
    // unset($_SESSION['userName']);
    unset($_SESSION['role']);
    header('Location:index.php');
}

if(isset($_POST['userName']))
{
    $username = mysqli_real_escape_string($con, $_POST["userName"]);
    $password =  mysqli_real_escape_string($con, $_POST["password"]);
    $loginCheck = "select * from `users` where username = '$username' && password = '$password'";
    $res = mysqli_query($con,$loginCheck);
    $row = mysqli_fetch_array($res);
    if (mysqli_num_rows($res) > 0) 
    {
        session_start();
        // $_SESSION['userName'] = $email;
        $_SESSION['role'] = $row['role'];
        $_SESSION['name'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header('Location:index.php');
    }
    else
    {
        header('Location:login.html');
    }

}
?>