<?php
    session_start();
    $db_name = "buybuylk";
    $connection = mysqli_connect("localhost","root","",$db_name);

    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="index.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="index.php"</script>';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    
    <link rel="stylesheet" href="../style/styleProduct.css">
    <style>
        
    </style>
</head>
<body>
      <!-- ------------------ Header --------------------- -->
    
 <div class="header">
    <div class="container">
        <div class="navbar">
            <div>
                <img src="image/icons/buy-logo1.png" width="120px;">
            </div>
            <nav>
                <ul>
                    <li><a href="../Home.html">Home</a></li>
                    <li><a href="../product.html">Products</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../contact.html">Contact</a></li>    
                    <li><a href="../loginPage.html">login</a></li> 
                    <li><a href="../RegistrationPage.html">Register</a></li> 
                </ul>
            </nav>
            <a href="cart.php"><img src="image/icons/icons8.png" width="50px" height="50px"></a>  
        </div>  
    </div>
 </div>
    
    <div class="container" style="width: 65%">
        <h2>All Products</h2>
        <div class="row">
        
        <?php
            $query = "select * from product order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="product">
                                <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["description"];?></h5>
                                <h5 class="text-danger"><?php echo $row["price"];?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">
                            </div>
                        </form>
                                                
                    </div>
        <?php
                }
            }
        ?>
        </div>
        </div>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                    ?>
                <tr>
                        <td><?php echo $value["product_name"];?></td>
                        <td><?php echo $value["product_quantity"];?></td>
                        <td><?php echo $value["product_price"];?></td>
                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="index.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
						<td><button><a href="../Payment_Details.html">Pay</a></button></td>
                </tr>
                <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
                ?>
                <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right"><?php echo number_format($total,2);?></td>
                        <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>

    </div>
    
    
        <!-- ------------------ Footer --------------------- -->
    
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Follow Us on social media:</h3>
                    <div class="app-logo">
                        <!--<img src="image/icons/In-logo.png">-->
                        <a href=""><img src="image/icons/f-logo.png"></a>
                        <a href=""><img src="image/icons/Twitter_Logo.png"></a>
                        <a href=""><img src="image/icons/WhatsApp_Logo.png"></a>
                        <!--<a href=""><img src="image/icons/yt_logo.png"></a>-->
                    </div>
                </div>
                <div class="footer-col-2">
                    <h1>BuyBuy.lk</h1>
                    <h4>CONTACT US</h4>
                    <p>info.buybuylk@gmail.com</p>
                    <p>+941199557788</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li><a href="">FAQ's</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms and condition</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - buybuy.lk</p>
        </div>
    </div>
    
</body>
</html>