
<html>
    <head>
        <title>Order Details</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/csf3.css">
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
        
       <h1>My Order Details</h1>
        <table align="center" class="tabl" border="5px">
        <h1>   <?php
                    session_start();
                    $host="localhost";  
                    $password="";
                    $user="root";
                    $db="demo";
                    $us=$_SESSION['user'];
                    
                    echo "<br>";
                    echo "Customer Name :".$us; 
                ?></h1> 
            <tr>
                <th>Number</th>
                <th>Vegetable 1</th>
                <th>Amount</th>
                
                <th>Vegetable 2</th>
                <th>Amount</th>
                
                <th>Vegetable 3</th>
                <th>Amount</th>
                
                <th>Vegetable 4</th>
                <th>Amount</th>
                
                <th>Vegetable 5</th>
                <th>Amount</th>
                <th>Address</th>
                <th>State</th>
                <th>Area</th>
            </tr>
        <?php
    
            $connect=mysqli_connect($host,$user,$password,$db);
            $i=0;
            
            $sql="select * from orderdetails where cust_ID =  (select id from loginform where User='$us' ) ";
            $res=mysqli_query($connect,$sql);
        while($oe=mysqli_fetch_array($res))
        {
            $veg1=$oe['veg1'];
            $a1=$oe['a1'];
            $veg2=$oe['veg2'];
            $a2=$oe['a2'];
            $veg3=$oe['veg3'];
            $a3=$oe['a3'];
            $veg4=$oe['veg4'];
            $a4=$oe['a4'];
            $veg5=$oe['veg5'];
            $a5=$oe['a5'];
            $address=$oe['address'];
            $state=$oe['state'];
            $area=$oe['area'];
            $i++;
        
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $veg1; ?></td>
                <td><?php echo $a1; ?></td>
                
                <td><?php echo $veg2; ?></td>
                <td><?php echo $a2; ?></td>
                
                <td><?php echo $veg3; ?></td>
                <td><?php echo $a3; ?></td>
                
                <td><?php echo $veg4; ?></td>
                <td><?php echo $a4; ?></td>
                
                <td><?php echo $veg5; ?></td>
                <td><?php echo $a5; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $state; ?></td>
                <td><?php echo $area;  ?></td>
            </tr>
            <?php
        }
            ?>
        </table>
    </body>
</html>
