<!DOCTYPE html>



<?php
//to connect the database 
require_once "conn.php";




//form validation using php
$name = $email= $phonenumber = $address = $username = $password = $conf_password = "";
$nameerror =" ";
$emailerror =" ";
$phonenumbererror =" ";
$addresserror = " ";
$usernameerror =" ";
$passworderror = " ";
$conf_passworderror = " ";


if($_SERVER['REQUEST_METHOD']=='POST'){
 if(empty($_POST['name'])){
    $nameerror="name field is required!"; 
 }
  else{
     $name=validate($_POST['name']);
      if(!preg_match('/^[a-zA-z]*$/', $name)){
        $nameerror="Only letter is allowed ";
      }
  } 
 if(empty($_POST['email'])){
    $emailerror="email field is required!"; 
 }else{
    $email=validate($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailerror = "Invalid email ";
      }
    }

    
    if(empty($_POST['phonenumber'])){
        $phonenumbererror="phone field is required!"; 
    }
    else{
        $phonenumber=validate($_POST['phonenumber']);
        if(!preg_match('/^[0-9]*$/', $phonenumber)){
            $phonenumbererror="Invalid phonenumber";
            
        }
    }
 
    if(empty($_POST['address'])){
        $addresserror="address field is required!"; 
    }else{
        $address=validate($_POST['address']);
        if(is_numeric($address)==true){
            $nameerror="Invalid address ";
        }
    }


    if(empty($_POST['username'])){
        $usernameerror="Username field is required!"; 
    }else
    {
        $username=validate($_POST['username']);
        if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $username)){
            $usernameerror="Only letter is allowed ";
        }
    }

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
    
  if(!empty($name) &&!empty($email) &&!empty($phonenumber) &&!empty($address) &&!empty($username) &&!empty($password) &&!empty($conf_password) ){
//    if($nameerror && $emailerror && $addresserror && $phonenumbererror && $usernameerror && $passworderror && $conf_passworderror ==" "){
    $customer_id=random_num(2);
$query="INSERT INTO customer (customer_id,customer_name,email,phonenumber,address,username,password,conf_password) values ('$customer_id','$name','$email','$phonenumber','$address','$username','$password','$conf_password')";
      mysqli_query($conn,$query);
    // }
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
    
<div class="loginf">
<div class="box-form">
	

        <div id="slider">
            <ul id="slideWrap"> 
              <li><img src="images/slide1.jpeg" alt=""></li>
              <li><img src="images/slide2.jpg" alt=""></li>
              <li><img src="images/slide3.png" alt=""></li>
              <li><img src="images/slide4.jpg" alt=""></li>
              <!-- <li><img src="" alt=""></li> -->
              
            </ul>
            <a id="prev" href="#">&#8810;</a>
            <a id="next" href="#">&#8811;</a>
     </div>
		
	
	
		<div class="right">
           
		<h5>sign up </h5>
        <?php  
               if($nameerror && $emailerror && $addresserror && $phonenumbererror && $usernameerror && $passworderror && $conf_passworderror ==""){

                echo "<div style='color:green;' ><span>&#10003;</span>Congratulations! Registration completed.</div>";
               } 
               
        
        
        
        ?>
        
      
      <form form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
		<div class="inputs">
           
           
            <input id="name" type="text" placeholder="Name " name="name" autocomplete="off" >
            <div class="error"> <?php echo $nameerror; ?></div>
            
			<br>
            
			<input id="email" type="email" placeholder="Email" name="email" autocomplete="off">
            <div class="error"> <?php echo $emailerror; ?>  </div>
            
            <br>
           
			<input id="address" type="text" placeholder="Address" name="address" autocomplete="off">
            <div class="error"> <?php echo $addresserror; ?>  </div>
            <br>
            

			<input id="phone" type="text" placeholder="Phone number" name="phonenumber" >
            <div class="error"> <?php echo $phonenumbererror; ?>  </div>
          
			<input id="username" type="text" placeholder="User name"  name="username">
            <div class="error"> <?php echo $usernameerror; ?>  </div>
			<br>
			<input id="password" type="password" placeholder="Password" name="password">
            
            <div class="error"> <?php echo $passworderror; ?>  </div>
           
			<input id="passwordConfirm" type="password" placeholder="Confirm password" name="conf_password">
            
            <div class="error"> <?php echo $conf_passworderror; ?>  </div>
		</div>
			
			<br><br>
			<br>
            
			<button id="submitButton" type="submit" value="submit" >  submit   </button>
    </form>
	<!-- </div> -->
	
</div>
</div>

    <center><img src="./images/footerstrip.png" style="width: 80%; "></center>
    <?php  
include_once "includes/footer.php";
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
   
    <?php
 



?>

      
</body>
    




    
</html>

