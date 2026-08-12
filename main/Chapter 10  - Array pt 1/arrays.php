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
            // simple arrays
            $ar=array("indore","pune","delhi","raipur");
            print_r($ar);
            echo "<br>";

            
            $newArray=array_slice($ar,1,3,true); // it will start from 1st index and count 3 elements and then print those 3 elements
            print_r($newArray);
            echo "<br>";

            $newArray=array_slice($ar,-4,2,true); // it will start from last and count 4 elements and then print 2 elements (reverse indexing)
            print_r($newArray);
            echo "<br>";


            // printing every elements
            for($i=0;$i<count($ar);$i++){
                echo $ar[$i]."<br>";
            }

            echo "<br>";

            // using while loop
            $i=0;
            while($i<count($ar)){
                echo $ar[$i]."<br>";
                $i++;
            }
            echo "<br>";

            // associative arrays
            $ar1=array("name"=>"john","age"=>30,"city"=>"new york");
            print_r($ar1);

        ?>
    </center>
</body>
</html>