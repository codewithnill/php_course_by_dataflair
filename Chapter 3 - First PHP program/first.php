<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php program</title>
</head>
<body>
    <center>
        <marquee>This is my first php code</marquee>
        <?php
            echo "<font color=red size=5> Hello, World!</font>";
            echo "<br> This is my php certification course."; // Added semicolon automatically
            print("<br> This is my php certification course.");
            // <br> - error

            echo "<br>";
            $a=100;
            $b=50;
            $c=$a+$b;
            echo "Addition of ".$a." and ".$b." is: ".$c;
            $a="Hello"; // dynamic declaration
        ?>
    </center>
    
</body>
</html>