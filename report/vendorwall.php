<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
$connect=mysqli_connect($host,$user,$password,$db);

$qu="select a1,a2,a3,a4,a5 from orderdetails where  area=(select area from loginformv order by iD desc limit 1)";
$result=mysqli_query($connect,$qu);
$row00=mysqli_fetch_row($result);
$vr90=$row00[0];
$vr91=$row00[1];
$vr92=$row00[2];
$vr93=$row00[3];
$vr94=$row00[4];
echo " ".$vr90." ".$vr91." ".$vr92." ".$vr93." ".$vr94." " ;
/*for($i=1;$i<6;$i++)
{
    $slq=
}*/

$qu1="select veg1,veg2,veg3,veg4,veg5,address from orderdetails where  area=(select area from loginformv order by iD desc limit 1)";
$result1=mysqli_query($connect,$qu1);
$row001=mysqli_fetch_row($result1);
echo " ".$row001[0]." ".$row001[1]." ".$row001[2]." ".$row001[3]." ".$row001[4];
//+$row001[1]+$row001[2]+$row001[3]+$row001[4]
if(isset($_POST['submit'])){
echo"<script>window.open('','_self')</script>";
exit();
}
    

?>
<!doctype html>
<html>
    <head>    
        <title>Customer Wall</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>MESSAGE</p>
        <form method="post">
        <input type="submit" name="submit" placeholder="BILL" />
        </form>
        
    </body>
</html>    