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
            echo "Password: " . $password;


            $cookie_name="username";
            $cookie_name_value=$username;

            $cookie_password="password";
            $cookie_pass_value=$password;


            // without time parameter
            setcookie($cookie_name, $cookie_name_value); 
            setcookie("password", $cookie_pass_value);
            

            // with time parameter
            // setcookie($cookie_name, $cookie_name_value, time() + (86400 * 30), "/"); // 86400 = 1 day 
            // setcookie("password", $cookie_pass_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            
            
            // setcookie function is used to set a cookie in the user's browser. It takes several parameters:
            // $cookie_name: The name of the cookie.
            // $cookie_value: The value of the cookie.
            // time() + (86400 * 30): The expiration time of the cookie. In this case, it is set to expire in 30 days (86400 seconds in a day).
            // "/": The path on the server where the cookie will be available. In this case, it is set to "/" which means the cookie will be available across the entire website.


        ?>

        <form method="POST" action="page2.php">  
            <input type="submit" value="Go to Page 2"> 
            

        </form>

    </center>
    
</body>
</html>