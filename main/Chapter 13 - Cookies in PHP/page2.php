<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <marquee>Page 2</marquee>
    <center>
        <?php
           $user=$_COOKIE['username'];
           $password=$_COOKIE['password'];

           echo "user name in second page: " . $user . "<br>";
           echo "password in second page: " . $password;


        ?>

        

    </center>
    
</body>
</html>