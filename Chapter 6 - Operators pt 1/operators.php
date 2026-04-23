<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <center>
        <?php
            // arithmetcic operators
            echo (10+10)."<br>"; // use brackets
            echo (10-10)."<br>";
            echo (10*10)."<br>";
            echo (10/10)."<br>";
            echo (10%10)."<br>";
            echo (10**2)."<br>";






            // relational operators
            $a=50;
            $b=20;
            echo ($a==$b)."<br>"; // false
            echo ($a!=$b)."<br>"; // true   
            echo ($a>$b)."<br>"; // false
            echo ($a<$b)."<br>"; // true

            $b='50';
            echo ($a==$b)."<br>"; // true
            echo ($a===$b)."<br>"; // false

            $b=1;
            echo ($a<>$b)."<br>"; // not equal to operator -> true

            $a=50;
            $b=20;
            echo ($a<=>$b)."<br>"; // spaceship operator -> 1 (greater than)
            // if $a and $b are equal, it will return 0
            // if $a is less than $b, it will return -1

            $a=50;
            $b='50';
            $c=50;
            if(($a===$b)==$c) //  $a is not identical to $b, it will return false (0), and then it will compare 0 with $c (50), which is also false (0)
                echo "hello";
            else 
                echo "bye";


            // increment and decrement operators
            $a=10; // unary operator
            echo $a++."<br>"; // post-increment -> it will return the value of $a before incrementing it
            echo $a."<br>"; // it will return the value of $a after incrementing
            

        ?>
    </center>
    
</body>
</html>