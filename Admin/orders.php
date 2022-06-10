<!DOCTYPE html>

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
    <div class="col-10">
        <h2>Customers</h2>
    </div>
    
    
<table class="table table-striped" >
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Order ID</th>
        <th scope="col">Product ID</th>
        <th scope="col">Product name</th>
        <th scope="col">Quantity </th>
        <th scope="col">Payment status </th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1 </th>
        <td>1</td>
        <td>44324</td>
        <td>Apple</td>
        <td>2kg</td>
        <td>completed</td>
        
      <tr>
        <th scope="row">2 </th>
        <td>2</td>
        <td>2434</td>
        <td>Banana</td>
        <td>5kg</td>
        <td>Pending</td>
      <tr>
        <th scope="row"> 3</th>
        <td>3</td>
        <td>56454</td>
        <td>Apple</td>
        <td>1kg</td>
        <td>Pending</td>
        
      
    </tbody>
  </table>
</div>

<br><br><br><br><br><br><br><br><br><br>



<center><img src="../images/footerstrip.png" style="width: 80%; "></center>
<?php  
include_once "../includes/footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../script.js"></script>
</body>