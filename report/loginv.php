<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
$connect=mysqli_connect($host,$user,$password,$db);
//mysql_select_db($db);
if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $ar=$_POST['area'];
    $st=$_POST['state'];
    $sql="select * from loginformv where User='$uname' AND Password='$password' limit 1";
        
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)==1){
        echo"<script>window.open('vendorwall.php','_self')</script>";
        exit();
    }
    else{
        
        echo"<script>window.open('loginv.php,'_self')</script>";
        exit();
    }
}
?>

<html lang="en">
    <head>
    <title>Vendor Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    </head>
    
<body  >
    <div class="login-page">
    <div class="form">
        <form method="post" class="register-form">
        <input type="text" name="username" placeholder="name"/>
        <input type="password" name="password" placeholder="password"/>
        <input type="password" name="password2" placeholder="password2"/>
        <input type="text" name="email" placeholder="email-id"/>
        <input type="text" name="area" placeholder="area"/>
            <input type="text" name="state" placeholder="state"/>
            <input type="submit" name="register_btn" value="SIGN UP!"/>    
            <p class="msg">Already in?<a href="#">Login</a></p>
        </form>
        <form method="POST" action="#" class="Login-form">
        <input type="text" name="username" placeholder="name"/>
        <input type="password" name="password" placeholder="password"/>
            <input type="text" name="area" placeholder="area"/>
            <input type="text" name="state" placeholder="state"/>
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
session_start();
$db=mysqli_connect("localhost","root","","demo");
if(isset($_POST['register_btn'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$ar=$_POST['area'];
$st=$_POST['state'];    
    if($password == $password2){
    
    $sql="insert into loginformv(User,Password,email,area,state) values('$username','$password','$email','$ar','$st')";
    $run_query=mysqli_query($db,$sql);
    echo"<script>window.open('vendorwall.php','_self')</script>";
            
}else{
    echo"<script>alert('Make Sure Your Password and Pass2 is same')</script>";
        echo "<script>window.open('loginv.php','_self')</script>";
}

}
?>
