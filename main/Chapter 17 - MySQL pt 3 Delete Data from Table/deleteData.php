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
            session_start();
            $eid=$_SESSION['empid'];

            $sql="DELETE FROM emp WHERE eid=?";
            $ps=$mycon->prepare($sql);
            $ps->bind_param("i",$eid);
            if($ps->execute()){
                echo "<font color='green' size='5'>Record Deleted Successfully</font>";
            } else {
                echo "<font color='red' size='5'>Error Deleting Record</font>";
            }

        ?>
        
    </center>
</body>
</html>