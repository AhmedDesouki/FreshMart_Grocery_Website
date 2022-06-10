<?php   
//retrieve data to make ajax using sort table
 $connect = mysqli_connect('localhost', 'root', '', 'grocery');  
 $query = "SELECT * FROM complain ORDER BY complain_id DESC";  
 $result = mysqli_query($connect, $query);  
   
 require_once "../conn.php"; 

//delete data from complain 
 if (isset($_GET['complain_id'])) {  
      $complain_id = $_GET['complain_id'];  
      $delete = mysqli_query($conn, "DELETE FROM `complain` WHERE `complain_id` = '$complain_id' ");   

     header ("location:complain.php");
     die();

     
 }  

 ?>
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
        <h2>Complains</h2>
    </div>
    
  
    <div class="table-responsive" id="employee_table"> 
<table class="table table-striped" >
    <thead>
      <tr>
      <th><a class="column_sort" id="complain_id" data-order="desc" href="#">complain_id</a></th>  
          <th><a class="column_sort" id="customername" data-order="desc" href="#">customername</a></th>  
         <th><a class="column_sort" id="customernumber" data-order="desc" href="#">customernumber</a></th>  
           <th><a class="column_sort" id="address" data-order="desc" href="#">address</a></th>  
             <th><a class="column_sort" id="email" data-order="desc" href="#">email</a></th>  
             <th><a class="column_sort" id="description" data-order="desc" href="#">description</a></th>  
             <th><a class="column_sort" id="customer_id" data-order="desc" href="#">customer_id</a></th>  
              </tr>  
     
    </thead>
    <tbody>

    <?php  
    //retrieve data from complain table in database and by clicking delete it wiil deleted from database
                          while($row = mysqli_fetch_array($result))  
                          {  
                            echo "  
                            <tr class='data'>  
                          
                          <td>".$row['complain_id']."</td>  
                               <td>".$row['customername']."</td>  
                               <td>".$row['customernumber']."</td>  
                               <td>".$row['address']."</td>  
                               <td>".$row['email']."</td>  
                               <td>".$row['description']."</td>  
                               <td>".$row['customer_id']."</td> 

                               <td>
                               <a href='complain.php?complain_id=".$row['complain_id']."' class='btn'>Delete</a>
                               </td>  


                               
                               ";  
                            }    
                           
                           
                          ?>  
    

        
      
    </tbody>
  </table>
  </div>
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


<script>  
//script to sort data using ajax 
 $(document).ready(function(){  
      $(document).on('click', '.column_sort', function(){  
           var column_name = $(this).attr("id");  
           var order = $(this).data("order");  
           var arrow = '';  
           //glyphicon glyphicon-arrow-up  
           //glyphicon glyphicon-arrow-down  
           if(order == 'desc')  
           {  
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';  
           }  
           else  
           {  
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';  
           }  
           $.ajax({  
                url:"sort.php",  
                method:"POST",  
                data:{column_name:column_name, order:order},  
                success:function(data)  
                {  
                     $('#employee_table').html(data);  
                     $('#'+column_name+'').append(arrow);  
                }  
           })  
      });  
 });  
 </script> 

</body>