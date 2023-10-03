<!DOCTYPE html>
<html>
<header>
    <title>صفحة الدخول</title>
    <style type="text/css">
       div{
           top: 200px;   
           position: relative;
           background: green;
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
    <?php
    session_start();
    session_unset();
    session_destroy();
    ?>
</header>
<body>
   <div>
<form action="fun/logintest.php" method="get">
    <input type="" name="n1" placeholder="أدخل اسم المستخدم">
    <label>اسم المستخدم</label>
    <br>
    <input type="password" name="n2" placeholder="أدخل كلمة السر">
    <label>كلمة السر</label>
    <br>
    <input style="width: 100%;" type="submit" name="">
    <br>
    
</form>
<center>
<a  href=""> ليس لدي حساب</a>
    <a href="index.php"><button>رجوع</button></a>
</center>
</div>
</body>


</html>