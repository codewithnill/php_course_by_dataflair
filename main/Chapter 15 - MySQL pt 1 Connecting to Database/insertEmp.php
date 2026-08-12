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
            // $eid=501;
            // $ename="Rajesh Sharma";
            // $esal=70000;
            // $edept='IT';


            // $mycon=mysqli_connect("127.0.0.1","root","Megadeth69@.","dataflair");
            // echo "Connection Established<br>";
            // $sql="insert into emp values(?,?,?,?)";
            // $ps=$mycon->prepare($sql);
            // $ps->bind_param("isis",$eid,$ename,$esal,$edept);
            // $ps->execute();
            // echo "Record Inserted";
    
        ?>


        <!-- now taking above data with the help of form -->
        <form action="insertEmp.php" method="POST">
            ID: <input type="text" id="eid" name="txtid"><br>
            Name: <input type="text" id="ename" name="txtname"><br>
            Salary: <input type="text" id="esal" name="txtsal"><br>
            Department: <input type="text" id="edept" name="txtdept"><br>
            <input type="submit" value="Insert Record" name="btnsubmit">
        </form>

        <?php
            if(isset($_POST['btnsubmit'])){
                $eid=$_POST['txtid'];
                $ename=$_POST['txtname'];
                $esal=$_POST['txtsal'];
                $edept=$_POST['txtdept'];

                $mycon=mysqli_connect("127.0.0.1","root","Megadeth69@.","dataflair");
                echo "Connection Established<br>";
                $sql="insert into emp values(?,?,?,?)";
                $ps=$mycon->prepare($sql);
                $ps->bind_param("isis",$eid,$ename,$esal,$edept);
                $ps->execute();
                echo "Record Inserted";
            }
        ?> 
        
    </center>
</body>
</html>