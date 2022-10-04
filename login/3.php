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