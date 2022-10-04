<?php 
include ('connection.php'); 

if (isset($_POST['submit'])){
    $uname=$_POST['usrname'];
    $pwd=$_POST['passwd'];
    $email=$_POST['email'];
    $ph=$_POST['mobile'];
    $status='Pending';

    $sql="INSERT INTO user(username,passwd,email,mobile,stats) VALUES('$uname','$pwd','$email','$ph','$status')";
    $result = mysqli_query($conn,$sql);
    if ($result){
        die(header("Location: login.php"));
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
         <title>Signup</title>
         <link rel="stylesheet" type="text/css" href="signupcss.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                 <h1><u style="color:#ff7200">Signup</u></h1>
            </div>
            <div class="main">
                <form action="#" method="POST" >
                    <span>
                         <input type="text" placeholder="Username" name="usrname">
                    </span>
                
                    <span>
                          <input type="email" placeholder="Email" name="email">
                    </span>

                    <span>
                          <input type="password" placeholder="Password" name="passwd">
                    </span>

                    <span>
                          <input type="tel" name="mobile" id="" placeholder="Mobile">
                    </span>
                
                    <button class="btnn" name="submit" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </body>
</html>