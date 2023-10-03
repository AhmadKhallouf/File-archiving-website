<!DOCTYPE>
<html>
    <head>
        <title>added page</title>
    </head>
    <body>
    <?php
    include('../connect.php');
    $n1=$_GET['n1'];
      $sql = "SELECT * FROM wfile WHERE wid='$n1' ";

      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){
    ?>
         <form action="fun/updatefile.php" method="post" enctype="multipart/form-data">
           <input style="display:none;" type="" name="wid" value="<?php echo $row['wid'] ?>">
           <input style="display:none;" type="" name="wold" value="<?php echo $row['wattachment'] ?>">
           <lable>Direct to</lable>
           <br>
           <select name="wto">
               <option><?php echo $row['wto'] ?></option>
               <option>people</option>
               <option>employee</option>
               <option>users</option>
           </select>
           <br>
           <lable>type</lable>
               <br>
           <select name="wtype">
               <option><?php echo $row['wtype'] ?></option>
                 <option>Export</option>
                 <option>Import</option>
               </select>
               <br>

            <lable>Address</lable><br>
            <input type="" name="wtitle" value="<?php echo $row['wtitle'] ?>"><br>
            <lable>Subject</lable><br>
            <textarea name="wsubject"><?php echo $row['wsubject'] ?></textarea><br>
            <input type="file" name="wattachment" ><br>
            <input type="submit" name="" >
            <br>
            <br>
            <img src="file/<?php echo $row['wattachment'] ?>">

               </form>
               <?php
                      } 
                  ?>

    </body>
</html>