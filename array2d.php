<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> คำสั่ง array 2d </title>
</head>
<body>
    <h1>Array 2D</h1>
    <?php
    $Foods = array(
       array("ตำไทย",22,18),
       array("ตำลาว",15,13),
       array("ตำป่า",5,2),
       array("ตำมั่ว",17,15)
    );

    echo "<h2> ปริมาณคำสั่งซื้อส้มตำ</h2>\n";

    for($i=0;$i<4;$i++){
        
            echo $Foods[$i][0].": จำนวนที่รอปรุง :".$Foods[$i][1]. "จำนวนที่เสริพแล้ว :".$Foods[$i][2];
            echo "<br>\n";
    }
    echo "<br>";

    echo "<h2> ปริมาณคำสั่งซื้อส้มตำ</h2>\n";
        for ($i=0; $i < 4 ; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                echo $Foods[$i][$j]. "  ";
            }
            echo "<br>";
        }

    ?>
    
</body>
</html>