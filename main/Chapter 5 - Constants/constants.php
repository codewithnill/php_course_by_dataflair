<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <center>
        <?php
            define("PI", 3.14);
            echo PI; // Output: 3.14    
            echo"<br>";
            echo "The value of PI is: " . PI;
            echo"<br>";
            // define("PI", 3.14);
            // Attempting to redefine a constant will result in an error
            $r=5;
            $area = PI * $r * $r;
            echo "The area of a circle with radius $r is: $area";
            echo "<br>The area of a circle with radius $r is: " . $area;
        ?>
    </center>
    
</body>
</html>