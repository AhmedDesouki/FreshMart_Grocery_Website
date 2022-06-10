
   <?php
    
   //contact us validation using php 
    if(isset($_POST['send'])){
        $FirstName = $_POST['FirstName'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $phone = $_POST['phone'];

        // Error Checking
        $error = [];

        if(empty($_POST['FirstName'])){
            $error['FirstName'] = 'please Insert Your Name';
        }
        if(empty($_POST['subject'])){
            $error['subject'] = ' please Insert Your Subject';
        }
        if(empty($_POST['email'])){
            $error['email'] = 'please Insert Your Email';
        }
        if(empty($_POST['message'])){
            $error['message'] = ' please Insert Your Message';
        }

        if(empty($_POST['phone'])){
            $error['phone'] = 'please Insert Your phone';
        }
    }

        ?>

<!DOCTYPE html>

<html>

<head>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us Page</title>



    
</head>
    

<body>

<?php  
include_once "includes/nav_customer.php";
?>
    


<section class="order cntform"  id="order">

    <div class="heading">
        <span>Contact Us</span>
        <h3>Get In Touch</h3>
    </div>

    <div class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <h3>8:00am to 11:59pm</h3>
        </div>

        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <h3>0122-656-4680</h3>
        </div>

        <div class="icons">
            <img src="images/icon-3.png" alt="">
            <h3>Egypt, Cairo</h3>

        </div>

        

    </div>


    <?php
//add complain to table complain in database 

					if(isset($_POST['send'])){ // Check if submit button presed from the user
						$host= '127.0.0.1';
						$user='root';
						$pass='';
						$db='grocery';
						$con=mysqli_connect($host,$user,$pass,$db);
						if($con){
							if(!empty($_POST['FirstName']) && !empty($_POST['phone'] && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message']))){
								$sql= "insert into complain (customername	,customernumber	,address,email,description) values ('".$_POST['FirstName']."','".$_POST['phone']."','".$_POST['subject']."','".$_POST['email']."','".$_POST['message']."');";	
								$query=mysqli_query($con,$sql);
								if($query){
								echo "<div>"."Thank you! We Will Contcat You Soon ."."</div>";
								}
							}else{
								echo "Please fill your infornamtion!";
							}
							
						}
					}
				?>
    
    

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="contactForm" method="POST" enctype="multipart/form-data">

        <div class="flex">
            <div class="inputBox">
                <span> Name</span>
                <input type="text" placeholder="customer's name" name="FirstName" id="" value="<?php if(isset($FirstName)) echo $FirstName; ?>">

                <span>
                    <?php
                        if(isset($error['FirstName'])){
                            echo $error['FirstName'];
                            
                        }
                    ?>
                </span>
            </div>
            <div class="inputBox">
                <span>your number</span>
                <input type="number" placeholder="customer's number" name="phone" id="" value="<?php if(isset($phone)) echo $phone; ?>">

                <span>
                    <?php
                        if(isset($error['phone'])){
                            echo $error['phone'];
                        }
                    ?>
                </span>

            </div>
        </div>

        <div class="flex">
            
            <div class="inputBox">
                <span>Your Email</span>
                <input type="text" placeholder="customer's Email" name="email" id="" value="<?php if(isset($email)) echo $email; ?>">

                <span>
                    <?php
                        if(isset($error['email'])){
                            echo $error['email'];
                        }
                    ?>
                </span>


            </div>
          
            <div class="inputBox">
                <span>Address</span>
                <input type="text" placeholder="your Adress" name="subject" id="" value="<?php if(isset($subject)) echo $subject; ?>">

                <span>
                    <?php
                        if(isset($error['subject'])){
                            echo $error['subject'];
                        }
                    ?>
                </span>
            </div>
        </div>

        
            
        </div>

        

        <div class="flex">
            <div class="inputBox">
               
            <textarea placeholder="your massage" name="message" id="" cols="30" rows="10" value="<?php if(isset($message)) echo $message; ?>"></textarea>
                <span>
                    <?php
                        if(isset($error['message'])){
                            echo $error['message'];
                        }
                        
                    ?>
                </span>


            </div>
            <div class="inputBox">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55201.978899051515!2d31.664831314659992!3d30.147879752106647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457f7d7c85c1e63%3A0xa16c80a505d27145!2z2YXYr9mK2YbYqSDYp9mE2LTYsdmI2YLYjCDZgtiz2YUg2KfZhNi02LHZiNmC2Iwg2YXYrdin2YHYuNipINin2YTZgtin2YfYsdip4oCs!5e0!3m2!1sar!2seg!4v1649026632314!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
            </div>
        </div>

        <input type="submit" name="send" value="Send"  class="bttn">

    </form>
 

</section>



    <center><img src="./images/footerstrip.png" style="width: 80%; "></center>
    <?php  
include_once "includes/footer.php";
?>
 
<div style="padding-left:16px">
  
</div>

</body>
    
</html>

