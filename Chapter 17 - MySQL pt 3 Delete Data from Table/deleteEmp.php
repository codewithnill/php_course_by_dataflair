<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form method=POST action="deleteEmp.php">
                <table border=1>
                    <tr>
                        <td>Enter Employee ID to Delete</td>
                        <td><input type="text" name="txtid"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td> <input type="submit" value="search" name="btnsubmit"></td>
                    </tr>
                </table>
            </form>


        <?php

        

            if(isset($_POST['btnsubmit'])){
                $eid=$_POST['txtid'];
                $mycon=mysqli_connect("127.0.0.1","root","Megadeth69@.","dataflair");
                $sql="SELECT * FROM emp WHERE eid=$eid";
                $record=$mycon->query($sql);
                $n=mysqli_num_rows($record);
                if($n>0){
                    session_start();
                    $_SESSION['empid']=$eid;
                    echo "<table border=1>";
                    echo "<tr><th>Emp ID</th><th>Name</th><th>Salary</th><th>Department</th></tr>";
                    while($row=$record->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['eid']."</td>";
                        echo "<td>".$row['ename']."</td>";
                        echo "<td>".$row['esal']."</td>";
                        echo "<td>".$row['edept']."</td>";
                        echo "<form method=POST action='deleteData.php'>";
                        echo "<td><input type='submit' value='delete' name='submit'></td>";
                        echo "</form>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<font color='red' size='5'>No Records Found</font>";
                    exit();
                }
                
            }

        ?>
        
    </center>
</body>
</html>