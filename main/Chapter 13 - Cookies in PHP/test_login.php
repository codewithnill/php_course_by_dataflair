<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <marquee>Login Page</marquee>
    <center>
        <form method="POST" action="page1.php">  
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
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>


            </table>
        </form>



   


    </center>
    
</body>
</html>