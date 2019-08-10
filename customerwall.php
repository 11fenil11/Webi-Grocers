<?php
    session_start();
    $host="localhost";
    $password="";
    $user="root";
    $db="demo";
    
    $connect=mysqli_connect($host,$user,$password,$db);
    if(isset($_POST['submit1']))
    {
        $vegetable1=$_POST['Veg1'];
        $vegetable2=$_POST['Veg2'];
        $vegetable3=$_POST['Veg3'];
        $vegetable4=$_POST['Veg4'];
        $vegetable5=$_POST['Veg5'];
        $am1=$_POST['amount1'];
        $am2=$_POST['amount2'];
        $am3=$_POST['amount3'];
        $am4=$_POST['amount4'];
        $am5=$_POST['amount5'];
        $add=$_POST['address'];
        $state=$_POST['state'];
        $area=$_POST['area'];
        $guss=$_POST['gus'];    
        $sq="insert into orderdetails (cust_ID,veg1,a1,veg2,a2,veg3,a3,veg4,a4,veg5,a5,address,state,area) values ('$guss','$vegetable1',$am1,'$vegetable2',$am2,'$vegetable3',$am3,'$vegetable4',$am4,'$vegetable5',$am5,'$add','$state','$area')";
        $mari_query=mysqli_query($connect,$sq);     
        echo"<script> window.open('bill.php','_self')</script>";
        exit();
    
        
    }
    

?>



<!doctype html>
<html>
    <head>   
        <link rel="stylesheet" href="css/cs1.css">
        <title>Customer Wall</title>
        <meta charset="utf-8">
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
        <h1 class="patti" ><marquee> Please place your order</marquee> </h1>
        <!-- <h1><?php echo "Name :".$_SESSION['user'] ?></h1>  -->
    <!--    <button id="hover"  target="_self" ><a href="ratebook.php" class="lll">Rate Book</a></button>
        <button id="hover" target="_self"  ><a href="orderwall.php" class="lll">Order Wall</a></button>
        <button id="hover" target="_self" ><a href="logout.php" class="lll">Logout</a></button>  -->
        <?php 
        echo "<br>";
        $is=$_SESSION['user'];
        $wsq="select ID from loginform where User= '$is' ";
        $resul=mysqli_query($connect,$wsq);
        $idu=mysqli_fetch_array($resul);
        $gus=$idu['ID'];
        
        echo "Your Id = ".$gus; 
        ?>
        <form method="post">
            <input type="number" name="gus" placeholder="Enter Id">
        <div class="form">
            <select name="Veg1" >
            <option value="NULL">Null</option>
            <option value="Potato">Potato</option>
            <option value="Garlic">Garlic</option>
            <option value="Lady Finger">Lady Finger</option>
            <option value="Flower">Flower</option>
            <option value="Apple">Apple</option>
            <option value="Water Melon">Water Melon</option>
            <option value="Graps">Grapes</option>
            <option value="Mango">Mango</option>
            <option value="Tomoto">Tomato</option>
        </select>
       <input type="number" name="amount1" placeholder="Insert" value="0" min="0"/> 
            <select name="Veg2" >
            <option value="NULL">Null</option>
            <option value="Potato">Potato</option>
            <option value="Garlic">Garlic</option>
            <option value="Lady Finger">Lady Finger</option>
            <option value="Flower">Flower</option>
            <option value="Apple">Apple</option>
            <option value="Water Melon">Water Melon</option>
            <option value="Graps">Grapes</option>
            <option value="Mango">Mango</option>
            <option value="Tomoto">Tomato</option>
        </select>
            <input type="number" name="amount2" placeholder= "Insert" value="0" min="0"/>
        <select name="Veg3" >
            <option value="NULL">Null</option>
            <option value="Potato">Potato</option>
            <option value="Garlic">Garlic</option>
            <option value="Lady Finger">Lady Finger</option>
            <option value="Flower">Flower</option>
            <option value="Apple">Apple</option>
            <option value="Water Melon">Water Melon</option>
            <option value="Graps">Grapes</option>
            <option value="Mango">Mango</option>
            <option value="Tomoto">Tomato</option>
        </select>
            <input type="number" name="amount3" placeholder="Insert" value="0" min="0"/>
        <select class="ddd" name="Veg4" >
           <div >
            <option value="NULL">Null</option>
            <option value="Potato">Potato</option>
            <option value="Garlic">Garlic</option>
            <option value="Lady Finger">Lady Finger</option>
            <option value="Flower">Flower</option>
            <option value="Apple">Apple</option>
            <option value="Water Melon">Water Melon</option>
            <option value="Graps">Grapes</option>
            <option value="Mango">Mango</option>
            <option value="Tomoto">Tomato</option>
        </div></select>
            <input type="number" name="amount4" placeholder="Insert" value="0" min="0"/>
        <select name="Veg5" >
            <option value="NULL">Null</option>
            <option value="Potato">Potato</option>
            <option value="Garlic">Garlic</option>
            <option value="Lady Finger">Lady Finger</option>
            <option value="Flower">Flower</option>
            <option value="Apple">Apple</option>
            <option value="Water Melon">Water Melon</option>
            <option value="Graps">Grapes</option>
            <option value="Mango">Mango</option>
            <option value="Tomoto">Tomato</option>
        </select>
        <input type="number" name="amount5" placeholder="Insert" value="0" min="0"/>
            
            <input type="text" name="address" placeholder="ADDRESS" />
            <input type="text" name="state" placeholder="STATE" />
            <input type="text" name="area" placeholder="AREA" />
       
    </div>
             <input id="hover" type="submit" name="submit1" value="submit" >
            </form>
        
            </body>
</html>