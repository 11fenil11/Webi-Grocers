<?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";
$dbd=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['register_btn'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($password == $password2){
    $_SESSION['user']=$username;
    $sql="insert into loginform(User,Password,email) values('$username','$password','$email')";
    $run_query=mysqli_query($dbd,$sql);
    echo"<script>window.open('customerwall.php','_self')</script>";
    exit();
}else{
    echo"<script>alert('incorrect')</script>";
        
}

}
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
    <title>Customer Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/lgcss.css">
    </head>
    
<body >
     <div class="navbar">
        <ul class="ui">
            
            <li><button><a href="customerwall.php">Place Order</a> </button></li>
            <li><button><a href="orderwall.php">My Orders</a></button></li>
            <li><button><a href="logout.php">Logout</a></button></li>
            <li><button><a href="ratebook.php">Ratebook</a></button></li>
            <li><button><a href="aboutus.php">About us</a></button></li>
      </ul>    
        </div>
    <div class="login-page">
    <div class="form">
           <form method="post" class="register-form" action="#">
        <input type="text" name="username" placeholder="name"/>
        <input type="password" name="password" placeholder="password"/>
        <input type="password" name="password2" placeholder="password2"/>
        <input type="text" name="email" placeholder="email-id"/>
        <input type="submit" name="register_btn" value="SIGN UP!"/>    
         <p class="msg">Already in?<a href="#">Login</a></p>
        </form>
        <form method="POST" action="#" class="Login-form">
        <input type="text" name="username" placeholder="name"/>
        <input type="password" name="password" placeholder="password"/>
        <input type="submit" name="submit" value="LOGIN"/>
            
        <p class="msg">Not Registred?<a href="#">Sign up</a></p>
        
        </form>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
    <script>
    $('.msg a').click(function(){
    $('form').animate({height:"toggle",opacity: "toggle"},"slow");
    });
    </script>
                </body>
    </html>
<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
$connect=mysqli_connect($host,$user,$password,$db);

//mysql_select_db($db);
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from loginform where User='$username' AND Password='$password' limit 1";
    
    
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)==1){
        $_SESSION['user']=$username;
        echo "<script>window.open('customerwall.php','_self')</script>";
        exit();
    }
    else{
        echo "<script> alert('Password or Usename Is Incorrect')</script>";
        echo"<script>window.open('lginn.php','_self')</script>";
        
        exit();
    }
}
?>
    