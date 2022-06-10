<?php
 require_once "conn.php";

 session_start();


 
 if(isset($_POST['update']))
    {
        $customer_id = $_GET['customer_id'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];

        $query = "UPDATE customer SET password ='$password', conf_password='$conf_password' WHERE customer_id=$customer_id" ;
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:profile.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:profile.php");
    }


?>