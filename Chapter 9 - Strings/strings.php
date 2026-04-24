<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <marquee>Strings</marquee>
    <center>
        <?php
            $mystr="data flair php free course";
            $n=strlen($mystr);

            echo "Length of the string '$mystr' is: " . $n . "<br>";
            $wordcount=str_word_count($mystr); 
            echo "Number of words in the string '$mystr' is: " . $wordcount . "<br>";

            // including characters between the string
            $newstr=chunk_split($mystr, 2, ".");
            echo "The string after including characters is: " . $newstr . "<br>";
            echo $mystr . "<br>"; // immutable string

            // splitting the string into an array
            $arr=str_split($mystr,4);
            echo "The array after splitting the string is: ";
            print_r($arr);

            // converting to uppercase
            $upperstr=strtoupper($mystr);
            echo "<br>The string in uppercase is: " . $upperstr . "<br>";

            // counting a specific word in the string
            $count=substr_count($mystr,"data");
            echo "<br>The word 'data' appears " . $count . " times in the string.<br>";
            // substr_count($mystr,"data",21) // will count the word 'data' starting from the 21st position in the string


            // converting every first character of the word to uppercase
            $ucfirststr=ucwords($mystr);
            echo "<br>The string with uppercase first letters is: " . $ucfirststr . "<br>";

            // only the first character of the string to uppercase
            $ucfirststr=ucfirst($mystr);
            echo "<br>The string with uppercase first letter is: " . $ucfirststr . "<br>";

            // converting first character of the string to lowercase
            $lcfirststr=lcfirst($mystr);
            echo "<br>The string with lowercase first letter is: " . $lcfirststr . "<br>";

            // comparing two strings
            $str1="indore";
            $str2="Indore";
            if(strcmp($str1,$str2)==0){
                echo "<br>Same<br>";
            }
            else{
                echo "<br>Not same<br>";
            }


            // comparing two strings ignoring case
            if(strcasecmp($str1,$str2)==0){
                echo "<br>Same<br>";
            }
            else{
                echo "<br>Not same<br>";
            }

        ?>
    </center>
</body>
</html>