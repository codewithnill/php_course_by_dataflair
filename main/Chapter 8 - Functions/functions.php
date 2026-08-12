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
            function display() // definition
            {
                echo "This is a function code <br>";
            }

            display(); // calling
            display();
            display();  
            echo "end program <br>";


            function add($a, $b) {
                return $a + $b;
            }

            function subtract($a, $b) { // parameters
                return $a - $b;
            }

            function multiply($a, $b) {
                return $a * $b;
            }

            
            function divide($a, $b) {
                if ($b == 0) {
                    return "Cannot divide by zero";
                }
                return $a / $b;
            }

            // Example usage
            echo "Addition: " . add(10, 5) . "<br>";
            echo "Subtraction: " . subtract(10, 5) . "<br>"; // arguments
            echo "Multiplication: " . multiply(10, 5) . "<br>";
            echo "Division: " . divide(10, 5) . "<br>";





            // calling function with parameter var args
            function sum(...$numbers) {
                $sum = 0;
                foreach ($numbers as $number) {
                    $sum += $number;
                    // echo "The sum is: " . $sum . "<br>";
                }
                echo "The sum is: " . $sum . "<br>";
            }

            sum(50,20); // arguments
            echo "<br>";
            sum(100,200,300); // arguments
            echo "<br>";
            sum(30,10,20,50); // arguments





            // call  by function
            function addFive(&$num) {
                $num += 5;
            }

            $x = 10;
            addFive($x);
            echo $x;  // 15 (changed)

            echo "<br>";
            // return by function
            function getGreeting($name) {
                return "Hello, " . $name . "!";
            }   

            $greeting = getGreeting("Alice");
            echo $greeting;  // Hello, Alice!
        ?>
    </center>
</body>
</html>