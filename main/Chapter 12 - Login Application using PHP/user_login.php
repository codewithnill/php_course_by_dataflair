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
        <form method="POST" action="check_login.php">  
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



        <!-- 
            EXPLANATION: What happens when you click SUBMIT vs open URL directly?

            WHEN YOU CLICK SUBMIT BUTTON:
            1. Browser collects all form field values (txtuser, txtpass)
            2. Browser sends an HTTP request to the action URL (check_login.php)
            3. The data is sent according to the method attribute:

            With METHOD="GET":
            - Data is APPENDED to the URL as query parameters
            - URL becomes: check_login.php?txtuser=john&txtpass=123
            - Data is visible in address bar
            - Request is: GET /check_login.php?txtuser=john&txtpass=123 HTTP/1.1
            
            With METHOD="POST":
            - Data is sent in the REQUEST BODY (not in URL)
            - URL stays as: check_login.php
            - Data is NOT visible in address bar
            - Request is: POST /check_login.php HTTP/1.1
                            Body: txtuser=john&txtpass=123





            WHEN YOU OPEN URL DIRECTLY (type in address bar or click link):
            - Browser sends a simple GET request with NO data
            - No form submission occurs
            - PHP receives empty $_GET or $_POST arrays
            - Result: "Undefined array key" warnings appear

            WHY WARNINGS APPEAR:
            - When accessing directly: $_GET['txtuser'] doesn't exist
            - When submitting GET form: $_GET['txtuser'] exists with value
            - When submitting POST form: $_POST['txtuser'] exists with value
        -->


    </center>
    
</body>
</html>