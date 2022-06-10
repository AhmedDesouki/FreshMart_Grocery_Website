<!DOCTYPE html>

<html>
    
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>   
<link rel="stylesheet" href="style.css">
    
</head>
    
<body>
    
<?php  
include_once "includes/nav_customer.php";
?>



<div class="row1">
    <div class="column1">
      <img src="Images/ipics/offer1.png" alt="" style="width: 200px;">
    </div>
    <div class="column1">
      <img src="Images/ipics/offer2.png" alt="" style="width: 200px;">
    </div>
    <div class="column1">
        <img src="Images/category page/cart.png" alt="" style="width:200px;">
      </div>
    <div class="column1">
      <img src="Images/ipics/fresh.png" alt="" style="width: 250px">
    </div>
</div>

<img src="images/category page/shop by ca.png" alt="">

<div class="row2">
    <div class="column2">
      <img src="Images/category page/deals png.png" alt="" style="width: 150px;">
    </div>
    <div class="column2">
    <a href="fresh.html"> <img src="Images/category page/fresh png.png" alt="" style="width: 150px;"> </a>
    </div>
    <div class="column2">
     <a href="Dairy & Eggs.html"> <img src="Images/category page/dairy png.png" alt="" style="width:150px;"></a>
      </div>
    <div class="column2">
     <a href="Bread & Bakery.html"> <img src="Images/category page/candies.png" alt="" style="width: 150px"></a>
    </div>
</div>




    <div class="headercat">
      <h1>Our Recommendations</h1>
      <p>Always Fresh</p>
    </div>


<div class="container">
    <ul class="shop-item">
        <li><div ><div class="title"> <span class="shop-item-title">Green Apple</span></div> <img class="shop-item-image" src="Images/ipics/apple_PNG12508.png" alt=""    style="max-width: 195px"     > <div class="shop-item-details"><span class="shop-item-price">$2.99 <br></span><button class="btn btn-primary shop-item-button" type="button"> ADD TO CART <i class="fa fa-shopping-cart" style="font-size:25px"></i> </button></div> </div></li>
        <li><div ><div class="title"> <span class="shop-item-title">Broccoli</span></div> <img class="shop-item-image" src="Images/ipics/broccoli_PNG2825.png" alt=""  style="max-width: 135px"      > <div class="shop-item-details"><span class="shop-item-price">$4.99 <br></span><button class="btn btn-primary shop-item-button" type="button"> ADD TO CART <i class="fa fa-shopping-cart" style="font-size:25px"></i> </button></div> </div></li>
        <li><div ><div class="title"> <span class="shop-item-title">Pineapple</span></div> <img class="shop-item-image" src="Images/ipics/pineapple_PNG95135.png" alt=""style="max-width: 102px"            > <div class="shop-item-details"><span class="shop-item-price">$8.99 <br></span><button class="btn btn-primary shop-item-button" type="button"> ADD TO CART <i class="fa fa-shopping-cart" style="font-size:25px"></i> </button></div> </div></li>
        <li><div ><div class="title"> <span class="shop-item-title">Sliced Bread</span></div> <img class="shop-item-image" src="Images/Bakery/Sliced Bread.png" alt=""     style="max-width: 233px"       > <div class="shop-item-details"><span class="shop-item-price">$2.99 <br></span><button class="btn btn-primary shop-item-button" type="button"> ADD TO CART <i class="fa fa-shopping-cart" style="font-size:25px"></i> </button></div> </div></li>
        <li><div ><div class="title"> <span class="shop-item-title">Chocolate Cuocake</span></div> <img class="shop-item-image" src="Images/Bakery/Chocolate Cuocake.png" alt=""    style="max-width: 110px"      > <div class="shop-item-details"><span class="shop-item-price">$0.99 <br></span><button class="btn btn-primary shop-item-button" type="button"> ADD TO CART <i class="fa fa-shopping-cart" style="font-size:25px"></i> </button></div> </div></li>
        <li><div ><div class="title"> <span class="shop-item-title">Eggs</span></div> <img class="shop-item-image"      src="Images/dairy/eggs.png" alt=""      style="max-width: 155px"       > <div class="shop-item-details"><span class="shop-item-price">$9.99 <br></span><button class="btn btn-primary shop-item-button" type="button"> ADD TO CART <i class="fa fa-shopping-cart" style="font-size:25px"></i> </button></div> </div></li>
        <li><div ><div class="title"> <span class="shop-item-title">Butter Waffles</span></div> <img class="shop-item-image"     src="Images/dairy/Butter Waffles.png" alt="" style="max-width: 230px"> <div class="shop-item-details"><span class="shop-item-price">$0.99 <br></span><button class="btn btn-primary shop-item-button" type="button"> ADD TO CART <i class="fa fa-shopping-cart" style="font-size:25px"></i> </button></div> </div></li>
        <li><div ><div class="title"> <span class="shop-item-title">Creme Caramel</span></div> <img class="shop-item-image" src="Images/dairy/caramel.png" alt=""    style="max-width: 195px"     > <div class="shop-item-details"><span class="shop-item-price">$2.99 <br></span><button class="btn btn-primary shop-item-button" type="button"> ADD TO CART <i class="fa fa-shopping-cart" style="font-size:25px"></i> </button></div> </div></li>   
    </ul>


</div>


<button class="btn-cart" onclick="myFunction()">CART <i class="fa fa-shopping-cart" style="font-size:30px"></i></button>
    
<div id="myDIV">

    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>

    </section>


</div>

<center><img src="./images/footerstrip.png" style="width: 80%; "></center>

<?php  
include_once "includes/footer.php";
?>
 
</body>
    
</html>
