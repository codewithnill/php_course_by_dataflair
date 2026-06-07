<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php
            $eid=501;
            $ename="Rajesh Sharma";
            $esal=70000;
            $edept='IT';


            $mycon=mysqli_connect("127.0.0.1","root","Megadeth69@.","dataflair");
            echo "Connection Established<br>";
            $sql="insert into emp values(?,?,?,?)";
            $ps=$mycon->prepare($sql);
            $ps->bind_param("isis",$eid,$ename,$esal,$edept);
            $ps->execute();
            echo "Record Inserted";


            
        ?>
        
    </center>
</body>
</html>