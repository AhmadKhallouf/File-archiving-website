<!DOCTYPE>
<html>
    <head>
        <title>added page</title>
    </head>
    <body>

         <form action="fun/addfile.php" method="post" enctype="multipart/form-data">
           <lable>Direct to</lable>
           <br>
           <select name="wto">
               <option>people</option>
               <option>employee</option>
               <option>users</option>
           </select>
           <br>
           <lable>type</lable>
               <br>
           <select name="wtype">
                 <option>Export</option>
                 <option>Import</option>
               </select>
               <br>

            <lable>Address</lable><br>
            <input type="" name="wtitle" ><br>
            <lable>Subject</lable><br>
            <textarea name="wsubject"></textarea><br>
            <input type="file" name="wattachment" ><br>
            <input type="submit" name="" >

               </form>

    </body>
</html>