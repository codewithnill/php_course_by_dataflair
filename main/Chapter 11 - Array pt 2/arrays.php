<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <marquee>Arrays</marquee>
    <center>
        <?php
            $array1=array("Mon","Tue","Wed","Sat");
            $array2=array("Mon","Wed","Thu","Feb","Tue");
            $array3=array("Mon","Wed","Fri","Jan","Sat");


            $newarry=array_intersect($array1,$array2); //returns the common elements in both arrays
            echo "The common elements in array1 and array2 are: ";
            print_r($newarry);
            echo "<br>";

            $newarry=array_diff($array1,$array2); //returns the elements in array1 that are not in array2
            echo "The elements in array1 that are not in array2 are: ";
            print_r($newarry);
            echo "<br>";

            $array1=array("BTech","MCA","MTech","BTech","BCA","MCA");
            $newarry=array_unique($array1); //returns the unique elements in the array
            echo "The unique elements in array1 are: ";
            print_r($newarry);




            function multi($n) {
                return $n*5;
            }



            $array1=array(5,10,20,30,40,50,9,11,13);
            $newarry=array_map("multi",$array1); //returns the array after applying the function to each element of the array
            print_r($newarry);


            $newarry=range(1,10); //returns an array of elements from 1 to 10
            print_r($newarry);
        ?>
    </center>
</body>
</html>