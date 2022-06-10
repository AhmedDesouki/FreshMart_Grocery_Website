<!DOCTYPE html>

<?php
 include "updateProduct.php"; 


$itemname = $categoryname= $descs = $quantity = $price = "";
$itemnameerror =" ";
$categorynameerror =" ";
$descserror =" ";
$quantityerror = " ";
$priceerror =" ";



if($_SERVER['REQUEST_METHOD']=='POST'){

 if(empty($_POST['itemname'])){
    $itemnameerror="itemname field is required!"; 
 }
  else{
     $itemname=validate($_POST['itemname']);
      if(!preg_match('/^[a-zA-z]*$/', $itemname)){
        $itemnameerror="Only letter is allowed ";
      }
  } 
  
    if(empty($_POST['categoryname'])){
       $categorynameerror="categoryname field is required!"; 
    }
     else{
        $categoryname=validate($_POST['categoryname']);
         if(!preg_match('/^[a-zA-z]*$/', $categoryname)){
           $categorynameerror="Only letter is allowed ";
         }
     } 
     
        if(empty($_POST['descs'])){
           $descserror="descs field is required!"; 
        }
         else{
            $descs=validate($_POST['descs']);
             if(!preg_match('/^[a-zA-z]*$/', $descs)){
               $descserror="Only letter is allowed ";
             }
         } 

    
    if(empty($_POST['price'])){
        $priceerror="price field is required!"; 
    }
    else{
        $price=validate($_POST['price']);
        if(!preg_match('/^[0-9]*$/', $price)){
            $priceerror="Invalid price";
            
        }
    }
    
    if(empty($_POST['quantity'])){
        $quantityerror="quantity field is required!"; 
    }
    else{
        $quantity=validate($_POST['quantity']);
        if(!preg_match('/^[0-9]*$/', $price)){
            $quantityerror="Invalid quantity";
            
        }
    }
    

    function random_num($length)
    {
        $text = "";
        if($length < 5)
        {
            $length = 5;
        }
        $len = rand(4, $length);
        for ($i=0; $i < $len; $i++) {
            
            $text .= rand(0,9);
        }
        return $text;
    }
    
    
  if(!empty($itemname) &&!empty($categoryname) &&!empty($descs) &&!empty($quantity) &&!empty($price) ){
    
    $product_id=random_num(2);
$query="INSERT INTO product (product_id,product_name,price,description,product_category,quantity) values ('$product_id','$itemname','$price','$descs','$categoryname','$quantity')";
      //mysqli_query($mysqli,$query);
      $mysqli = get_connection();
      $mysqli->query($query);
    
  }


}
//validate the inputs 
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>



<html>
    
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="../style.css">   
<script src="../script.js"></script>
<body>
 
<?php  
include_once "../includes/nav_admin.php";
?>






<div class="container">
        
        <h2>Item List </h2>
    
    <div class="col-2">
        <button id="mbtn" style="margin-left: 1200px;" class="btn_admin btn-admin-p turned-button">Add item </button>
    

    </div>
    
<table class="table table-striped" >
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">image</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity </th>
        <th scope="col">Category </th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php  get_all_products();?>
    </tbody>
  </table>
</div>

<br><br><br><br><br><br><br><br><br><br>

<div id="modalDialog" class="modal">
    <div class="modal-content animate-top">
        <div class="modal-header">
            <h5 class="modal-title">Add item </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form method="POST" id="contactFrm">
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
            
            <!-- Contact form -->
            <div class="form-group">
                <label>Item Name:</label>
                <input type="text" name="itemname" id="name" class="form-control" placeholder="Enter your name" required="">
            </div>
            <div class="form-group">
                <label>Category Name:</label>
                <input type="text" name="categoryname" id="email" class="form-control" placeholder="Enter the category of this  item " required="">
            </div>
            <div class="form-group">
                <label>Description :</label>
                <textarea name="descs" id="Description" class="form-control" placeholder="Item Description here" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input type="text" name="quantity" id="Quantity" class="form-control" placeholder="Enter the Quantity" required="">
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="text" name="price" id="Price" class="form-control" placeholder="Enter the price" required="">
            </div>
        </div>
        <div class="modal-footer">
            <!-- Submit button -->
            <button type="submit" class="btn_admin btn-admin-p">Submit</button>
        </div>
        </form>
    </div>
</div>

<center><img src="../images/footerstrip.png" style="width: 80%; "></center>
<?php  
include_once "../includes/footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../script.js"></script>
</body>