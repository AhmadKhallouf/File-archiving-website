<!DOCTYPE html>
<html>
<head>
    <title>موقع السيد أحمد</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php
    error_reporting(0);
       include('connect.php');
       session_start();
      

    ?>
</head>
<body>

    <center>
<h1 >شركة السيد أحمد لتصميم المواقع</h1>
<h2 class="haa">العنوان ميت جديد</h2>
<h3 class="haa">هاتف +963  935800669</h3>

<button>
<a href="http://sayedbadrantest.com" target="_blank">موقع السيد أحمد</a>
</button>
<br>
<?php
if(isSet($_SESSION['usernameworkfile'])) {
    
    $n1 = $_SESSION['usernameworkfile'];
    $sql = "SELECT * FROM wuser WHERE wusername='$n1' ";

$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $status= $row['status'];
    echo $status;
    ?>
    <br>
   <P> <?php echo 'welcome mester   ' . $row['wname']; ?></p>
   <br>
   <a href="login.php" >
               <button>
                 تسجيل الخروج
               </button>
   </a>        
   <a href="
   <?php if($status == 'user'):   ?>
    us/us.php
   <?php endif ?>
   <?php if($status == 'admin'):  ?>
    ad/ad.php
   <?php endif ?>
   <?php if($status == 'employee'):  ?>
    em/em.php
   <?php endif ?>
   ">
<button>
      الصفحة الشخصية
    </button></a>
    <?php
}}else
{   
    ?>
     <a href="adduser.php?q1=0">
               <button>
                    تسجيل
               </button>
    </a>
    <a id="id1" href="login.php" >
                <button >
                     دخول
                </button>
    </a>
        <?php
}
        ?>
        
            <br>
            <br>
            <img src="img/img1.jpg"  alt="Error in the image" title="Image">
            <p>هذا الموقع موقع تعليمي و الغرض منه أرشفة الملفات و السلام عليكم و رحمة الله و بركاته</p>
    </center>
         
        </body>
</html>