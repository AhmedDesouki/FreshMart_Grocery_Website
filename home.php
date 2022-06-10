<!DOCTYPE html>

<html>
    
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&display=swap" rel="stylesheet">
    
<link rel="stylesheet" href="style.css">
    
</head>
    
<body>
    

    
<?php  
include_once "includes/nav_customer.php";
?>

        <div class="covercontent">
            <img src="./images/freshmartcover.png" class="coverimg">
                <div class="covertext">
                    
                    <h1>Your Supermarket At Home, Order Everything You Need Without A Trip.</h1>
                    <div class="coverbuttons">
                        <a href="login.php" class="button">Login</a>
                        <a href="signup.php" class="button" style="margin-left: 30px;">Sign Up</a>
                    </div>
                </div>
        </div>
    
    <div class="topcategories">
    <h2>Top Categories</h2>
        <div class="reveal">
            <div class="categoriescontainer">
                <div class="box"><img src="./images/fandv.png"> <h4>Fruits &amp; Vegetables</h4></div>
                <div class="box"><img src="./images/meat.png"> <h4>Meat &amp; Poultry</h4></div>
                <div class="box"><img src="./images/beverages.jpeg"> <h4>Beverages</h4></div>
                <div class="box"><img src="./images/grains.jpeg"> <h4>Beans &amp; Grains</h4></div>
            </div>
        <a href="#" class="button">View All Categories</a>
        </div>
    </div>
    
    <div class="homeaboutus">
        <img src="./images/body2.png" class="reveal reveal-scroll">
        <div class="reveal">
        <h2>Who We Are</h2>
        <p>FreshMart is a one-stop-shop that provides daily fresh groceries to your doorstep. Think of FreshMart as a little supermarket on your laptop. We provide your daily shopping essentials from dairy, eggs, fruits and vegetables, poultry and meats, beans and grains, all the way to beverages, baby products, snacks and personal care supplies. We’re continuously adding more products and more household supplies to our website.</p>
        </div>
    </div>
    
    <center><img src="./images/footerstrip.png" style="width: 80%; "></center>

    
    <?php  
include_once "includes/footer.php";
?>
</body>
    <script src="script.js"></script>
</body>
    

    
</html>
