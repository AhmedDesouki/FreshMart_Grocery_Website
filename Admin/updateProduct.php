<?php
    function get_connection(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname="grocery";
        $mysqli = new mysqli("localhost","root","","grocery");
        return $mysqli;
    }
    
    function get_all_products(){
        $mysqli = get_connection();
        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }
        if ($result = $mysqli -> query("SELECT * from product")) {
            while ( $rows = $result->fetch_assoc() ) {
                // echo "<h3>Product ID:</h3>" . $rows['product_id'] . "<br>";
                // echo "<h3>Product Name:</h3>" . $rows['product_name'];
                echo format_output($rows['product_id'], $rows['product_name'], $rows['price'], $rows['quantity']);
            }
            // $resource->free();
            // $db->close();
        }
    }
    

    function format_output($id, $name, $price, $quantity){
        $out = <<<EOT
                <th scope="row">$id</th>
                <td>$name</td>
                <td><img src="../images/ipics/banana_PNG104245.png" alt=""  height=100 width=100></img></td>
                <td>$price EGP</td>
                <td>$quantity KG</td>
                <td>Fruit</td>
                <td><a href="deletproduct.php?product_id= $id " ><button type="button"> <i class="fa fa-trash" style="font-size:30px;color:red"></i></button>
                <a href="updateForm.php"><button><i class="far fa-edit fa-2x" style="font-size:30px;color: green;"></i></button></a> </td>
                </tr>
            EOT;
      return $out;
    }

    if(isset($_GET['fetch_products'])){
        // echo "test";
        get_all_products();
    }
    
    if(isset($_GET['edit_product'])){
        $id = $_GET['id'];
        $name = $_GET['name'];
        $price = $_GET['price'];
        $quantity = $_GET['quantity'];
        $mysqli = get_connection();
        $query = 'UPDATE product set product_name ="' . $name . '", quantity = "' . $quantity . '" , price = "' . $price . '" where product_id = ' . $id ;
        $mysqli->query($query);
        // echo $query;
        if ($mysqli->errno) {
            printf("Could not update table: %s<br />", $mysqli->error);
        }
    }

    // $msg = "";

    // // If upload button is clicked ...
    // if (isset($_POST['upload'])) {
    
    //     $filename = $_FILES["uploadfile"]["name"];
    //     $tempname = $_FILES["uploadfile"]["tmp_name"];	
    //         $folder = "product/".$image;
            
    //     $db = get_connection();
    
    //         // Get all the submitted data from the form
    //         $sql = "INSERT INTO products (image) VALUES ('$image')";
    
    //         // Execute query
    //         $mysqli->query($sql);
            
    //         // Now let's move the uploaded image into the folder: image
    //         if (move_uploaded_file($tempname, $folder)) {
    //             $msg = "Image uploaded successfully";
    //         }else{
    //             $msg = "Failed to upload image";
    //     }
    // }
    // $result = mysqli_query($db, "SELECT image FROM product");
      
?>




