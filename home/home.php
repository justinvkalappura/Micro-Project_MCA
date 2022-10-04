<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="homecss.css"> 
        <title>Home</title>
    </head>
    <body>
        <div class="main">
           <div class="navbar">
               <div class="menu">
                   <ul>
                       <li><a href="#">HOME</a></li>
                       <li><a href="status.php">YOUR_BOOKING_STATUS</a></li>
                       <li><a href="projects.html">UPCOMING_PROJECTS</a></li>
                       <?php 
                            session_start();
                            if(isset($_SESSION['name']))
                            {     echo '<li><a href="logout.php">LOGOUT</a></li>';
                            }
                            else{ echo '<li><a href="login.php">LOGIN</a></li>';
                                }
                        ?>
                       <li><a href="#"></a></li>
                    </ul>
               
                <?php
                   if(isset($_SESSION['name'])){
                           echo '<div class="search">
                           <h3>Welcome '.$_SESSION['name'].',</h3>
                           </div>';
                           }
                    else{
                           echo '<div class="search">
                           <h3>Welcome Guest,</h3>
                           </div>';
                           }
                ?>
                </div>
            </div>
            <div class="content">
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>the</span>soul<span>Architects</span></h1>
                <p class="par">"Architecture should speak of its time and place,but yearn for timelessness"
                <br><p class="or"> -Frank Gehry</p><br></p>
                <button class="cn"><a href="login.php">JOIN US</a></button>
            </div>
            <div class="motto">
                Think,Plan,Do,Action
             </div>
        </div>
                      
        <div class="m">
            <center>
                <div class="container1">
                <div id="card2">
                    <a href="#">
                        <img src="home1.png" alt="projects"><br>
                        <h3>Projects</h3>
                    </a>
                </div>
                <div id="card3">
                    <a href="#">
                        <img src="home2.png" alt="countries"><br>
                        <h3>Countries</h3>
                    </a>
                </div>
                <div id="card2">
                    <a href="#">
                        <img src="home3.png" alt="gas"><br>
                        <p>Bond</p>
                    </a>
                </div>
                </div>
            </center>
        </div>
    </body>
</html>