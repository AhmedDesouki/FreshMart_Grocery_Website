<!DOCTYPE html>

<?php
require_once "../conn.php";

$query="SELECT * FROM customer";
    
    $result1=mysqli_query($conn,$query);
    
    
    
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
</head>
<body>
 



<?php  
include_once "../includes/nav_admin.php";
?>
    



<div class="container" style="max-width:80%;" >
    <div class="col-10">
        <h2>search on customers</h2>
    </div>
    <input type="text" class="form-control" id="customer_livesearch" autocomplete="off" placeholder="name of customer....">
    

    <div id="searchresult" > </div>
    <br><br><br><br><br><br><br><br><br><br>

    
   
<table class="table table-striped" >
    <thead>
    <tr> 
           <th>ID</th>
           <th>Name</th>
           <th>email</th>
           <th>phonenumber</th>
           <th>address</th>

       </tr>
    </thead>
    <tbody>
    
    <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                            echo "  
                            <tr >  
                          
                          <td>".$row['customer_id']."</td>  
                               <td>".$row['customer_name']."</td>  
                               
                               <td>".$row['email']."</td>  
                               <td>".$row['phonenumber']."</td>  
                               <td>".$row['address']."</td>  
                               

                               


                               
                               ";  
                            }    
                           
                           
                          ?>  
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