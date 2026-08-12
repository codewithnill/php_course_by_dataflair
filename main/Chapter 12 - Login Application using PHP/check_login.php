<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check login page</title>
</head>
<body>
    <marquee>Check Login Page</marquee>
    <center>
        <?php
            $username = $_POST['txtuser']; // name inside the square bracket is same as name attribute of input tag in user_login.php file
            $password = $_POST['txtpass'];

            echo $username . "<br>";
            echo $password . "<br>";

            if(strcmp($username, "john") == 0 && strcasecmp($password, "123") == 0){ // strcmp is case sensitive and strcasecmp is case insensitive
                echo "<font color='green' size='5'>Valid user</font>";
            }
            else{
                echo "<font color='red' size='5'>Invalid user</font>";
            }

        ?>
    </center>











    <?php
        // EXPLANATION: How data arrives and why warnings occur

        // SCENARIO 1: Form submitted with METHOD="GET"
        // Browser URL: check_login.php?txtuser=john&txtpass=123
        // $_GET array contains: ['txtuser' => 'john', 'txtpass' => '123']
        // Result: No warnings, variables get values

        // SCENARIO 2: Form submitted with METHOD="POST"  
        // Browser URL: check_login.php (data hidden in request body)
        // $_POST array contains: ['txtuser' => 'john', 'txtpass' => '123']
        // Result: No warnings, variables get values

        // SCENARIO 3: Direct access (typing URL or refreshing)
        // Browser URL: check_login.php (no query parameters)
        // $_GET array is: EMPTY
        // $_POST array is: EMPTY
        // Result: WARNING - Trying to access array key that doesn't exist

        // $username = $_GET['txtuser']; // LINE 12 - WARNING if accessed directly
        // $password = $_GET['txtpass']; // LINE 13 - WARNING if accessed directly

        // VISUAL DIFFERENCE IN BROWSER ADDRESS BAR:
        // 
        // GET method after submit:
        // http://localhost/check_login.php?txtuser=john&txtpass=123
        //                                    ↑ Data visible here ↑
        //
        // POST method after submit:
        // http://localhost/check_login.php
        //                                    ↑ No data visible ↑
        //
        // Direct access (either method):
        // http://localhost/check_login.php
        //                                    ↑ No data, no submission ↑
?>
    
</body>
</html>