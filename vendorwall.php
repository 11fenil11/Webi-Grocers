<!doctype html>
<html>

<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
$connect=mysqli_connect($host,$user,$password,$db);

$qu="select a1,a2,a3,a4,a5 from orderdetails where  area=(select area from loginform order by iD desc limit 1)";
$result=mysqli_query($connect,$qu);
$row00=mysqli_fetch_row($result);
$vr90=$row00[0];
$vr91=$row00[1];
$vr92=$row00[2];
$vr93=$row00[3];
$vr94=$row00[4];

$qu1="select veg1,veg2,veg3,veg4,veg5,address from orderdetails where  area=(select area from loginformv order by iD desc limit 1)";
$result1=mysqli_query($connect,$qu1);
$row001=mysqli_fetch_row($result1);

//+$row001[1]+$row001[2]+$row001[3]+$row001[4]
if(isset($_POST['submit'])){
echo"<script>window.open('','_self')</script>";
exit();
}
    
?>

    <head>    
        <title>Vendor Wall</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <p>MESSAGE</p>
        <div class="vw">
            <table> <tr>
        <td><?php echo " ".$vr90." ".$row001[0]." "; ?></td>
        <td><?php echo " ".$vr91." ".$row001[1]." "; ?></td>
        <td><?php echo " ".$vr92." ".$row001[2]." "; ?></td>
        <td><?php echo " ".$vr93." ".$row001[3]." "; ?></td>
        <td><?php echo " ".$vr94." ".$row001[4]." "; ?></td>
            </tr>
                </table>
        </div>
            <form method="post">
        
            <input type="submit" name="submit" placeholder="BILL" />
        
            </form>
        
    </body>
</html>    