<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Global Variable</h1>

    <?php
        
        $x =75 ;
        echo "ค่าของ x ==> ".$x;
        echo "<br>";

        function myfunction(){
            //echo "อ่านจาก function ค่าของ x ==> ".$GLOBALS['x']; //เรียกใช้ x จากนอกfunction
            global $x;
            $x = 35;
            echo "อ่านจาก function ค่าของ x ==> ".$x;
        }
        myfunction();
        echo "<br>";
        echo "ค่าของ x ==> ".$x;
    
    echo "<br>";
    echo "<h2>การใช้ข้อมูลจาก server ด้วย \$_server</h2>";
        
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        //echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";



    ?>
</body>
</html>