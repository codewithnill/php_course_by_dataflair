<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatypes</title>
</head>
<body>
    <center>
        <?php
            $a=150; // int
            echo $a."<br>";
            $b=15.5; // float
            echo $b."<br>";

            if($a>$b) {
                echo "a is greater than b<br>";
            } else {
                echo "b is greater than a<br>";
            }


            $c="Hello World"; // string
            echo $c."<br>";
            $d=TRUE; // boolean (prints 1 for true)
            echo $d."<br>";
            $d=FALSE; // boolean (prints nothing for false)
            echo $d."<br>";
            $ar=array("PHP","Java","Python"); // array
            echo $ar[0]."<br>";
            echo $ar[1]."<br>";
            echo $ar[2]."<br>";
            print_r($ar); // used to print array
            echo "<br>";
            $e=null; // null -> prints nothing
            echo $e."<br>";

            // class test{

            // }

            // t=new test();


            // $f=12;
            $f=0;

            if($f) {
                echo "f is true<br>";
            } else {
                echo "f is false<br>";
            }


            if(150) {
                echo "150 is true<br>";
            } else {
                echo "150 is false<br>";
            }

        ?>
    </center>
    
</body>
</html>