<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <marquee>Page 1</marquee>
    <center>
        <?php
            $username = $_POST['txtuser'];
            $password = $_POST['txtpass'];

            echo "Username: " . $username . "<br>";
            echo "Password: " . $password . "<br>";



            // for using $_SESSION we have to start session in every page where we want to use session
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;  
        ?>


    <form method="POST" action="mypage2.php">
        <input type="submit" value="Go to page 2">
    </form>
       

    </center>
    
</body>
</html>