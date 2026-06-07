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

            $mycon=mysqli_connect("127.0.0.1","root","Megadeth69@.","dataflair");
            echo "Connection Established<br>";
            // $sql="SELECT * FROM emp";
            $sql="SELECT * FROM emp WHERE eid=501";
            $record=$mycon->query($sql);
            $n=mysqli_num_rows($record);
            echo "Total Records: $n<br>";
            if($n>0){
                while($row=$record->fetch_assoc()){
                    echo "ID: ".$row['eid']."<br>";
                    echo "Name: ".$row['ename']."<br>";
                    echo "Salary: ".$row['esal']."<br>";
                    echo "Department: ".$row['edept']."<br><hr>";
                }
            } else {
                echo "<font color='red' size='5'>No Records Found</font>";
            }

            $mycon->close();
    
        ?>
        
    </center>
</body>
</html>