<!DOCTYPE html>

<?php

require_once "conn.php";
session_start();

if(!isset($_SESSION["loggeduser"])){

    echo '<script>alert("Login first")</script>';
    header('location:login.php');
    
}


$username=$_SESSION["loggeduser"];
$viewuser="SELECT * FROM customer WHERE username='$username'";
$result=mysqli_query($conn,$viewuser);

$row=mysqli_fetch_array($result);
$customer_name=$row["customer_name"];
$email=$row["email"];
$phonenumber=$row["phonenumber"];
$username=$row["username"];
$customer_id=$row["customer_id"];


 $password = $conf_password = "";

$passworderror = "";
$conf_passworderror = "";


if($_SERVER['REQUEST_METHOD']=='POST'){
 

    if(empty($_POST['password'])){
        $passworderror="password field is required!"; 
    }else{
        $password=validate($_POST['password']);
        
    }

    if(empty($_POST['conf_password'])){
        $conf_passworderror="confirmation password field is required!"; 
    }else{
        $conf_password=validate($_POST['conf_password']);

        if($conf_password!=$password){
            $conf_passworderror="Your passwords don't match----------------";
        }
    }
    
  if(!empty($password) &&!empty($conf_password) ){

  $stmt="UPDATE customer SET password='$password',conf_password='$conf_password' WHERE customer_id=$customer_id ";
  mysqli_query($conn,$stmt);
  
  }


}

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="script.js"></script>

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="style.css">

    </head>
<body>
 
<?php  
include_once "includes/nav_customer.php";
?>

 
<div class="container" style="max-width:80%;" >
    <div class="col-10">
        <h2>Profile</h2>
    </div>
    <img src="./images/112233.jpg" alt="..." class="img-thumbnail">
    <div class="col-2">
        <!-- <button id="mbtn" style="margin-left: 1000px;" class="btn_admin btn-admin-p turned-button">Change photo </button> -->
    

    </div>
<table class="table table-striped" >
    
    <tbody>
      <tr>
        <th scope="row">Name </th>
        <td><?php echo $customer_name; ?></td>
        
        
      <tr>
        <th scope="row">Email </th>
        <td><?php echo $email; ?></td>
        
        
      <tr>
        <th scope="row"> Phone number</th>
        <td><?php echo $phonenumber; ?></td>
        
        
        <tr>
            <th scope="row"> Username</th>
            <td><?php echo $username; ?></td>
            
           
            <tr>
            <th scope="row"> Action</th>
            <td> <a href="deactivateaccount.php?customer_id=<?php  echo $customer_id ?>" ><button type="button">  <i class="fa fa-trash" style="font-size:30px;color:red"></i>Deactivate account </button> </a>
            <a href="changepass.php?customer_id=<?php  echo $customer_id ?>" ><button id="mbtn" >  <i class="fa fa-edit" style="font-size:30px;color: green;">  </i> Change password</button></td>
            
           
            
      
    </tbody>
  </table>
  

</div>

<br><br><br><br><br><br><br><br><br><br>



<center><img src="./images/footerstrip.png" style="width: 80%; "></center>
<?php  
include_once "includes/footer.php";
?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>

</html>