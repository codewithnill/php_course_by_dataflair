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
            session_start();
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];

            echo "Username: " . $username . "<br>";
            echo "Password: " . $password . "<br>";

            session_unset(); // to unset session variables. Clears all $_SESSION variables
            session_destroy(); // to destroy the session. After calling this function, the session is destroyed and the session ID is no longer valid.

            /*
            // OPTION 1: Only session_unset()
            session_unset();
            // Result: $_SESSION becomes empty array
            // But session file still exists on server (empty)
            // var_dump($_SESSION); // array(0) { }

            // OPTION 2: Only session_destroy()
            session_destroy();
            // Result: Session file deleted from server
            // But $_SESSION array still has data in current script!
            var_dump($_SESSION); // Still shows 'john' and email during this request!

            // OPTION 3: session_unset() + session_destroy() (your code)
            session_unset();  // Clears $_SESSION for current request
            session_destroy(); // Deletes session file on server
            // Result: Completely clean - both memory and file
            */
        ?>
            

    </center>
    
</body>
</html>