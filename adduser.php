<!DOCTYPE html>
<html>
    <header>
        <title>اضافة مستخدم</title>
        <style type="text/css">
          div{
              top: 75px;   
              position: relative;;
              background: rgb(136, 34, 114);
              width : 33%;
              left : 33%;
       
                  }
           input{
               font-size: 28px;
               position: relative;
               width: 66%;
           }
           label{
               font-size: 28px;
               position: relative;
               width: 33%;
           }       
       
       </style>
    </header>
    <body>
      
      
      <div>
      <label>اضافة مستخدم جديد</label>
          <center>
          <?php
              $q1 = $_GET['q1'];
              if($q1 == 1){
                echo"SOORY!!!! the user name is realy exist ";
                
              } 
              if($q1 == 2){
                echo"!!!please return write the password ";
              } 
          ?>
          </center>
      <form action="fun/adduser.php" method="get">
       
        <br>
        <input type="" name="wname">
        <label>الاسم</label>
        <br>  
        
        <input type="" name="wusername">
        <label>اسم المستخدم</label>
        <br>
        
        <input type="date" name="wdate">
        <label>تاريخ الميلاد</label>
        <br>
        
        <input type="password" name="wpassword">
        <label>كلمة السر</label>
        <br>
        
        <input type="password" name="wpassword2">
        <label>اعادة كلمة السر</label>
        <br>
        
        <input type="tel" name="wtele">
        <label>هاتف</label>
        <br>
        <br>
        <lable style="width: 50px">الجنس</lable>
        <br>
        <input style="width: 50px" type="radio" name="wsex" value="ذكر"><label style="width: 50px">ذكر</label><br>
        <input style="width: 50px" type="radio" name="wsex" value="أنثى"><label style="width: 50px">أنثى</label><br>
        <br>
        
        <select style="width: 75%; font-size: 28px;" name="wcountry">
            <option></option>
            <option value="Egypt">Egypt</option>
            <option value="Syria">Syria</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Jordan">Jordan</option>
            <option value="Eraq">Eraq</option>
        </select>
        <lable style="width: 25%;">الدولة</lable>
        <br>
        <br>
        <input  style="width: 100%;" type="submit" name="" >

          
      </form>
    </div>



    </body>
</html>