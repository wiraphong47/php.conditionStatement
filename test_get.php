<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบส่งค่าโดยใช้ Method </title>
</head>
<body>
    <h2>ทดสอบรับค่าจาก method Get <ผ่าน URL></h2>
    <?php
        echo "ศึกษาเรื่อง : ". $_GET['subject']. " ได้ที่ ". $_GET['web'];
    
    
    ?>
    echo <br>
     <a href = "http://localhost:8080/work1/php.conditionStatement/demo_get.php">กลับ</a>
    
</body>
</html>