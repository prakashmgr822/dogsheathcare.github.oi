<?php
$host="localhost";
$user="root";
$password="";
$db="database2";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $user=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from admin where uname='".$user."' AND pass='".$password."'
    ";
    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);
    
    if($row["usertype"]=="admin")
    {
    header("location:panel.php");
    }
    elseif($row["usertype"]=="user")
    {
    header("location:userhomepage.php");
    }
    else
    {
        echo"username and password incorrect";
    }


    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <title>Login Form</title>
</head>
<body>
    <div class="center">
        <h1>Login Form</h1>
        <form method="POST" action="#">
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="login">
           <a href="bookingform.html">
            <input type="submit" value="Login" name="login"></a>
        </div>
            <div class="signup_link">
                <p>Not a member? <a href="r.php">Signup</a></p>

            </div>
        </form>
    </div>

 
    
</body>
</html>