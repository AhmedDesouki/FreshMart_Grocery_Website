<!DOCTYPE html>

<html>
    
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
      <link rel="stylesheet" href="style.css">
 

      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&display=swap" rel="stylesheet">

  

   

<body>
 

    
<?php  
include_once "includes/nav_customer.php";
?>


<div class="recipes_content ">
 <section class="home" id="home">

    <div class="content" data-aos="fade-right">
        <h3  style="font-size: 70px; color: #8B008B;">We suggest some recipes all ingredients is available. </h3>
        
    </div>

    <div class="image" data-aos="fade-up">
        <img src="images/home-img.png" alt="">
    </div>

 </section>

 <section class="top-products">
    <div class="container">
        <h1 class="section-heading" style="color:#8B008B; font-size: 50px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Suggested Dishes </h1>
        <div class="slider">
           
            <div class="food-slider">
                <div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="./images/fruitsalad.png" alt="">
                    </div>
                    <hr>
                    <div>
                        <h2 class="text-center">Fruit Salad</h2>
                        
                        
                        
                    </div>
                </div>
                <div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="./images/plate-2.png" alt="">
                    </div>
                    <hr>
                    <div>
                        <h2 class="text-center">Russian Salad</h2>
                        
                       
                    </div>
                </div>
                <div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="./images/plate-3.png" alt="">
                    </div>
                    <hr>
                    <div>
                        <h2 class="text-center">Greek Salad</h2>
                        
                    </div>
                </div>
                <div class="food-card magic-shadow-sm">
                    <div class="product-image flex items-center justify-center">
                        <img src="images/c2home.png" alt="">
                    </div>
                    <hr>
                    <div>
                        <h2 class="text-center">Caesar Salad</h2>
                       
                    </div>
                </div>
            </div>
        </div>
        
    </div>
  </section>

  <section class="menu" id="menu">

    <h1 class="section-heading " style="color:#8B008B; font-size: 70px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> How to make <span>it</span> </h1>
    
    <ul class="list" >
        <li class="btn_recipes " data-src="images/fruitsaladint.jpg">Fruit Salad</li>
        <li class="btn_recipes " data-src="images/r_salad.jpg">Russian Salad</li>
        <li class="btn_recipes" data-src="images/greek-salad-3-1200.jpg">Greek Salad</li>
        <li class="btn_recipes" data-src="images/classic-caesar-salad.jpg">Caesar Salad</li>
    </ul>
    
    <div class="row" >
    
        <div class="image" data-aos="fade-left">
            <img src="images/sss.jpeg" id="menu-img" alt="">
        </div>
    
        <div class="content">
            <div class="info">
                <h3> <span>01.</span> Fruit salad ingredients </h3>
                <p> fresh strawberries, blueberries, kiwis , bananas, sliced (optional) </p>
            </div>
            <div class="info">
                <h3> <span>02.</span> Russian Salad </h3>
                <p>peas ,  french beans , mayonnaise sauce , black pepper, powdered</p>
            </div>
            <div class="info">
                <h3> <span>03.</span> Greek Salad </h3>
                <p>liced cucumbers, tomatoes, green bell pepper, red onion, olives, and feta cheese</p>
            </div>
            <div class="info">
                <h3> <span>04.</span> Caesar Salad </h3>
                <p>eggs , cloves garlic, minced ,  fresh lemon juice , Parmesan cheese, grated </p>
            </div>
        </div>
    
    </div>
    
    </section>

</div>

<center><img src="./images/footerstrip.png" style="width: 80%; "></center>
<?php  
include_once "includes/footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="script.js"></script>

</body>



</html>