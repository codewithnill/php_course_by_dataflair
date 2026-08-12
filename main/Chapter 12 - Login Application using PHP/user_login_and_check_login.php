<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login and check login</title>
</head>
<body>
    <marquee>Login Page</marquee>
    <center>
        <form method="POST" action="">  
            <!-- username and password can be seen in url when we use get method, and when we use post method username and password cannot be seen in url -->
            <table border="1">
                <tr>
                    <th>
                        username
                    </th>

                    <td>
                        <input type="text" name="txtuser">
                    </td>
                </tr>
                    <th>
                        password
                    </th>

                    <td>
                        <input type="password" name="txtpass">
                    </td>
                <tr>
                    <td>

                    </td>

                    <td>
                        <input type="submit" value="Submit" name="btnsubmit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>


            </table>
        </form>

        <!-- now in single file -->
         <!-- we want this code to run after clicking submit, so we will use isset -->
         <?php

            if(isset($_POST['btnsubmit'])){ // if submit button is clicked then only this code will run, otherwise it will not run and no warnings will occur
            // isset-> it checks whether the variable is set or not, if it is set then it returns true otherwise it returns false, so when we click submit button then only this code will run and when we open this file directly then this code will not run and no warnings will occur because we are trying to access array key that doesn't exist in $_POST array when we open this file directly, but when we click submit button then this code will run and no warnings will occur because we are trying to access array key that exists in $_POST array when we click submit button


                // now full code is brought here, so we will check login in the same file, we will not go to another file, so action is empty in form tag and we will write code here to check login
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
            }

        ?>




    </center>
    
</body>
</html>