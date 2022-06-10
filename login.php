<!DOCTYPE html>

<?php


//to connect the database
require_once "conn.php";
 session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
   // something was posted
   $username = $_POST['username'];
   $password = $_POST['password'];
     $usertype=$_POST['select_usertype'];                    
   if(!empty($username) && !empty($password)){
       
       if($usertype=="user"){
       $query = "SELECT * FROM customer where username='$username'";
       $result= mysqli_query($conn, $query);

       if($result){
         if($result && mysqli_num_rows($result)>0){
           $customer_data=mysqli_fetch_assoc($result);

           if($customer_data['password']===$password){
             $_SESSION['customer_id']=$customer_data['customer_id'];
             
             $_SESSION['loggeduser']=$username;
             header("Location:profile.php?customer_id".$_SESSION['customer_id']);
             die;
           }else {
            echo '<script>alert("Invalid user name or password")</script>';
          }
         }
       }
     }
     //if the is admin
     else if($usertype=="admin"){
        $query = "SELECT * FROM admin where username='$username'";
        $result= mysqli_query($conn, $query);
        if($result){
          if($result && mysqli_num_rows($result)>0){
            $admin_data=mysqli_fetch_assoc($result);
            if($admin_data['password']===$password){
              $_SESSION['admin_id']=$admin_data['admin_id'];
              header("Location:admin/products.php?admin_id".$_SESSION['admin_id']);
              die;
            }else {
                echo '<script>alert("Invalid user name or password")</script>';
              }
          }
        }
     }
   }
  else {
    echo '<script>alert("Invalid user name or password")</script>';
  }
}

?>
<html>
    
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="style.css">
    
</head>
    
<body>
    
<?php  
include_once "includes/nav_customer.php";
?>
    
<div class="loginf">
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Welcome To our shop .</h1>
		
		<span>
			<p>login with social media</p>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
		</span>
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="signup.php">Creat Your Account</a> it takes less than a minute</p>

     <form  method="POST">
		 <div class="inputs">
			<input type="text" placeholder="user name" name="username">
			<br>
			<input type="password" placeholder="password" name="password">
            <br>
            <select name="select_usertype">
                <option    value="admin" > admin </option>
                <option    value="user" > user </option>
             </select> 
            
		 </div>
			
			<br><br>
			<br>
			<button  type="submit" name="submit" > Login </button>
     </form>    
	 </div>
	
</div>
</div>
    <center><img src="./images/footerstrip.png" style="width: 80%; "></center>


    <?php  
include_once "includes/footer.php";
?>
</body>
    

    
</html>
