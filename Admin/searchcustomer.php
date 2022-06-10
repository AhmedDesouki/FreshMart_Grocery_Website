

<?php

require_once "../conn.php";

if(isset($_POST['input'])){
    $input=$_POST['input'];

    $query="SELECT * FROM customer WHERE customer_name LIKE '{$input}%' ";
    
    $result=mysqli_query($conn,$query);
   if(mysqli_num_rows($result)>0){?>

    <table class="table table-bordered table table-striped mt-4">
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
         while($row=mysqli_fetch_assoc($result)){
            $id=$row['customer_id'];
            $name=$row['customer_name'];
            $email=$row['email'];
            $phonenumber=$row['phonenumber'];
            $address=$row['address'];


            ?>
            <tr>

                    <td><?php echo $id;?></td>
                    <td><?php echo $name;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $phonenumber;?></td>
                    <td><?php echo $address;?></td>


            </tr>

         </tbody>
         <!-- </table> -->

            <?php
            
           }
        
         
        

  
   

    
  }
  else{
     
    echo"<h3  class='text-dager test-center mt-3'>NO DATA FOUND</h3>";
       }
}  
?>



