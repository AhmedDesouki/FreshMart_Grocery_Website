
<?php    

//retrieve data from database and sort it 
 $connect = mysqli_connect("localhost", "root", "", "grocery");  
 $output = '';  
 $order = $_POST["order"];  
 if($order == 'desc')  
 {  
      $order = 'asc';  
 }  
 else  
 {  
      $order = 'desc';  
 }  
 $query = "SELECT * FROM complain ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";  
 $result = mysqli_query($connect, $query);  
 $output .= '  
 <table class="table table-bordered">  
      <tr>  
           <th><a class="column_sort" id="complain_id" data-order="'.$order.'" href="#">complain_id</a></th>  
           <th><a class="column_sort" id="customername" data-order="'.$order.'" href="#">customername</a></th>  
           <th><a class="column_sort" id="customernumber" data-order="'.$order.'" href="#">customernumber</a></th>  
           <th><a class="column_sort" id="address" data-order="'.$order.'" href="#">address</a></th>  
           <th><a class="column_sort" id="email" data-order="'.$order.'" href="#">email</a></th> 
           <th><a class="column_sort" id="description" data-order="'.$order.'" href="#">description</a></th>
           <th><a class="column_sort" id="customer_id" data-order="'.$order.'" href="#">customer_id</a></th> 
           <th scope="col">Delete </th>
           
      </tr>  
 ';  
//the table after sorting using ajax 

 while($row = mysqli_fetch_array($result))  
 {  
  $output .= '  
      <tr>  
           <td>' . $row["complain_id"] . '</td>  
           <td>' . $row["customername"] . '</td>  
           <td>' . $row["customernumber"] . '</td>  
           <td>' . $row["address"] . '</td>  
           <td>' . $row["email"] . '</td> 
           <td>' . $row["description"] . '</td>  
           <td>' . $row["customer_id"] . '</td> 
      ';
                                           
 }  
 $output .= '</table>';  
 echo $output;  
 ?>