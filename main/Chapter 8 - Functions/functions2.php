<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <marquee>Functions</marquee>
    <center>
        <?php
            function show($a,$b) { // call by value or copy by value
                $a=$a+100;
                $b=$b+100;
                echo $a ." ". $b;
                echo "<br>";
            }

            // call
            $a=50;
            $b=20;
            show($a,$b);
            echo $a ." ". $b;
            echo "<br>";



            function show2(&$a,&$b) { // call by reference or copy by reference
                $a=$a+100;
                $b=$b+100;
                echo $a ." ". $b;
                echo "<br>";
            }

            // call
            $a=50;
            $b=20;
            show2($a,$b);
            echo $a ." ". $b;
        ?>
    </center>
</body>
</html>