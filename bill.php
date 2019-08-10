<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

$connect =mysqli_connect($host,$user,$password,$db);

/*
for($i=1;$i<6;$i++){
    $n[$i]="select veg'$i' from orderdetails order by id desc limit 1";
    $nn[$i]=mysqli_query($connect,$n[$i]);
    $nf[$i]=mysqli_fetch_row($nn[$i]);
}
    echo $nf[1][0];
    echo $nf[2][0];
    echo $nf[3][0];
    echo $nf[4][0];
    echo $nf[5][0];
*/
    $n="select veg1 from orderdetails order by id desc limit 1";
    $nn=mysqli_query($connect,$n);
    $row00=mysqli_fetch_row($nn);
  $n2="select veg2 from orderdetails order by id desc limit 1";
    $nn2=mysqli_query($connect,$n2);
    $row20=mysqli_fetch_row($nn2);
  $n3="select veg3 from orderdetails order by id desc limit 1";
    $nn3=mysqli_query($connect,$n3);
    $row30=mysqli_fetch_row($nn3);
  $n4="select veg4 from orderdetails order by id desc limit 1";
    $nn4=mysqli_query($connect,$n4);
    $row40=mysqli_fetch_row($nn4);
  $n5="select veg5 from orderdetails order by id desc limit 1";
    $nn5=mysqli_query($connect,$n5);
    $row50=mysqli_fetch_row($nn5);
$v1="SELECT rate FROM ratebook WHERE vname=(select veg1 from orderdetails ORDER by id DESC LIMIT 1)";  
$v11=mysqli_query($connect,$v1);
$row1 = mysqli_fetch_row($v11); 
$vr1 = $row1[0]; 

     
$am1="SELECT a1 FROM orderdetails ORDER by id desc limit 1";
$am11=mysqli_query($connect,$am1);
$row11 = mysqli_fetch_row($am11); 
$vr11 = $row11[0]; 

$t1 = $vr1 *$vr11;


$v2="SELECT rate FROM ratebook WHERE vname=(select veg2 from orderdetails ORDER by id DESC LIMIT 1)";  
$v21=mysqli_query($connect,$v2);
$row2 = mysqli_fetch_row($v21); 
$vr2 = $row2[0]; 


$am2="SELECT a2 FROM orderdetails ORDER by id desc limit 1";
$am12=mysqli_query($connect,$am2);
$row22 = mysqli_fetch_row($am12); 
$vr22 = $row22[0]; 

$t2 = $vr22 *$vr2;
$v3="SELECT rate FROM ratebook WHERE vname=(select veg3 from orderdetails ORDER by id DESC LIMIT 1)";  
$v31=mysqli_query($connect,$v3);
$row3 = mysqli_fetch_row($v31); 
$vr3 = $row3[0]; 


$am3="SELECT a3 FROM orderdetails ORDER by id desc limit 1";
$am13=mysqli_query($connect,$am3);
$row33 = mysqli_fetch_row($am13); 
$vr33 = $row33[0]; 

$t3 = $vr3 *$vr33;


$v4="SELECT rate FROM ratebook WHERE vname=(select veg4 from orderdetails ORDER by id DESC LIMIT 1)";  
$v41=mysqli_query($connect,$v4);
$row4 = mysqli_fetch_row($v41); 
$vr4 = $row4[0]; 


$am4="SELECT a4 FROM orderdetails ORDER by id desc limit 1";
$am14=mysqli_query($connect,$am4);
$row44 = mysqli_fetch_row($am14); 
$vr44 = $row44[0]; 

$t4 = $vr44 *$vr4;

$v5="SELECT rate FROM ratebook WHERE vname=(select veg5 from orderdetails ORDER by id DESC LIMIT 1)";  
$v51=mysqli_query($connect,$v5);
$row5 = mysqli_fetch_row($v51); 
$vr5 = $row5[0]; 


$am5="SELECT a5 FROM orderdetails ORDER by id desc limit 1";
$am15=mysqli_query($connect,$am5);
$row55 = mysqli_fetch_row($am15); 
$vr55 = $row55[0]; 

$t5 = $vr5 *$vr55;

?>
<!doctype html>
<html>
<head>
    <title>Final Bill</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/billcss.css">
</head>
<body>
            <div class="navbar">
        <ul class="ui">
            
            <li><button><a href="customerwall.php">Place Order</a> </button></li>
            <li><button><a href="orderwall.php">My Orders</a></button></li>
            <li><button><a href="logout.php">Logout</a></button></li>
            <li><button><a href="ratebook.php">Ratebook</a></button></li>
            <li><button><a href="aboutus.php">About us</a></button></li>
        </ul>    
        </div>
        <h1>Invoice Of Your Order</h1>
    <div class="patti">
    <p><h3>Product Name Quantity           Price             Total</h3></p>
     <h1><?php echo $row00[0]." "; echo $vr11." "; echo $vr1."  "; echo $t1; ?></h1>
     <h1><?php echo $row20[0]." "; echo $vr22." "; echo $vr2."  "; echo $t2; ?></h1>
     <h1><?php echo $row30[0]." "; echo $vr33." "; echo $vr3."  "; echo $t3; ?></h1>
     <h1><?php echo $row40[0]." "; echo $vr44." "; echo $vr4."  "; echo $t4; ?></h1>
     <h1><?php echo $row50[0]." "; echo $vr55." "; echo $vr5."  "; echo $t5; ?></h1>
    <h1>--------------------------------------------</h1>
    <h1>Final Bill <?php echo $t1+$t2+$t3+$t4+$t5; ?></h1>
    </div>
</body>
</html>