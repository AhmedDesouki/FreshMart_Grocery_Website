<html>
    
<?php
require_once "conn.php";

session_start();

if(!isset($_SESSION["loggeduser"])){
    header('location:login.php');
}


$username=$_SESSION["loggeduser"];
$viewuser="SELECT * FROM customer WHERE username='$username'";
$result=mysqli_query($conn,$viewuser);

$row=mysqli_fetch_array($result);

$customer_id=$row["customer_id"];





$password = $conf_password = "";

$passworderror = "";
$conf_passworderror = "";


if($_SERVER['REQUEST_METHOD']=='POST'){
 

    if(empty($_POST['password']) && $conf_password!=$password ){
        $passworderror="password field is required!"; 
    }else{
        $password=validate($_POST['password']);
        
    }

    if(empty($_POST['conf_password'])){
        $conf_passworderror="confirmation password field is required!"; 
    }else{
        

        if($conf_password!=$password){
            $conf_passworderror="Your passwords don't match----------------";
        }else{
            $conf_password=validate($_POST['conf_password']);
        }
    }
    
//   if(!empty($password) &&!empty($conf_password) ){

//   $stmt="UPDATE customer SET password='$password',conf_password='$conf_password' WHERE customer_id=$customer_id ";
//   mysqli_query($conn,$stmt);
  
//   }


}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}





?>




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



 <br><br><br><br><br><br><br><br><br><br>

<center>
 <div class="card-title" style="width: 50%; ">
    <h2 class="bg-success text-white text-center py-3"> Change password</h2>
 </div>
 <br><br>
 <form method="POST" style="width: 50%; " id="contactFrm"  action="changedone.php?customer_id=<?php echo $customer_id ?>">
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
            
            <!-- Contact form -->
            
            <div class="form-group">
                <label>New password:</label>
                <input type="text" name="password" id="email" class="form-control" placeholder="Enter New password " required="">
                <div class="error"> <?php echo $passworderror; ?>  </div>
            </div>
            <div class="form-group">
                <label>confirmation password:</label>
                <input type="text" name="conf_password" id="email" class="form-control" placeholder="Enter confirmation password " required="">
                <div class="error"> <?php echo $conf_passworderror; ?>  </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <!-- Submit button -->
           <button id="submitButton" type="submit" class="btn_admin btn-admin-p"name="update">Change</button>
        </div>
        </form>

</center>




<center><img src="./images/footerstrip.png" style="width: 80%; "></center>
<?php  
include_once "includes/footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>

</html>