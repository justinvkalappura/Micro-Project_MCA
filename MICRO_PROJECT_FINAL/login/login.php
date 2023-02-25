<?php 
include ('connection.php'); 
session_start();

if (isset($_POST['submit'])){
	$email=$_POST['email'];
	$pwd=$_POST['passwd'];
	$sql="SELECT * FROM user WHERE email='$email' AND passwd='$pwd'";
	$result = mysqli_query($conn,$sql);
	if ($result){
		if (mysqli_num_rows($result)>0){
               $row = mysqli_fetch_array($result);
               $_SESSION['name']=$row['username'];
			die(header("Location: home.php"));
		}
		else{
			echo 'Invalid username or password';
		}
	}
	else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}	
}
?>
<html>
    <head>
       <link rel="stylesheet" href="logincss.css"> 
       <title>Login</title>
    </head>
    <body>
         <div class="login">
              <div class="form">
                    <h2>Login Here</h2>
                    <form action='#' method="POST">
                                <input type="email" name="email" placeholder="Enter Email" required="required">
                                <input type="password" name="passwd" placeholder="Password">
                                <button class="btnn" name="submit" type="submit">Login</button>
                    </form>
                    <p class="link">Dont have an account<br>
                    <a href="signup.php">Sign up</a> here</a></p>
                    <p class="liw">Log in with</p>
                    <div class="icons">
                               <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                               <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                               <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                               <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                               <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>         
              </div>
         </div>
         <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>