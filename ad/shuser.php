<!DOCTYPE html>
<html>
<head>
    <title>search on users</title>
    <style type="text/css">
        table ,tr ,th ,td {
            border: 1px solid black;
        }



    </style>
</head>
<body>
    <form action="shuser.php" method="get">
        <input type="" name="n1" >
        <input type="submit" name="" >
    </form>
    <table>
             <tr>
                 <th>delete</th>
                 <th>save</th>
                 <th>Post</th>
                 <th>Country</th>
                 <th>Sex</th>
                 <th>Tele</th>
                 <th>Password</th>
                 <th>UserName</th>
                 <th>Bdate</th>
                 <th>Name</th>
                 <th>ID</th>
             </tr>
             <?php
                include('../connect.php');
                error_reporting(0);
                $n1 = $_GET['n1'];
                
                $sql = "SELECT * FROM wuser WHERE wusername LIKE '%$n1%' OR wname LIKE'%$n2%' ";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
                    $count = $result->num_rows;
             ?>
             <tr>
                 <td><a href="fun/deleteuser.php?n1=<?php echo $row['wid'] ?>"><button>delete</button></a></td>
                 <form action="fun/updateuser.php" method="get">
                 <td><input type="submit" name="" value="save"></td>
                 <input type="hidden" name="wid" value="<?php echo $row['wid'] ?>" >
                 <td>
                    <select style="width: 75%; font-size: 28px;" name="status">
                         <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                         <option value="user">user</option>
                         <option value="admin">admin</option>
                         <option value="employee">employee</option>
                    </select>
                 </td>
                </form>
                 <td><?php echo $row['wcountry'] ?></td>
                 <td><?php echo $row['wsex'] ?></td>
                 <td><?php echo $row['wtele'] ?></td>
                 <td><?php echo $row['wpassword'] ?></td>
                 <td><?php echo $row['wusername'] ?></td>
                 <td><?php echo $row['wdate'] ?></td>
                 <td><?php echo $row['wname'] ?></td>
                 <td><?php echo $row['wid'] ?></td>
             </tr>
             <?php
                }
             ?>



    </table>
</body>

</html>