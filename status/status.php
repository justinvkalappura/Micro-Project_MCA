<html>
    <head>
        <title>Status</title>
        <link rel="stylesheet" href="statuscss.css">
    </head>
    <body>
        <div class="d">
            <table class="table">
                <caption><h3>PRESENT&nbsp;&nbsp;STATUS</h3></caption>
                <tr> 
                    <th>SL.NO:</th>
                    <th>Name:</th>
                    <th>Email:</th>
                    <th>Your Status</th>
                </tr>
                <?php
                include('connection.php');
                    $sql ="SELECT slno,username,email,passwd,mobile,stats FROM user";
                    $retval = mysqli_query( $conn, $sql);
                    $count=0;
                    $rows = mysqli_fetch_all($retval, MYSQLI_ASSOC );
                    foreach((array)$rows as $row){
                        $count++;
                        $id=$row['slno'];
                        $name=$row['username'];
                        $email=$row['email'];
                        $status=$row['stats'];
                        echo '
                        <tr>
                        <td>'.$count.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$status.'</td>
                        </tr>
                        ';
                    }
                ?>
            </table>
        </div>
    </body>
</html>